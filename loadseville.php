<?php 

session_start();
if(!isset($_SESSION['user']))
{
	header("location:login.php");
	exit();
}

require_once("emailsRepo.php");

$emails = new emailsRepo();

$result = $emails->getBasicInfo(1);

//session_start();
$isLoggedIn = isset($_SESSION['user']);
$response = array(
    'status' => true,
    'message' => 'Success',
    'IsLoggedIn' => $isLoggedIn,
    'data' => $result
);

echo json_encode($response);
?>
