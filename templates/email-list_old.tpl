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
	<!--script for pagination-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
$(document).ready(function(){
    //$("#myModal").modal('show');
    $("#headerContent").load('./header.html');
});
</script>

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
.disabled{
color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
}
button:disabled{
	color: #777;
    cursor: not-allowed;
    background-color: #fff;
    border-color: #ddd;
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
					
						{foreach from=$Data item=blog}  
						<tr>
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
							    <!--{$blog.approvestatus} status-->
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
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
								{$blog.preferred_day_time}
							</td>
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
								{$blog.phone}
							</td>
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
								<a href="#">{$blog.email}</a>
							</td>
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
								{$blog.comments}
							</td>
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
							    <span class="label label-success">{$blog.reason}</span>
							</td>
							<td {if $blog.approvestatus eq 1}style="background-color:#90ee90" {/if}>
								{$blog.enquirytype}
							</td>
							<td  style="width: 20%;">
								<a href={if $blog.approvestatus eq 1} "#" class="disabled" {else} "reschedule.php" {/if} class="table-link">
									<span  class="fa-stack">
										<i   class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href={if $blog.approvestatus eq 1} "#" class="disabled" {else} "reschedule.php" {/if} class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a href={if $blog.approvestatus eq 1} "#" class="disabled" {else} "javascript:deleteMail({$blog.id})" {/if} class="table-link danger">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								
								<a href={if $blog.approvestatus eq 1} "#" class="disabled" {else} "javascript:approveMail({$blog.id})" {/if} class="table-link">
									<span class="fa-stack">
										<i class="fa fa-square fa-stack-2x"></i>
										<i class="fa fa-solid fa-thumbs-up fa-stack-1x fa-inverse"></i>
									</span>
								</a>
								<a class="table-link">
									<span class="fa-stack">
										<button href={if $blog.approvestatus eq 1} "#" disabled {else} "javascript:reschedule({$blog.id})" {/if} type="button" style="cursor:pointer">Reschedule</button>
										
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
<ul class="pagination">
        <li><a href="email-list.php?pageno=1">First</a></li>
        <li class= {if $pageno le 1 } "disabled" {/if}>
            <a href= {if $pageno le 1 } "#"  {else} "email-list.php?pageno={$prev}" {/if}>Prev</a>
        </li>
        <li class= {if $pageno ge $total_pages } "disabled" {/if}>
            <a href={if $pageno ge $total_pages } "#"  {else} "email-list.php?pageno={$next}" {/if}>Next</a>
        </li>
        <li><a href="email-list.php?pageno={$total_pages}">Last</a></li>
    </ul>
</div>

    
    
</body>
</html>

    