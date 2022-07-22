<?php

/* session_start();
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
*/

include_once 'emailsRepo.php';
$emails = new emailsRepo();

if(isset($_POST['submit']))
{    
			$title = $_POST['title'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$birthday = $_POST['birthday'];
			$phonenumber = $_POST['phonenumber'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$pcode = $_POST['pcode'];
			$heard = $_POST['heard'];
			$smsconsent = $_POST['smsconsent'];
			$occupation = $_POST['occupation'];
	 

	 
	 $mdname = $_POST['mdname'];
	 $cpn = $_POST['cpn'];
	 $fallergy = $_POST['fallergy'];
     $dallergy = $_POST['dallergy'];
	 $reaction = $_POST['reaction'];
	 $reason = $_POST['reason'];
	 $ename = $_POST['ename'];
     $enum = $_POST['enum'];
	 $mrelation = $_POST['mrelation'];
	 
	 
	 $icname = $_POST['icname'];
	 $cnum = $_POST['cnum'];
	 $rno = $_POST['rno'];
	 
	
	 
     
	 
	 /* $sql1 = "INSERT INTO medical_history (pid,doctor_name,doctor_contact_no,food_allergy,drugs_allergy,dental_treatment_reaction,visit_reason,emergency_contact_name,emergency_contact_phone,emergency_contact_relation)
		VALUES ($last_id,'$mdname','$cpn','$fallergy','$dallergy','$reaction','$reason','$ename','$enum','$mrelation')";
		
	$sql2 = "INSERT INTO private_insurance (pid,company_name,card_no,reference_no)
		VALUES ($last_id,'$icname','$cnum','$rno')"; */
		
		if(!empty($_POST['check_list'])) 
		{
			foreach($_POST['check_list'] as $value)
			{
				echo "<br> Chosen name : ".$value.'<br/>';
			}
		} 
		
	/* $sql1 = "INSERT INTO person_medicalconditions (mcid,pid)
		VALUES (,$last_id)"; */

		
	 /* if (mysqli_query($conn, $sql1)) {
        echo "New medical record has been added successfully !";
     } 
	 else {
        echo "Error: " . $sql1 . ":-" . mysqli_error($conn);
     }
	 if (mysqli_query($conn, $sql2)) {
        echo "New insurance record has been added successfully !";
     } 
	 else {
        echo "Error: " . $sql2 . ":-" . mysqli_error($conn);
     } */
	 
	 
	 
//mysqli_close($conn);
	 
	 
	}
	//$smarty->assign('Data');
	/*$pid= $emails->insert_personaldetails($title,$fname,$lname,$birthday,$phonenumber,$phone,$email,$address,$city,
											$state,$pcode,$heard,$smsconsent,$occupation);
	//$pid= $emails->insert_medicalhistory($pid,$mdname,$cpn,$fallergy,$dallergy,$reaction,$reason,$ename,$enum,
											$mrelation);
	//$pid= $emails->insert_privateinsurance($pid,$last_id,$icname,$cnum,$rno);
	//$smarty->display($pageTemplate);
	/* if ($pid > 0){
		echo "Thank you for registration!";
	}
	else{
		echo "Error occured!";
	} */

?>

		