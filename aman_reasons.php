<?php
include('./smarty/Smarty.class.php');
$pageTemplate = "aman_reasons.tpl";

require_once('Connection.php');

require_once("emailsRepo.php");

$emails = new emailsRepo();

$reasons = $emails -> reasonlist();

$smarty = new Smarty;
$smarty->assign('Data', $reasons);
$smarty->assign('Data1', "vikas");
$smarty->display($pageTemplate);


                ?>

