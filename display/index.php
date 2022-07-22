<?php
error_reporting(0);
	include "connect.php";
  ?>
<html>
<body>
<form action="index.php" method="GET">
<table>
<tr>
<td>id : </td>
<td><input type="text" name="code"></td>
</tr>
<tr>
<td>reason : </td>
<td><input type="text" name="reason_name"></td>
</tr>
<tr>
<td colspan=2><input type="submit" name="submit" value="submit"></td>

</tr>
</table>
</body>
<html>
	<?php
	if($_GET['submit'])
{

        $id= $_GET['code'];
		$reason= $_GET['reason_name'];

		if($id!="" && $reason!="")
		{
		$query="insert into reason values ('$id','$reason')";
			$data= mysqli_query($conn, $query);
			if($data)
			{
				echo "data inserted";
		
			}
	    }
	      else
	        {
               echo "all feilds are required";
         	}
		}
?>
