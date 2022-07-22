<?php
error_reporting(0);
	include "connect.php";
    ?>
<html>
<body>
<form action="" method="GET">
<table>
<tr>
<td>id </td>
<td><input type="text" name="code" value="<?php echo $_GET['id'];?>"></td>
</tr>
<tr>
<td>Reason</td>
<td><input type="text" name="reason_name" value="<?php echo $_GET['reas'];?>"></td>
</tr>
<tr>
<td colspan=2><input type="submit" name="submit" value="update"></td>

</tr>
</table>
</body>
<html>
	<?php
	if($_GET['submit'])
{  
    $id = $_GET['code'];
    $reas = $_GET['reason_name'];
    $query="Update reason SET reason_name='$reas' where id='$id' ";
    $data = mysqli_query($conn, $query);
    if($data)
    {
      echo "<font color='green'>records updated successfully.<a href='display.php'>Check Update list here";

     }
else
     {
      echo "<font color='red'>not updated";
    }
}

?>
