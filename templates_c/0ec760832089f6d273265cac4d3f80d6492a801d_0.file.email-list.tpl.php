<?php
/* Smarty version 3.1.39, created on 2022-01-03 13:35:10
  from '/home/sdclinic/public_html/templates/email-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61d2fb8e291303_00721138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec760832089f6d273265cac4d3f80d6492a801d' => 
    array (
      0 => '/home/sdclinic/public_html/templates/email-list.tpl',
      1 => 1641216908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d2fb8e291303_00721138 (Smarty_Internal_Template $_smarty_tpl) {
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

<style>

/* USER LIST TABLE */
.user-list tbody td > img {
    position: relative;
	max-width: 50px;
	float: left;
	margin-right: 15px;
}
.user-list tbody td .user-link {
	display: block;
	font-size: 1.25em;
	padding-top: 3px;
	margin-left: 60px;
}
.user-list tbody td .user-subhead {
	font-size: 0.875em;
	font-style: italic;
}

/* TABLES */
.table {
    border-collapse: separate;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
	background-color: #eee;
}
.table thead > tr > th {
	border-bottom: 1px solid #C2C2C2;
	padding-bottom: 0;
}
.table tbody > tr > td {
	font-size: 0.875em;
	background: #f5f5f5;
	border-top: 10px solid #fff;
	vertical-align: middle;
	padding: 12px 8px;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
	padding-left: 20px;
}
.table thead > tr > th span {
	border-bottom: 2px solid #C2C2C2;
	display: inline-block;
	padding: 0 5px;
	padding-bottom: 5px;
	font-weight: normal;
}
.table thead > tr > th > a span {
	color: #344644;
}
.table thead > tr > th > a span:after {
	content: "\f0dc";
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-decoration: inherit;
	margin-left: 5px;
	font-size: 0.75em;
}
.table thead > tr > th > a.asc span:after {
	content: "\f0dd";
}
.table thead > tr > th > a.desc span:after {
	content: "\f0de";
}
.table thead > tr > th > a:hover span {
	text-decoration: none;
	color: #2bb6a3;
	border-color: #2bb6a3;
}
.table.table-hover tbody > tr > td {
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
}
.table tbody tr td .call-type {
	display: block;
	font-size: 0.75em;
	text-align: center;
}
.table tbody tr td .first-line {
	line-height: 1.5;
	font-weight: 400;
	font-size: 1.125em;
}
.table tbody tr td .first-line span {
	font-size: 0.875em;
	color: #969696;
	font-weight: 300;
}
.table tbody tr td .second-line {
	font-size: 0.875em;
	line-height: 1.2;
}
.table a.table-link {
	margin: 0 5px;
	font-size: 1.125em;
}
.table a.table-link:hover {
	text-decoration: none;
	color: #2aa493;
}
.table a.table-link.danger {
	color: #fe635f;
}
.table a.table-link.danger:hover {
	color: #dd504c;
}

.table-products tbody > tr > td {
	background: none;
	border: none;
	border-bottom: 1px solid #ebebeb;
	-webkit-transition: background-color 0.15s ease-in-out 0s;
	transition: background-color 0.15s ease-in-out 0s;
	position: relative;
}
.table-products tbody > tr:hover > td {
	text-decoration: none;
	background-color: #f6f6f6;
}
.table-products .name {
	display: block;
	font-weight: 600;
	padding-bottom: 7px;
}
.table-products .price {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .price > i {
	color: #8dc859;
}
.table-products .warranty {
	display: block;
	text-decoration: none;
	width: 50%;
	float: left;
	font-size: 0.875em;
}
.table-products .warranty > i {
	color: #f1c40f;
}
.table tbody > tr.table-line-fb > td {
	background-color: #9daccb;
	color: #262525;
}
.table tbody > tr.table-line-twitter > td {
	background-color: #9fccff;
	color: #262525;
}
.table tbody > tr.table-line-plus > td {
	background-color: #eea59c;
	color: #262525;
}
.table-stats .status-social-icon {
	font-size: 1.9em;
	vertical-align: bottom;
}
.table-stats .table-line-fb .status-social-icon {
	color: #556484;
}
.table-stats .table-line-twitter .status-social-icon {
	color: #5885b8;
}
.table-stats .table-line-plus .status-social-icon {
	color: #a75d54;
}
</style>

	</head>
<body style="background-color:#999">
<div id="headerContent"></div>
<div style="margin-top:150px">
<hr>
<h1 align="center"><img src="images/fevicon.ico">SEVILLE DENTAL CLINIC ENQUIRY DETAILS</h1>
<hr>

<div class="container">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix">
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
							<th><span>Enquiry by</span></th>
							<th><span>Date requested</span></th>
							<th><span>Phone</span></th>
							<th class="text-center"><span>Email</span></th>
							<th>Message</th>
							<th>Reason</th>
							<th>Enquiry Type</th>
						</tr>
					</thead>
					<tbody>
					    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Data']->value, 'blog');
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
?>  
						<tr>
							<td>
							    
							    <?php if (strstr($_smarty_tpl->tpl_vars['blog']->value['reason'],"Toothache-Extraction")) {?>
<img src="/images/toothextraction1.png" alt="">
<?php } elseif (strstr($_smarty_tpl->tpl_vars['blog']->value['reason'],"Filling")) {?>
<img src="/images/filling1.png" alt="">
<?php } elseif (strstr($_smarty_tpl->tpl_vars['blog']->value['reason'],"Clean")) {?>
<img src="/images/clean1.png" alt="">
<?php } else { ?>
<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
<?php }?>
								
								<a href="#" class="user-link"><?php echo $_smarty_tpl->tpl_vars['blog']->value['full_name'];?>
</a>
								<span class="user-subhead"></span>
							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['blog']->value['preferred_day_time'];?>

							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['blog']->value['phone'];?>

							</td>
							<td>
								<a href="#"><?php echo $_smarty_tpl->tpl_vars['blog']->value['email'];?>
</a>
							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['blog']->value['comments'];?>

							</td>
							<td>
							    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['blog']->value['reason'];?>
</span>
							</td>
							<td>
								<?php echo $_smarty_tpl->tpl_vars['blog']->value['enquirytype'];?>

							</td>
							<td style="width: 20%;">
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="#" class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href="#" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
						</tr>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tbody>
				</table>
			</div>
			<!-- <ul class="pagination pull-right">
				<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
			</ul> -->
		</div>
	</div>
</div>

</div>
</body>
</html>


 
<?php }
}
