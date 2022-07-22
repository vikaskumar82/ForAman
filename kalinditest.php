<?php
if(!empty($_POST['check_list']))
{
     foreach($_POST['check_list'] as $id){
        echo "<br>$id was checked! ";
     }
}


?>
	
<form method="post" name="frm">
<input type="checkbox" name="check_list[]" value="1"> 1
<input type="checkbox" name="check_list[]" value="2"> 2
<input type="checkbox" name="check_list[]" value="3"> 3
<input type="checkbox" name="check_list[]" value="4"> 4
<input type="submit" name="submit" />
</form>