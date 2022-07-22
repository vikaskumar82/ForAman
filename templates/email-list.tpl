<html>
<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/fevicon.ico">
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800&display=swap" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.2.1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
	 <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
    <script>
$(document).ready(function(){
    //$("#myModal").modal('show');
    $("#headerContent").load('./header.html');
});
</script>

<style>

input[type="text"] {
 
  border: 2px solid #aaa;
  border-radius: 4px;
  margin: 8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: 0.3s;
}

input[type="text"]:focus {
  border-color: dodgerBlue;
  box-shadow: 0 0 8px 0 dodgerBlue;
}

.inputWithIcon input[type="text"] {
  padding-left: 40px;
}

.inputWithIcon {
  position: relative;
  
}

.inputWithIcon i {
  position: absolute;
  left: 0;
  top: 8px;
  padding: 9px 8px;
  color: #aaa;
  transition: 0.3s;
}

.inputWithIcon input[type="text"]:focus + i {
  color: dodgerBlue;
}

.inputWithIcon.inputIconBg i {
  background-color: #aaa;
  color: #fff;
  padding: 9px 4px;
  border-radius: 4px 0 0 4px;
}

.inputWithIcon.inputIconBg input[type="text"]:focus + i {
  color: #fff;
  background-color: dodgerBlue;
}
.arrow {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}

.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}
.file1
{
color:#6699FF;
}
.file1 i
{
color:#999;
font-size:12px;
}
.tab1
{
font-family:Verdana;
font-size:14px;
}
.tab1 th
{
padding:10px;
border-top:thin solid #999999;
border-bottom: thin solid #999999;
}
.tab1 td
{
padding:5px;
border-bottom: thin solid #ccc;
background-color:#FFFFFF;
}
.tab2
{
font-family:Arial;
font-size:14px;

}

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
	font-size: 13px;
	background: #fff;
	border-top: 1px solid #ccc;
	vertical-align: middle;
	padding: 15px 8px;
	font-family:verdana;
}
.table tbody > tr > td:first-child,
.table thead > tr > th:first-child {
	padding-left: 20px;
}
.table thead > tr > th span {
	border-bottom: 1px solid #C2C2C2;
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
.pagination ul li {
  display: inline-block;
  padding:10px;
  
  }

.pagination ul li a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination ul li a.active {
  background-color: #4CAF50;
  color: white;
  border-radius: 5px;
}

.pagination ul li  a:hover:not(.active) {
  background-color: #ddd;
  border-radius: 5px;
}
</style>

	</head>
<body style="background-color:#999">
<div id="headerContent"></div>
<div style="height:150px"></div>
<hr>
<h1 align="center"><img src="images/fevicon.ico">SEVILLE DENTAL CLINIC ENQUIRY DETAILS</h1>
<hr>
<div class="container-fluid" align="center" style="background-color:#FAFAFA; width:88%">
  <table border="0" class="tab2" border="0">
  <tr>
   <td><br /></td>
  </tr>
  <tr>
  <td>
   <div class="inputWithIcon">
  <input type="button" style="width:30px; height:35px; font-size:15px; font-weight:bold">
  <i class="fa fa-rotate-right" style="font-size:20px; margin-top:-8px; color:#000000" aria-hidden="true"></i>
</div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Copy S3 URI" style="width:150px; height:35px; font-size:15px; font-weight:bold">
 <i class="fa fa-copy" style="font-size:15px; margin-top:-8px; color:#000000" aria-hidden="true"></i>
</div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Copy URL" style="width:150px; height:35px; font-size:15px; font-weight:bold">
 <i class="fa fa-copy" style="font-size:15px; margin-top:-8px; color:#000000" aria-hidden="true"></i>
</div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Download" style="width:150px; height:35px; font-size:15px; font-weight:bold">
 <i class="fa fa-download" style="font-size:15px; margin-top:-8px; color:#000000" aria-hidden="true"></i>
</div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Open" style="width:150px; height:35px; font-size:15px; font-weight:bold">
 <i class="fa fa-arrow-right" style="font-size:15px; margin-top:-8px; color:#000000" aria-hidden="true"></i>
</div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Delete" style="width:120px;  height:35px; font-size:15px; font-weight:bold">
 </div>
</td>
<td>
<div class="inputWithIcon">
<select name="Actions" id="Actions" style="width:130px; height:35px; font-size:15px; font-weight:bold">
  <option value="Actions">Actions</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Create folder" style="width:150px; height:35px; font-size:15px; font-weight:bold">
 <i class="fa fa-folder" style="margin-top:-5px"></i>
 </div>
</td>
<td>
<div class="inputWithIcon">
 <input type="button" value="Upload" style="width:130px; height:35px; background-color:#FF6633; border:none; color:#333333; font-size:15px; font-weight:bold">
 <i class="fa fa-upload" style="font-size:15px; margin-top:-8px; color:#000000" aria-hidden="true"></i>
</div>
</td>
</tr>
<tr>
<td colspan="4">
<div class="inputWithIcon">
 <input type="text"  style="width:550px; height:35px; font-size:15px; font-weight:bold">
 <i class="fa fa-magnifying-glass"></i>
 <i class="fa fa-search" style="font-size:16px; color:#000000" aria-hidden="true"></i>
</div>
</td>
<td></td>
<td colspan="3">
<div class="pagination">
<ul>
        <li><a href="email-list.php?pageno=1"  class="active">First</a></li>
        <li class= {if $pageno le 1 } "disabled" {/if}>
            <a href= {if $pageno le 1 } "#"  {else} "email-list.php?pageno={$prev}" {/if}>Prev</a>
        </li>
        <li class= {if $pageno ge $total_pages } "disabled" {/if}>
            <a href={if $pageno ge $total_pages } "#"  {else} "email-list.php?pageno={$next}" {/if}>Next</a>
        </li>
        <li><a href="email-list.php?pageno={$total_pages}">Last</a></li>
    </ul>
</div>

</td>
<td valign="top">
<div class="inputWithIcon">
<input type="button" style="width:40px; height:40px; background-color:#FAFAFA; border:none">
 <a href="#"> <i class="fa fa-gear" style="font-size:20px; color:#000000" title="settings" aria-hidden="true"></i></a>
</div>
</td>
</tr>
</table>
</div>
<div class="container-fluid" style="width:90%">
<div class="row">
	<div class="col-lg-12">
		<div class="main-box clearfix" style="background-color:#ccc">
			<div class="table-responsive">
				<table class="table user-list">
					<thead>
						<tr>
						    <th><input type="checkbox" id="selectname" name="sname"></th>
<th align="left">Enquiry by&nbsp;&nbsp;<i class="fa fa-caret-up" style="font-size:20px"></i></th>
					<th align="left">Date&nbsp;&nbsp;<i class="fa fa-caret-up" style="font-size:20px"></i></th>
							<th align="left">Time Slot&nbsp;&nbsp;<i class="fa fa-caret-down" style="font-size:20px"></i></th>
							<th align="left">Phone&nbsp;&nbsp;<i class="fa fa-caret-down" style="font-size:20px"></i></th>
							<th align="left">Email&nbsp;&nbsp;<i class="fa fa-caret-up" style="font-size:20px"></i></th>
							<th align="left">Message&nbsp;&nbsp;<i class="fa fa-caret-up" style="font-size:20px"></i></th>
							<th align="left">Reason&nbsp;&nbsp;<i class="fa fa-caret-up" style="font-size:20px"></i></th>
							<th align="left">Enquiry Type&nbsp;&nbsp;<i class="fa fa-caret-down" style="font-size:20px"></i></th>
						</tr>
					</thead>
					<tbody>
					    {foreach from=$Data item=blog}  
						<tr>
						  <td><input type="checkbox" id="selectname" name="sname"></td>
							<td  class="file1" width="10%">
							    
							    {if $blog.reason|strstr:"Toothache-Extraction"}
<img src="/images/toothextraction1.png" alt="">
{else if $blog.reason|strstr:"Filling"}
<img src="/images/filling1.png" alt="">
{else if $blog.reason|strstr:"Clean"}
<img src="/images/clean1.png" alt="">
{else}
<img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
{/if}
								
								<a href="#" class="user-link">{$blog.full_name}</a>
								<span class="user-subhead"></span>
							</td>
							<td width="10%">
								{$blog.preferred_day_time}
							</td>
							<td width="10%">
								{$blog.preferred_time_slot}
							</td>
							<td width="10%">
								{$blog.phone}
							</td>
							<td class="file1">
								<a href="#">{$blog.email}</a>
							</td>
							<td width="20%">
								{$blog.comments}
							</td>
							<td width="15%">
							    <span class="label label-success">{$blog.reason}</span>
							</td>
							<td width="15%">
								{$blog.enquirytype}
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
								<a href="javascript:deleteMail({$blog.id})" class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</td>
						</tr>
						{/foreach}
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


 
