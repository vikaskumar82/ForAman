<?

public class Logger {

    /**
     * Incremental log, where each entry is an array with the following elements:
     *
     *  - timestamp => timestamp in seconds as returned by time()
     *  - level => severity of the bug; one between debug, warning, error, critical
     *  - name => name of the log entry, optional
     *  - message => actual log message
     */
    protected static $log = [];

    /**
     * Whether to print log entries to screen as they are added.
     */
    public static $print_log = true;

    /**
     * Whether to write log entries to file as they are added.
     */
    public static $write_log = false;

    /**
     * Directory where the log will be dumped, without final slash; default
     * is this file's directory
     */
    public static $log_dir = __DIR__;
    
    /**
     * File name for the log saved in the log dir
     */
    public static $log_file_name = "log";

    /**
     * File extension for the logs saved in the log dir
     */
    public static $log_file_extension = "log";
    
    /**
     * Whether to append to the log file (true) or to overwrite it (false)
     */
    public static $log_file_append = true;

    /**
     * Absolute path of the log file, built at run time
     */
    private static $log_file_path = '';

    /**
     * Where should we write/print the output to? Built at run time
     */
    private static $output_streams = [];

    /**
     * Whether the init() function has already been called
     */
    private static $logger_ready = false;
    
    /**
     * Associative array used as a buffer to keep track of timed logs
     */
    private static $time_tracking = [];


    /**
     * Add a log entry with an informational message for the user.
     */
    public static function info( $message, $name = '' ) {
        return self::add( $message, $name, 'info' );
    }


    /**
     * Add a log entry with a diagnostic message for the developer.
     */
    public static function debug( $message, $name = '' ) {
        return self::add( $message, $name, 'debug' );
    }


    /**
     * Add a log entry with a warning message.
     */
    public static function warning( $message, $name = '' ) {
        return self::add( $message, $name, 'warning' );
    }


    /**
     * Add a log entry with an error - usually followed by
     * script termination.
     */
    public static function error( $message, $name = '' ) {
        return self::add( $message, $name, 'error' );
    }


    /**
     * Start counting time, using $name as identifier.
     *
     * Returns the start time or false if a time tracker with the same name
     * exists
     */
    public static function time( string $name ) {

        if ( ! isset( self::$time_tracking[ $name ] ) ) {
            self::$time_tracking[ $name ] = microtime( true );
            return self::$time_tracking[ $name ];
        }
        else {
            return false;
        }
    }


    /**
     * Stop counting time, and create a log entry reporting the elapsed amount of
     * time.
     *
     * Returns the total time elapsed for the given time-tracker, or false if the
     * time tracker is not found.
     */
    public static function timeEnd( string $name ) {

        if ( isset( self::$time_tracking[ $name ] ) ) {
            $start = self::$time_tracking[ $name ];
            $end = microtime( true );
            $elapsed_time = number_format( ( $end - $start), 2 );
            unset( self::$time_tracking[ $name] );
            self::add( "$elapsed_time seconds", "'$name' took", "timing" );
            return $elapsed_time;
        }
        else {
            return false;
        }
    }


    /**
     * Add an entry to the log.
     *
     * This function does not update the pretty log. 
     */
    private static function add( $message, $name = '', $level = 'debug' ) {

        /* Create the log entry */
        $log_entry = [
            'timestamp' => time(),
            'name' => $name,
            'message' => $message,
            'level' => $level,
        ];

        /* Add the log entry to the incremental log */
        self::$log[] = $log_entry;

        /* Initialize the logger if it hasn't been done already */
        if ( ! self::$logger_ready ) {
            self::init();
        }

        /* Write the log to output, if requested */
        if ( self::$logger_ready && count( self::$output_streams ) > 0 ) {
            $output_line = self::format_log_entry( $log_entry ) . PHP_EOL;
            foreach ( self::$output_streams as $key => $stream ) {
                fputs( $stream, $output_line );
            }
        }

        return $log_entry;
    }


    /**
     * Take one log entry and return a one-line human readable string
     */
    public static function format_log_entry(array $log_entry ) 
    {

        $log_line = "";

        if ( ! empty( $log_entry ) ) {

            /* Make sure the log entry is stringified */
            $log_entry = array_map( function( $v ) { return print_r( $v, true ); }, $log_entry );
        
            /* Build a line of the pretty log */
            $log_line .= date( 'c', $log_entry['timestamp'] ) . " ";
            $log_line .= "[" . strtoupper( $log_entry['level'] ) . "] : ";
            if ( ! empty( $log_entry['name'] ) ) {
                $log_line .= $log_entry['name'] . " => ";
            }
            $log_line .= $log_entry['message'];
        
        }
        
        return $log_line;
    }
    
    
    /**
     * Determine whether an where the log needs to be written; executed only
     * once.
     *
     * @return {array} - An associative array with the output streams. The 
     * keys are 'output' for STDOUT and the filename for file streams.
     */
    public static function init() {

        if ( ! self::$logger_ready ) {

            /* Print to screen */
            if ( true === self::$print_log ) {
                self::$output_streams[ 'stdout' ] = STDOUT;
            }

            /* Build log file path */
            if ( file_exists( self::$log_dir ) ) {
                self::$log_file_path = implode( DIRECTORY_SEPARATOR, [ self::$log_dir, self::$log_file_name ] );
                if ( ! empty( self::$log_file_extension ) ) {
                    self::$log_file_path .= "." . self::$log_file_extension;
                }
            }

            /* Print to log file */
            if ( true === self::$write_log ) {
                if ( file_exists( self::$log_dir ) ) {
                    $mode = self::$log_file_append ? "a" : "w";
                    self::$output_streams[ self::$log_file_path ] = fopen ( self::$log_file_path, $mode );
                }
            }
        }

        /* Now that we have assigned the output stream, this function does not need
        to be called anymore */
        self::$logger_ready = true;

    }


    /**
     * Dump the whole log to the given file.
     *
     * Useful if you don't know before-hand the name of the log file. Otherwise,
     * you should use the real-time logging option, that is, the $write_log or
     * $print_log options.
     *
     * The method format_log_entry() is used to format the log.
     *
     * @param {string} $file_path - Absolute path of the output file. If empty,
     * will use the class property $log_file_path.
     */
    public static function dump_to_file( $file_path='' ) {

        if ( ! $file_path ) {
            $file_path = self::$log_file_path;
        }
        
        if ( file_exists( dirname( $file_path ) ) ) {

            $mode = self::$log_file_append ? "a" : "w";
            $output_file = fopen( $file_path, $mode );

            foreach ( self::$log as $log_entry ) {
                $log_line = self::format_log_entry( $log_entry );
                fwrite( $output_file, $log_line . PHP_EOL );
            }
            
            fclose( $output_file );
        }
    }
    
    
    /**
     * Dump the whole log to string, and return it.
     *
     * The method format_log_entry() is used to format the log.
     */
    public static function dump_to_string() {
      
      
        $output = '';
        
        foreach ( self::$log as $log_entry ) {
            $log_line = self::format_log_entry( $log_entry );
            $output .= $log_line . PHP_EOL;
        }
        
        return $output;
    }
}
?>
