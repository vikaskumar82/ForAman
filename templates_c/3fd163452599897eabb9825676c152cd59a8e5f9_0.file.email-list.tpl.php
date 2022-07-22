<?php
/* Smarty version 3.1.39, created on 2021-12-08 10:59:05
  from 'C:\xampp\htdocs\projects-BSIT\sevilledentalclinic1\templates\email-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61b081e9c06f45_31609796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fd163452599897eabb9825676c152cd59a8e5f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects-BSIT\\sevilledentalclinic1\\templates\\email-list.tpl',
      1 => 1638957540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61b081e9c06f45_31609796 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
>
$(document).ready(function(){
    //$("#myModal").modal('show');
    $("#headerContent").load('./header.html');
});
<?php echo '</script'; ?>
>
	</head>
<body style="background-color:#999">
<div id="headerContent"></div>
<div style="margin-top:150px">
<hr>
<h1 align="center"><img src="images/fevicon.ico">SEVILLE DENTAL CLINIC ENQUIRY DETAILS</h1>
<hr>
<table width="70%" cellspacing="10px" cellpadding="10" align="center">
<tr style="height:30px; font-size:14px; background-color:#ccc" align="center">
<th>Enquiry by</th>
<th>Day-Time</th>
<th>Email-id</th>
<th>Phone-no</th>
<th>Message</th>
<th>Reason</th>
<th>Enquiry Type</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Data']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>  
<tr style="background-color:#C6F0F0; font-size:15px; font-family:verdana">
<td align="center"><b><?php echo $_smarty_tpl->tpl_vars['blog']->value['full_name'];?>
</b></td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['blog']->value['preferred_day_time'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['blog']->value['email'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['blog']->value['phone'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['blog']->value['comments'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['blog']->value['reason'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['blog']->value['enquirytype'];?>
</td>
</tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
</div>
</body>
</html>


 
<?php }
}
