<?php
session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit();
}
else if($_SESSION['user'] != "Admin")
{
    echo 'You are unauthorized. Please contact admin';
    exit();
}
	require_once("emailsRepo.php");
		$rid	=	$_POST['rid'];	
		//echo $rid;

$emails = new emailsRepo();
$emails->approveMail($rid);
$rdata=$emails->fetch($rid);

$full_name =  $rdata['full_name'];
$email =  $rdata['email'];
$phone =  $rdata['phone'];
$preferred_day_time =  $rdata['preferred_day_time'];
$comments =  $rdata['comments'];
$reason =  $rdata['reason'];

/* echo $full_name;
echo $email;
echo $phone;
echo $preferred_day_time;
echo $comments;
echo $reason; */

$subject = "Appointment approval at Sevilledental Clinic";
//echo $subject;

$to =  "aman1993.gndu@gmail.com";	
//echo $to;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0";
$headers .= "Content-type:text/html;charset=iso-8859-1 ";
// More headers
$headers .= 'From: <kalindivaidya12@gmail.com>';

$message = "Dear Patient," . "\r\n" . "We have approved your request of appointment with following details.\r\n Kindly fill the form below before you visit for the appointment.\r\n\r\n".
"<a href="appointment_form.php">Appointment Form</a>\r\n" .
"Here are your appointment details with us:\r\n" .
"Name ". $full_name . "\r\n" .
"Email: ". $email . "\r\n" .
"Phone: ". $phone . "\r\n" .
"Date proposed: ". $preferred_day_time . "\r\n" .
"Reason: ". getReason($reason) . "\r\n" .
"Comments: ". $comments . "\r\n";

echo $message;
//echo '<a href="registration.php">Appointment Form</a>';

//mail($to,$subject,$message,$headers);

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