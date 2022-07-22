<?php

require_once("Connection.php");
//require_once("Logger.php");

class emailsRepo
{
        public function __construct()
        {
            /*Logger::$write_log = true;
            Logger::$log_dir = dirname(__FILE__) .'/logs';
            Logger::$log_file_name = 'log-emailsRepo-2022';
            Logger::$log_file_extension = 'log';*/
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
			//$timerequested = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($timerequested)));

            $date = date("Y-m-d", strtotime($date));
    
            if (empty($phone))
            {
                //Logger::info("Phone is empty for : ". $email);
                return $added;
            }

            $query = "INSERT INTO Emails (`full_name`, `customer_type`, `email`, `phone`, `preferred_day_time`, 
            `comments`,`reason`, enquirytype) 
            VALUES ('$fname', '$patient', '$email', '$phone', '$date', '$msg', '$reason', '$enquirytype')";
            
            //echo $query;
            //exit();
            try
            {
                if($r = mysqli_query($dbc->getConn(), $query))
                {
                    $added = true;
                    //Logger::info("Appointment added with email". $email);
                }
            }
            catch(Exception $e)
            {
                //Logger::error( "Error " . $e->getMessage());
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
			$timerequested = mysqli_real_escape_string($dbc->getConn(), trim(strip_tags($timerequested)));
   
           if (empty($fname) || empty($msg))
           {
               return $added;
           }


           $query = "INSERT INTO Emails (`full_name`, `customer_type`, `email`, `phone`, `preferred_day_time`,
            `comments`, enquirytype, preferred_time_slot) VALUES ('$fname',0, '$email', $phone, Now(), '$msg',
             '$enquirytype', '$timerequested')";

            try
            {
                if($r = mysqli_query($dbc->getConn(), $query))
                {
                    $added = true;
                    //Logger::info("Contact enquiry added with email". $email);
                }
            }
            catch(Exception $e)
            {
                //Logger::error( "Error " . $e->getMessage());
            }

           mysqli_close($dbc->getConn());

           return $added;
       }
       
        
       //Data read Function
        public function emaillist()
        {
            $blogs = array();

            $dbc = new Connection();
            if($r = mysqli_query($dbc->getConn(), "SELECT Emails.id, `full_name`, `customer_type`, `email`, `phone`,
             `preferred_day_time`, 'preferred_time_slot', `comments`, `enquirytype`, reasons.reason_name AS reason FROM `Emails`
            LEFT join reasons on reasons.id= Emails.reason WHERE emails.isdeleted=0;"))
            {
                while ($row = mysqli_fetch_array($r)) 
                {
                    $blogs[] = $row;
                }
            }

            mysqli_close($dbc->getConn());

            return $blogs;
        }
		
		public function emaillistPaged($offset, $no_of_records_per_page)
        {
            $blogs = array();

            $dbc = new Connection();
            if($r = mysqli_query($dbc->getConn(), "SELECT Emails.id, `full_name`, `customer_type`, `email`, `phone`, 
            `preferred_day_time`, `comments`, `enquirytype`, reasons.reason_name AS reason, approvestatus, 
            preferred_time_slot FROM `Emails`
            LEFT join reasons on reasons.id= Emails.reason WHERE emails.isdeleted=0 ORDER BY id desc LIMIT $offset, $no_of_records_per_page;"))
            {
                while ($row=mysqli_fetch_array($r)) 
                {
                    $blogs[] = $row;
                  
                }
            }
            echo "$blogs";
            mysqli_close($dbc->getConn());

            return $blogs;
        }
        public function emaillistPagedCount()
        {

            $dbc = new Connection();
            if($r = mysqli_query($dbc->getConn(), "SELECT count(1) from emails where isdeleted=0"))
            {
                $row = mysqli_fetch_array($r)[0]; 
                
            }

            mysqli_close($dbc->getConn());

            return $row;
        }
        //Data one record read Function
        public function fetch($id)
        {
            $dbc = new Connection();
            if($oneresult = mysqli_query($dbc->getConn(), "select * from Emails where id=$id"))
            {
                $blog = mysqli_fetch_array($oneresult); // Retrieve the information.;
            }

            mysqli_close($dbc->getConn());
            return $blog;
        }

            //Data updation Function
        public function Update($fname,$lname,$emailid,$contactno,$address,$userid)
        {
            $updaterecord=mysqli_query($dbc->getConn(),"update  Emails set FirstName='$fname',LastName='$lname',EmailId='$emailid',
            ContactNumber='$contactno',Address='$address' where id='$userid' ");
            return $updaterecord;
        }

        //Data Deletion function Function
        public function deleteMail($rid)
        {
			$dbc = new Connection();
			session_start();
			$name = $_SESSION["user"];
			$deleterecord=mysqli_query($dbc->getConn(),"UPDATE emails SET isdeleted=1, deletedOn=sysdate(), deletedBy= '$name'
             WHERE id=$rid");
			
            return true;
        }
		public function approveMail($rid)
        {
			$dbc = new Connection();
			session_start();
			$name = $_SESSION["user"];
			$approverecord=mysqli_query($dbc->getConn(),"UPDATE emails SET approvestatus=1, approvedOn=sysdate(), approvedBy= '$name' 
            WHERE id=$rid");
			mysqli_close($dbc->getConn());
            return true;
			
        }
		public function reschedule($rid)
        {
			$dbc = new Connection();
			if($r = mysqli_query($dbc->getConn(), "SELECT Emails.id, `full_name`, `customer_type`, `email`, `phone`, `preferred_day_time`,
             `comments`, `enquirytype`, reasons.reason_name AS reason FROM `Emails`
            LEFT join reasons on reasons.id= Emails.reason WHERE emails.isdeleted=0;"))			{
                /* while ($row = mysqli_fetch_array($r)) 
                {
                    $blogs[] = $row;
					
                } */
            }

            mysqli_close($dbc->getConn());

            return $blogs;
        }
		
        public function reasonlist()
		
        {
            $reasons = array();

            $dbc = new Connection();
            if($r = mysqli_query($dbc->getConn(), "SELECT * FROM reasons WHERE active=1"))
            {
                while ($row = mysqli_fetch_array($r)) 
                {
                    $reasons[] = $row;
                }
            }

            mysqli_close($dbc->getConn());

            return $reasons;
        }
		
		public function insert_personaldetails($title,$fname,$lname,$birthday,$phonenumber,$phone,$email,$address,$city,$state,$pcode,$heard,
        $smsconsent,$occupation)
		{
			$dbc = new Connection();
			 session_start();
			 $sid = $_SESSION['id'];
			
			
			
			$sql = "INSERT INTO personal_details (title,first_name,last_name,dob,phone,mobile,email,address,city,state,postcode,heard,
            sms_consent,occupation,created_at,createdby_id,last_modified_at,updatedby_id)
				VALUES ('$title','$fname','$lname','$birthday','$phonenumber','$phone','$email','$address','$city','$state',
                '$pcode','$heard','$smsconsent','$occupation',sysdate(),$sid,sysdate(),$sid)";
			//echo $sql;
			if (mysqli_query($dbc->getConn(), $sql)) {
				$last_id = mysqli_insert_id($dbc->getConn());
				echo "New record has been added successfully ! Last pid is:" . $last_id;
			} 
			else {
				echo "Error: " . $sql . ":-" . mysqli_error($dbc);
			}
			mysqli_close($dbc->getConn());
            return $last_id;

		}
		
		public function insert_medicalhistory($last_id,$mdname,$cpn,$fallergy,$dallergy,$reaction,$reason,$ename,$enum,$mrelation)
		{
			$dbc = new Connection();
			session_start();
			$sid = $_SESSION['id'];
			
			
			$sql1 = "INSERT INTO medical_history (pid,doctor_name,doctor_contact_no,food_allergy,drugs_allergy,dental_treatment_reaction,
            visit_reason,emergency_contact_name,emergency_contact_phone,emergency_contact_relation,created_at,createdby_id,last_modified_at,updatedby_id)
				VALUES ($last_id,'$mdname','$cpn','$fallergy','$dallergy','$reaction','$reason','$ename','$enum',
                '$mrelation',sysdate(),$sid,sysdate(),$sid)";
			//echo $sql;
			if (mysqli_query($dbc->getConn(), $sql1)) {
				echo "New medical record has been added successfully ! Last pid is:" . $last_id;
			} 
			else {
				echo "Error: " . $sql1 . ":-" . mysqli_error($dbc);
			} 
			   mysqli_close($dbc->getConn());
            return $last_id;        

		}
		
		public function insert_privateinsurance($last_id,$icname,$cnum,$rno)
		{
			$dbc = new Connection();
			session_start();
			$sid = $_SESSION['id'];
			
			
			$sql2 = "INSERT INTO private_insurance (pid,company_name,card_no,reference_no,created_at,createdby_id,last_modified_at,updatedby_id)
				VALUES ($last_id,'$icname','$cnum','$rno',sysdate(),$sid,sysdate(),$sid)";
			//echo $sql;
			if (mysqli_query($dbc->getConn(), $sql2)) {
				echo "New insurance record has been added successfully ! Last pid is:" . $last_id;
			} 
			else {
				echo "Error: " . $sql2 . ":-" . mysqli_error($dbc);
			} 
			mysqli_close($dbc->getConn());
            return $last_id;           

		}

        public function get_preferred_method()
        {
            $con = mysqli_connect("localhost","root","","sevilledental");
            $query = "SELECT * from preferred_contact";
            $query_run = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($query_run)) 
            {
                $preferredMethods[] = $row;
            }

            return $preferredMethods;

        }


        public function get_medical_condition()
        {
            $con = mysqli_connect("localhost","root","","sevilledental");
            $query = "SELECT * from medical_conditions";
            $query_run = mysqli_query($con, $query);

            while ($row = mysqli_fetch_array($query_run)) 
            {
                $medical_condition[] = $row;
            }

            return $medical_condition;
        }
}

?>