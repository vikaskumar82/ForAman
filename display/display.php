	<?php
	error_reporting(0);
	include "connect.php";
	$query="select * from reason";
	$data= mysqli_query($conn, $query);
	$total= mysqli_num_rows($data);

	if($total != 0)
		{
			?>
			<table cellpadding=10 cellspacing=10>
			<tr>
			<th>Id</th>
			<th>Reason</th>
			</tr>
			<?php
			while($result = mysqli_fetch_assoc($data))
				{
					    echo "<tr>
				        <td>". $result['id']."</td>
				        <td>". $result['reason_name']."</td>
						<td><a href='index.php'>Insert</a></td>
						<td><a href='delete.php?$result[id]' onclick='checkdelete()'>Delete</a></td>
						<td><a href='update.php?$result[id] & reas=$result[reason_name]'>Update</a></td>
						</tr>";
				}
				
	    }
	      else
	    {
               echo "all feilds are required";
      	}

?>
</table>
<script>
	function checkdelete()
	{
		confirm("Are you sure you want to delete data");
	}
	</script>

