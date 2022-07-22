<?php
session_start();
ob_start();
if((isset($_SESSION['user_name']))&&(isset($_SESSION['u_id'])))
{
	print "WELCOME !!!! <BR>".$_SESSION['user_name']."<br>YOUR ID IS !!! ".$_SESSION['u_id'] ;
	
	print "<br><a href='sign_out.php'>SIGN OUT</a>";
	$name=$_SESSION['u_id'];
	print "<br><a href='setting.php?na=$name'>SETTING</a>";
}
else
?>