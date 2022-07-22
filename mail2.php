<?php
	$patient =  $_POST['patient'];
	$fname	=	$_POST['fname'];	
	$email	=	$_POST['email'];
	$phone	=	$_POST['phone'];
	$date   =   $_POST['date'];
	$msg	=	$_POST['comment'];
	$reason =   $_POST['reason'];
	$reasonOther =   $_POST['reasonother'];
    $timingrequested =   $_POST['timingrequested'];
	
	$subject = "Query from website";
	
    $to =  "sevilledentalclinic@gmail.com";	
    
	/*$message = "
	<html>
	<head>
	<title>HTML email</title>
	<style>
			table, td, div, h1, p {font-family: Arial, sans-serif;}
			table, td 
			{
				border:2px solid #000000 !important;
			}
			tr:nth-child(even) {background: #CCC}
	tr:nth-child(odd) {background: #FFF}
	</style>
	</head>
	<body>
	<table>
	<tr>
	<td>Name:</td>
	<td>" . $fname . "</td>
	</tr>
	<tr>
	<td>Patient Type:</td>
	<td>" . ($patient == 1 ? 'Returning' : 'New') . "</td>
	</tr>
	<tr>
	<td>Email:</td>
	<td>" . $email . "</td>
	</tr>
	<tr>
	<td>Phone:</td>
	<td>" . $phone . "</td>
	</tr>
	<tr>
	<td>Date purposed:</td>
	<td>" . $date . "</td>
	</tr>
	<tr>
	  <td colspan=3>Comments:
	  " . $msg . "
	  </td>
	  	</tr>
		  <tr>
	  <td colspan=3>Comments:
	  " . $reason . "
	  </td>
	  <td colspan=3>Comments:
	  " . $reasonOther . "
	  </td>
	  	</tr>
	</table>
	</body>
	</html>
	";*/
	


require_once("emailsRepo.php");

/* include_once("Logger.php");
Logger::$write_log = true;

Logger::$log_dir = dirname(__FILE__) .'/logs';
Logger::$log_file_name = 'log-appointment-2022';
Logger::$log_file_extension = 'log'; */



$blog = new emailsRepo();
		// Execute the query:
		//if ($blog->AddAppointment($fname, $patient, $email, $phone, $date, $msg, $reason, $reasonOther, 'Appointment', $timingrequested))		if ($blog->Add($fname, $patient, $email, $phone, $date, $msg, $reason, $reasonOther, 'Appointment', $timingrequested))
		{			//echo "ADd function called";
		    //Logger::info("successfully added the entry for Page-mail2 : " .$email);
		} 
		else {
		    //Logger::error( "Could not add the entry because there is an error running the query. Contact admin (Page-mail2)!" . $email);
			print '<p style="color: red;">Could not add the entry because there is an error running the query. Contact admin!<br
			</p>';
		}


	// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0";
$headers .= "Content-type:text/html;charset=iso-8859-1 ";

// More headers
$headers .= 'From: Website Enquiry<info@sevilledentalclinic.com.au>';



$message = "Name ". $fname . "\r\n" .
"Patient Type: ". ($patient == 1 ? 'Returning' : 'New') . "\r\n" .
"Email: ". $email . "\r\n" .
"Phone: ". $phone . "\r\n" .
"Date purposed: ". $date . "\r\n" .
"Reason: ". getReason($reason) . "\r\n" .
"Reason (others): ". $reasonOther . "\r\n" .
"Time requested: " .$timingrequested . "\r\n" .
"Comments: ". $msg . "\r\n";


//echo 'sending email again';
//Logger::info("sending email for the customer with email: " . $email);
mail($to,$subject,$message,$headers);
//Logger::info("email sent to ". $email);
//echo 'sent email again';


function getReason($reasonid){
    $blog = new emailsRepo();
    $reasons = $blog-> reasonlist();
    foreach ($reasons as $reason){
        
        if ($reason["id"] == $reasonid){
            return $reason["reason_name"];
        }
    }
}

	
?>