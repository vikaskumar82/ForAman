<?php

require_once("../emailsRepo.php");

$emails = new emailsRepo();

$reasons=$emails->reasonlist();

header('Content-type: application/json');
echo json_encode($reasons);

?>

