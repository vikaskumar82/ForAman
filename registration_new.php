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
	$('#checker').val()
		let checker = document.getElementById("checker");
		let checker1 = document.getElementById("checker1");
		let textInput = document.getElementById("textInput");
		let textInput1 = document.getElementById("textInput1");

		checker.addEventListener('click', () => textInput.disabled = checker.checked);
		checker1.addEventListener('click', () => textInput1.disabled = checker1.checked);
	</script>
	
	
</head>

<body style="background-color:#999">
<section>
<div class="container">
<div clss="row">
<div class="col-md-12">
<h1 align="center" style="font-size:50px">Client Registration Form</h1>
<hr color="#333333">
<h2 align="center" tyle="font-size:40px">Personal Details:</h2>
<hr>
</div>
</div>
<div class="row">
<div class="col-md-12">
<form name="myform" action="insert.php" method="post">
<table width="100%">
<tr>
<td colspan="2">
<label>Title:</label> 
<label>Mr.</label><input type="radio" value="Mr." name="title" > 
<label>Mrs.</label> <input type="radio" value="Mrs." name="title" >
<label>Miss</label> <input type="radio" value="Miss" name="title" > 
<label>Master</label> <input type="radio" value="Master" name="title" > 
<label>Ms.</label><input type="radio" value="Ms." name="title" >
</td>
</tr>
<tr>
<td width="45%">
<div class="form-group">
      <label>First name:</label>
       <input type="text" name="fname" maxlength="30" class="form-control" id="fname" required><br>
      </div></td>
	  <td width="10%"></td>
<td width="45%">
<div class="form-group">
    <label>Last name:</label>
      <input type="text" name="lname" maxlength="30" required class="form-control" id="lname"><br>
    </div>
	</td>
</tr>
<tr>
<td width="45%">    
<div class="form-group">  
<label>Birthdate:</label>
<input type="date" id="birthday" name="birthday" class="form-control" id="lname" required><br>
</div></td>
<td width="10%"></td>
<td width="45%">
<div class="form-group">  
<label>Phone Number:</label>
  <input type="text" name="phonenumber" class="form-control" id="pnum" maxlength="15"><br>
  </div></td>
</tr>
<tr>
<td width="45%"> <div class="form-group">  
<label>Mobile Number:</label>
  <input type="tel" id="phone" class="form-control" id="mbno" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required><br>
  </div>
</td>
<td width="10%"></td>
<td width="45%"> <div class="form-group">  
<label>Email id:</label>
<input type="email" id="email" class="form-control" id="email" name="email" maxlength="30" required>  <br>
</div></td>
</tr>
<tr>
<td width="45%"><div class="form-group">  
<label>Address:</label>
<textarea rows = "5" cols = "35" class="form-control" id="addre" name ="address"></textarea><br>
</div></td>
<td width="10%"></td>
<td width="45%">
<div class="form-group">  
<label>City:</label>
  <input type="text" name="city" class="form-control" id="city"><br>
  </div></td>
  </tr>
  <tr>
  <td width="45%"> <div class="form-group">
  <label>State:</label>
  <input type="text" name="state" class="form-control" id="state"><br>
  </div></td>
  <td width="10%"></td>
  <td width="45%">
  <div class="form-group">
  <label>Post Code:</label>
  <input type="text" name="pcode" class="form-control" id="pcode" required><br>
     <label>Preferred Contact Method:</label>
	<?php
	$con = mysqli_connect("localhost","root","","sevilledental");
	$query = "SELECT * from preferred_contact";
	$query_run = mysqli_query($con, $query);
	 if(mysqli_num_rows($query_run) > 0)
	{
		foreach($query_run as $prefmethod)
		{
			?>
			<input type="checkbox" name="check_list[]" /> <?= $prefmethod['pc_method']; ?>
			<?php
		}
	}
	else
	{
		echo "No record found!";
	} 
	?><br>
	<!--<input type="checkbox"> <label> Home Phone</label>
  <input type="checkbox"> <label> Mobile</label>
  <input type="checkbox"> <label> Email</label><br>-->
  </div></td>
  </tr>
  <tr>
  <td width="45%"> <div class="form-group">
<label>How did you hear about us?:</label>
<textarea rows = "5" cols = "35" class="form-control" id="hear" name = "heard"></textarea><br>
</div></td>
<td width="10%"></td>
  <td width="45%">  
  <div class="form-group">
<label>Consent for SMS reminders (for appointments, recalls, etc.):</label>
<table>
  <tr>
  <td><label>Yes</label><input type="radio"  value="yes" name="smsconsent"></td>
  <td><label>No</label> <input type="radio"  value="No" name="smsconsent"></td>
 </tr>
 </table>
</div>
 
  <tr>
  <td width="45%"><div class="form-group">
<label>Occupation:</label>
  <input type="text" name="occupation" class="form-control" id="org"><br><br>
 </div> </td>
 <td width="10%"></td>
  <td width="45%">
    <div class="form-group">
  <h4> Private Health Insurance Fund </h4>
  <hr>
  <label>Do you have a Private Health Insurance?:</label>
  <table>
  <tr>
  <td><label>Yes</label><input type="radio"   name="yes" > </td>
  <td><label>No.</label> <input type="radio"  name="No" ></td>
  </tr>
  </table>
</div></td>
  </tr>
 <tr>
 <td width="45%"> <div class="form-group">
<label>Insurance Company Name:</label>
  <input type="text" class="form-control" id="cname" name="icname"><br>
<label>Card Number:</label>
  <input type="text" class="form-control" id="cnum" name="cnum"><br>
  <label>Reference Number:</label>
  <input type="text" class="form-control" id="rnum" name="rno"><br>
  </div>
  </td>
    <td width="10%"></td>
 <td width="45%"><div class="form-group">
  
  <h4>Medical History </h4>
  <hr>
  <label> Name of Medical Doctor:</label>
  <input type="text" class="form-control" name="mdname"><br>
  <label>Contact Phone Number:</label>
  <input type="text" class="form-control" name="cpn"><br>
  </div></td>
 </tr>
<tr>
<td width="45%"> <div class="form-group">
  <label>List all the medication/Food you are allergic to:</label>
<input type="checkbox" id="checker" name="none"> <label>None</label>
<textarea rows = "5" cols = "35" id="textInput" class="form-control" name="fallergy"></textarea><br>
</div></td>
  <td width="10%"></td>
<td width="45%"><div class="form-group">
<label>List all the medication/Drugs you are allergic to:</label>
<input type="checkbox"  id="checker1"> <label>None</label>
<textarea rows = "5" cols = "35" id="textInput1" class="form-control"></textarea><br>
</div></td>
</tr>
<tr>
<td width="45%">
<div class="form-group">
<label>List any medical conditions you may have including:</label><br>
<input type="radio" name="none"> <label>None</label><br>
<?php
	$con = mysqli_connect("localhost","root","","sevilledental");
	$query = "SELECT * from medical_conditions";
	$query_run = mysqli_query($con, $query);
	 if(mysqli_num_rows($query_run) > 0)
	{
		foreach($query_run as $mcnames)
		{
			?>
			<input type="checkbox"  name="check_list[]"/> <?= $mcnames['mcname']; ?>
			<?php
		}
	}
	else
	{
		echo "No record found!";
	} 
	
	?>
  <br>
  </div></td>
  <td width="10%"></td>
<td width="45%"> 
  <label> Emergency contact name:</label>
  <input type="text" class="form-control" name="ename"><br>
  <label>Emergency contact number:</label>
  <input type="text" class="form-control" name="enum"><br>
  <label> Emergency contact relationship:</label>
  <input type="text" class="form-control" name="mrelation"><br>
 </div></td>
</tr>
<tr>
<td  width="45%"><div class="form-group">
  <label> Any Previous unusual reaction to dental treatment?:</label>
  <input type="text" class="form-control"  name="reaction">
</td>
<td width="10%"></td>
<td>  <label>Reason for today's visit:</label>
  <input type="text" class="form-control" name="reason"></td>

</tr>
<tr>
<td colspan="3" height="20%"><br><br></td>
</tr>
<tr>
<td colspan="3" align="right"> 
   <div class="form-group"> 
  <input type="submit" name="submit" class="form-control" style="background-color:#0033FF; color:#FFFFFF; width:300px; height:50px" value="Submit" onClick="phonenumber(document.form1.text1)"/>
    </div></td>

</table>

  </form>
</div>

</div>
</div>
</section>
    
</body>
</html>

    