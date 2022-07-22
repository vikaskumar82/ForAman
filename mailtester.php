<?php

//require_once(. "emailsRepo.php");
//$filename = dirname(__FILE__) . '/emailsRepo.php';
//echo $filename


require_once("emailsRepo.php");

$blog = new emailsRepo();

include_once("Logger.php");
Logger::$write_log = true;

Logger::$log_dir = dirname(__FILE__) .'/logs';
Logger::$log_file_name = 'log-2022';
Logger::$log_file_extension = 'log';

Logger::error( "file not found, exiting" );


//echo $blog-> emaillist();
// Execute the query:

/*if ($blog->Add('vik', 1, 'vikas@123.com', '04566756456', '2012-01-01', 'as fas fs fs f'))
{
	header( 'Location: index.html' );
}
else {
	print '<p style="color: red;">Could not add the entry</p>';
}*/


	$patient =  1;
	$fname	=	'vikas kumar';	
	$email	=	'vikas.kumar1982@yahoo.com';
	$phone	=	'0477646537';
	$date   =   '2021-01-01';
	$msg	=	'comments adbf';
	
	$subject = "Query from website";


$to =  "sevilledentalclinic@gmail.com";

/*
$message = "
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
</table>
</body>
</html>
";*/

$message = "Name ". $fname . "\r\n" .
"Patient Type: ". ($patient == 1 ? 'Returning' : 'New') . "\r\n" .
"Email: ". $email . "\r\n" .
"Phone: ". $phone . "\r\n" .
"Date purposed: ". $date . "\r\n";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0";
$headers .= "Content-type:text/html;charset=UTF-8";

// More headers
$headers .= 'From: <info@sevilledentalclinic.com.au>';

//echo 'sending email again';
//mail($to,$subject,$message,$headers);
echo getReason(3);

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
