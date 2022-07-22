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
echo $rid;

$emails = new emailsRepo();

$emails->deleteMail($rid);


?>