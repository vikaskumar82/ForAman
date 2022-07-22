<?php 

session_start();
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

include('./smarty/Smarty.class.php');

$pageTemplate = "templates/email-list.tpl";

$smarty = new Smarty;
  
 
/* This script retrieves blog entries from the database. */

// This page may be loaded as a redirect after successfully adding a new entry, updating an entry or deleting an entry. In that case the URL will contain a number which the below code will retrieve using the HTTP GET method. If there is no number because it is the first time the user has visited this page (i.e. hasn't try to add, update or delete an entry) then no message is displayed:

	if (isset($_GET['result'])  && ($_GET['result'] == 1)) {print "<p id=\"lblStatus\" >Your entry was successfully added to the database</p>";}

	if (isset($_GET['result'])  && ($_GET['result'] == 2)) {print "<p id=\"lblStatus\" >Your entry was successfully updated in the database</p>";}

	if (isset($_GET['result'])  && ($_GET['result'] == 3)) {print "<p id=\"lblStatus\" >Your entry was successfully deleted from the database</p>";}


require_once("emailsRepo.php");

$emails = new emailsRepo();



// code for pagination (https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html)
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 10; // change it for page size increase.
        $offset = ($pageno-1) * $no_of_records_per_page;
 
		$total_rows=$emails->emaillistPagedCount();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
		$smarty->assign('Data', $emails->emaillistPaged($offset, $no_of_records_per_page));
		$smarty->assign('next', $pageno+1);
		$smarty->assign('prev', $pageno-1);
		$smarty->assign('total_pages', $total_pages);
		$smarty->assign('pageno', $pageno);
		$smarty->display($pageTemplate);


	
		

  
?>


<script>
	function deleteMail(id)
	{
		var result=window.confirm("Are you sure you want to delete this record?");
		if (!result)
		{
			return;
		}
		$.ajax(
		{
            url:"deletemail.php",    //the page containing php script
            type: "post",    //request type,
			
            
            data: {rid:id},
            success:function(){
				window.location.reload();
            }
        });
	}
	function approveMail(id)
	{
		var result=window.confirm("Are you sure you want to approve this record?");
		if (!result)
		{
			return;
		}
		$.ajax(
		{
            url:"approvemail.php",    //the page containing php script
            type: "post",    //request type,
			
            data: {rid:id},
            success:function(e){
				document.write(e);
				//window.location.reload();
            },
			error: function(XMLHttpRequest, textStatus, errorThrown) {
				alert(errorThrown);
			}
        });
	}
	
	function reschedule(id)
	{
		confirm("Are you sure you want to reschedule this appointment?");
		$.ajax(
		{
            url:"reschedule.php",    //the page containing php script
            type: "post",    //request type,
			
            dataType: 'json',
            data: {rid:id},
            success:function(){
				window.location.reload();
                console.log("The record is rescheduled");
            }
        });
	}

	function sendMail(id)
	{
		var url = 'approvemail.php';	

    new Ajax.Request(url,{
            onComplete:function(transport)
            {
                var feedback = transport.responseText.evalJSON();
                if(feedback.result==0)
                    alert('There was a problem sending the email, please try again.');
            }
        });
}
</script>