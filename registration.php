<?php
include('./smarty/Smarty.class.php');

$pageTemplate = "templates/registration_new2.tpl";



require_once("emailsRepo.php");

$preferred_method = new emailsRepo();

$pf_method = $preferred_method -> get_preferred_method();
$medical_condition= $preferred_method -> get_medical_condition();

$smarty = new Smarty;

$smarty->assign('preferredMethods', $pf_method);
$smarty-> assign('medical_condition', $medical_condition);
$smarty->display($pageTemplate);

?>
