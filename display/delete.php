<?php
include ("connect.php");
$id = $_GET['id'];
$query ="delete from reason where id = '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    echo "record deleted";
}
else
{
    echo "delete process failed";
}

?>
