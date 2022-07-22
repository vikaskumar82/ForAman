<?php
/* Smarty version 3.1.39, created on 2022-07-22 09:39:47
  from 'C:\xampp\htdocs\aman_sevilledentalclinic\templates\registration_new2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62da5443d01ea5_98782693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '917a60d9a6990895e3254d6d1256f183725920d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aman_sevilledentalclinic\\templates\\registration_new2.tpl',
      1 => 1658475583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62da5443d01ea5_98782693 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/fevicon.ico">
<?php echo '<script'; ?>
 type="text/javascript" src="https://formden.com/static/cdn/formden.js"><?php echo '</script'; ?>
>
	  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800&display=swap" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.2.1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
	 <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<!--script for pagination-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function()
		{
			$("#idno").change(function()
			{
				var st = this.checked;
				if(st)
				{
					$("#cname").prop("disabled",true);
					$("#cnum").prop("disabled",true);
					$("#rnum").prop("disabled",true);
				}
				else
				{
					$("#cname").prop("disabled",false);
					$("#cnum").prop("disabled",false);
					$("#rnum").prop("disabled",false);
				}
			}
			);
		}
		);
		
		$(function()
		{
			$("#idyes").change(function()
			{
				var st = this.checked;
				if(st)
				{
					$("#cname").prop("disabled",false);
					$("#cnum").prop("disabled",false);
					$("#rnum").prop("disabled",false);
				}
				else
				{
					$("#cname").prop("disabled",true);
					$("#cnum").prop("disabled",true);
					$("#rnum").prop("disabled",true);
				}
			}
			);
		}
		);
		
		$(function()
		{
			$("#checker").change(function()
			{
				var st = this.checked;
				if(st)
				{
					$("#textInput").prop("disabled",true);
				}
				else
				{
					$("#textInput").prop("disabled",false);
				}
			}
			);
		}
		);
		
		$(function()
		{
			$("#checker1").change(function()
			{
				var st = this.checked;
				if(st)
				{
					$("#textInput1").prop("disabled",true);
				}
				else
				{
					$("#textInput1").prop("disabled",false);
				}
			}
			);
		}
		);
	<?php echo '</script'; ?>
>
	
<style>
input[type=text] {
  border: 1px solid #000;
  border-top:none;
  border-left:none;
  border-right:none;
  width:200px;
  font-family:Arial;
  outline:none;
}
input[type=date] {
  border: 1px solid #000;
  border-radius: 4px;
  width:200px;
}
input[type=textarea] {
  border: 1px solid #000;
  border-radius: 4px;
  width:200px;
}
</style>
</head>

<body>
<section>
<div class="container">
<div clss="row">
<div class="col-md-12">
<hr>
</div>
</div>
<div class="row">
<div class="col-md-6">
<form name="myform" action="insert.php" method="post">
<fieldset>
  <legend>Personal Details</legend>
<label>Title:</label> 
<label>Mr.</label><input type="radio" value="Mr." name="title" > 
<label>Mrs.</label> <input type="radio" value="Mrs." name="title" >
<label>Miss</label> <input type="radio" value="Miss" name="title" > 
<label>Master</label> <input type="radio" value="Master" name="title" > 
<label>Ms.</label><input type="radio" value="Ms." name="title" ><br>
 <label for="fname">First name:</label>
 <input type="text" name="fname" maxlength="30" id="fname" required><br>

 <label for="lname">Last name:</label>
  <input type="text" name="lname" maxlength="30" required  id="lname"><br>
   <label>Birthdate:</label>
<input type="date" id="birthday" name="birthday"  id="lname" required><br>
 <label>Phone no:</label>
  <input type="text" name="phonenumber" id="pnum" maxlength="15"><br>
 <label>Mobile no:</label>
  <input type="tel" id="phone" id="mbno" name="phone" placeholder="123456789" required><br>
<label>Email id:</label>
<input type="email" id="email" id="email" name="email" maxlength="30" required><br>
<label>City:</label>
  <input type="text" name="city" id="city"><br>
   <label>State:</label>
  <input type="text" name="state" id="state"><br>
   <label>Post Code:</label>
  <input type="text" name="pcode" id="pcode" required><br>
     <label>Preferred Contact Method:</label>
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preferredMethods']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
		<input type="checkbox" name="check_list[]" /> <?php echo $_smarty_tpl->tpl_vars['method']->value['pc_method'];?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<br>

	<label>Occupation:</label>
  <input type="text" name="occupation"  id="org"><br>
<label>Address:</label><br><textarea rows = "5" cols = "35"  id="addre" name ="address"></textarea>

	<!--<input type="checkbox"> <label> Home Phone</label>
  <input type="checkbox"> <label> Mobile</label>
  <input type="checkbox"> <label> Email</label><br>-->
 </fieldset>
<label>How did you hear about us?:</label><br>
<textarea rows = "5" cols = "35"  id="hear" name = "heard"></textarea><br>

<label>Consent for SMS reminders (for appointments, recalls, etc.):</label>
<label>Yes</label><input type="radio"  value="yes" name="smsconsent">
<label>No</label> <input type="radio"  value="No" name="smsconsent">
</div>
<div class="col-md-6">
 	<hr>
  <h4> Private Health Insurance Fund </h4>
  <hr>
  <label>Do you have a Private Health Insurance?:</label>
 <label>Yes</label><input type="radio"   name="phi" id="idyes">
  <label>No.</label> <input type="radio"  name="phi" id="idno"><br>
 
<label>Insurance Company Name:</label>
  <input type="text"  id="cname" name="icname"><br>
<label>Card Number:</label>
  <input type="text" id="cnum" name="cnum"><br>
  <label>Reference Number:</label>
  <input type="text"  id="rnum" name="rno"><br>
    <hr>
  <h4>Medical History </h4>
  <hr>
  <label> Name of Medical Doctor:</label>
  <input type="text"  name="mdname"><br>
  <label>Contact Phone Number:</label>
  <input type="text" name="cpn"><br>
  <label>List all the medication/Food you are allergic to:</label>
<input type="checkbox" id="checker" name="none">
 <label>None</label><br>
<textarea rows = "5" cols = "35" id="textInput" name="fallergy"></textarea><br>
<label>List all the medication/Drugs you are allergic to:</label>
<input type="checkbox"  id="checker1"> <label>None</label><br>
<textarea rows = "5" cols = "35" id="textInput1" name="dallergy"></textarea><br>
<label>List any medical conditions you may have including:</label><br>
<input type="radio" name="none"> <label>None</label><br>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medical_condition']->value, 'method');
$_smarty_tpl->tpl_vars['method']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['method']->value) {
$_smarty_tpl->tpl_vars['method']->do_else = false;
?>
		<input type="checkbox" name="check_list[]" /> <?php echo $_smarty_tpl->tpl_vars['method']->value['mcname'];?>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 <br> <label> Emergency contact name:</label>
  <input type="text" name="ename"><br>
  <label>Emergency contact number:</label>
  <input type="text" name="enum"><br>
  <label> Emergency contact relationship:</label>
  <input type="text"  name="mrelation"><br>
  <label> Any Previous unusual reaction to dental treatment?:</label>
  <input type="text" name="reaction"><br>
 <label>Reason for today's visit:</label>
  <input type="text"  name="reason"><br>
   <input type="submit" name="submit" style="background-color:#0033FF; color:#FFFFFF; width:300px; height:50px"
    value="Submit" onClick="phonenumber(document.form1.text1)"/>
    </div>

  </form>
</div>

</div>
</div>
</section>
    
</body>
</html>

    <?php }
}
