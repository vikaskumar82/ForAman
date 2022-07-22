<?php

require_once("Connection.php");
require_once("Logger.php");

class emailsRepo
{
        public function __construct()
        {
            Logger::$write_log = true;
            Logger::$log_dir = dirname(__FILE__) .'/logs';
            Logger::$log_file_name = 'log-emailsRepo-2022';
            Logger::$log_file_extension = 'log';
        }

        //Data Insertion Function
        public function Add($fname, $patient, $email, $phone, $date, $msg, $reason,$reasonOther, $enquirytype)
         {
            $added = false;
            $dbc = new Connection();

            $fname = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($fname)));
            $patient = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($patient)));
            $email = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($email)));
            $phone = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($phone)));
            $date = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($date)));
            $msg = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($msg)));
            $reason = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($reason)));
            $date = date("Y-m-d", strtotime($date));
    
            if (empty($phone))
            {
                Logger::info("Phone is empty for : ". $email);
                return $added;
            }

            $query = "INSERT INTO Emails (`full_name`, `customer_type`, `email`, `phone`, `preferred_day_time`, `comments`,`reason`, enquirytype) VALUES ('$fname', $patient, '$email', '$phone', '$date', '$msg', '$reason', '$enquirytype')";
            //echo $query;
            //exit();
            try
            {
                if($r = mysqli_query($dbc->getConn(), $query))
                {
                    $added = true;
                    Logger::info("Appointment added with email". $email);
                }
            }
            catch(Exception $e)
            {
                Logger::error( "Error " . $e->getMessage());
            }

            mysqli_close($dbc->getConn());

            return $added;
        }

        public function Add1($fname, $email, $phone, $msg, $enquirytype)
        {
           $added = false;
           $dbc = new Connection();

           $fname = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($fname)));
           $email = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($email)));
           $phone = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($phone)));
           $msg = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($msg)));
          
   
           if (empty($fname) || empty($msg))
           {
               return $added;
           }


           $query = "INSERT INTO Emails (`full_name`, `customer_type`, `email`, `phone`, `preferred_day_time`, `comments`, enquirytype) VALUES ('$fname',0, '$email', $phone, Now(), '$msg', '$enquirytype')";

            try
            {
                if($r = mysqli_query($dbc->getConn(), $query))
                {
                    $added = true;
                    Logger::info("Contact enquiry added with email". $email);
                }
            }
            catch(Exception $e)
            {
                Logger::error( "Error " . $e->getMessage());
            }

           mysqli_close($dbc->getConn());

           return $added;
       }
       
        
       //Data read Function
        public function emaillist()
        {
            $blogs = array();

            $dbc = new Connection();
            if($r = mysqli_query($dbc->getConn(), "SELECT Emails.id, `full_name`, `customer_type`, `email`, `phone`, `preferred_day_time`, `comments`, `enquirytype`, reasons.reason_name AS reason FROM `Emails`
            LEFT join reasons on reasons.id= Emails.reason;"))
            {
                while ($row = mysqli_fetch_array($r)) 
                {
                    $blogs[] = $row;
                }
            }

            mysqli_close($dbc->getConn());

            return $blogs;
        }
        
        //Data one record read Function
        public function fetch($id)
        {
            $dbc = new Connection();
            if($oneresult = mysqli_query($dbc->getConn(), "select * from Email where id=$id"))
            {
                $blog = mysqli_fetch_array($oneresult); // Retrieve the information.;
            }

            mysqli_close($dbc->getConn());
            return $blog;
        }

            //Data updation Function
        public function Update($fname,$lname,$emailid,$contactno,$address,$userid)
        {
            $updaterecord=mysqli_query($dbc->getConn(),"update  Emails set FirstName='$fname',LastName='$lname',EmailId='$emailid',ContactNumber='$contactno',Address='$address' where id='$userid' ");
            return $updaterecord;
        }

        //Data Deletion function Function
        public function Delete($rid)
        {
            //$deleterecord=mysqli_query($dbc->getConn(),"delete from blogs where id=$rid");
            //return $deleterecord;
            return true;
        }

        public function reasonlist()
        {
            $reasons = array();

            $dbc = new Connection();
            if($r = mysqli_query($dbc->getConn(), "SELECT * FROM reasons where active=1"))
            {
                while ($row = mysqli_fetch_array($r)) 
                {
                    $reasons[] = $row;
                }
            }

            mysqli_close($dbc->getConn());

            return $reasons;
        }
}

?>