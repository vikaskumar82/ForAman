
<?php
// session_start();
// if(!isset($_SESSION['user']))
// {
// 	header("location:login.php");
// 	exit();
// }
// else if($_SESSION['user'] != "Admin")
// {
//     echo 'You are unauthorized. Please contact admin';
//     exit();
// }

//include('./smarty/Smarty.class.php');

//$pageTemplate = "templates/reasons-list.tpl";

//$smarty = new Smarty;

require_once("emailsRepo.php");

$emails = new emailsRepo();

$reasons = $emails -> reasonlist();
//echo $reasons[0];

//$smarty->assign('Data', $emails->reasonlist());

// display it
//$smarty->display($pageTemplate);

?>
<html>
<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/fevicon.ico">
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800&display=swap" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.2.1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
	 <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
    <script>
$(document).ready(function(){
    //$("#myModal").modal('show');
    $("#headerContent").load('./header.html');
});
</script>
	</head>
<body style="background-color:#999">
<div id="headerContent"></div>
<p style="margin-top:200px">ADD A NEW REASON:
<p><?php foreach($reasons as $i) {
    echo  $i["reason_name"];
}?>
<form>
Reason: <input type="text" name="reason_name">
<select>
    <option value="1" selected>Active</option>
    <option value="0">Inacive</option>
</select>

<input type="submit" name="submit" value="Save">

</form>


<div>

<div>
</p>
</body>
</html>
