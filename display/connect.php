<?php

            $host="localhost:3306";
			$user="root";
			$password="";
			$database="admin";
            
            $conn = mysqli_connect($host,$user,$password,$database);
            if ($conn)
            {

                echo "connection ok";
            }
            else
            {
                die("connection failed because" . mysqli_connect_error());


            }
			

?>