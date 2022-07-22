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

<h1>Client Registration Form</h1>
<h4>Personal Details:</h4>

<form name="myform" action="insert.php" method="post">

<label>Title:</label> 
<label>Mr.</label><input type="radio" value="Mr." name="title" > 
<label>Mrs.</label> <input type="radio" value="Mrs." name="title" >
<label>Miss</label> <input type="radio" value="Miss" name="title" > 
<label>Master</label> <input type="radio" value="Master" name="title" > 
<label>Ms.</label><input type="radio" value="Ms." name="title" ><br>

<label>First name:</label>
  <input type="text" name="fname" maxlength="30" required><br>
<label>Last name:</label>
  <input type="text" name="lname" maxlength="30" required><br>
  
<label>Birthdate:</label>
<input type="date" id="birthday" name="birthday" required><br>

<label>Phone Number:</label>
  <input type="text" name="phonenumber" maxlength="15"><br>
<label>Mobile Number:</label>
  <input type="tel" id="phone" name="phone" placeholder="123456789" pattern="[0-9]{9}}" required><br>
  
<label>Email id:</label>
<input type="email" id="email" name="email" maxlength="30" required>  <br>

<label>Address:</label>
<textarea rows = "5" cols = "35" name = "address"></textarea><br>

<label>City:</label>
  <input type="text" name="city"><br>
  <label>State:</label>
  <input type="text" name="state"><br>
  <label>Post Code:</label>
  <input type="text" name="pcode" required><br>
  
    <label>Preferred Contact Method:</label>
	 <br>
	
  
<label>How did you hear about us?:</label>
<textarea rows = "5" cols = "35" name = "heard"></textarea><br>

<label>Consent for SMS reminders (for appointments, recalls, etc.):</label> 
<label>Yes</label><input type="radio" value="yes" name="smsconsent"> 
<label>No.</label> <input type="radio" value="No" name="smsconsent"><br>

<label>Occupation:</label>
  <input type="text" name="occupation"><br><br>
  
  
  <h4> Private Health Insurance Fund </h4>
  
  <label>Do you have a Private Health Insurance?:</label> 
<label>Yes</label><input type="radio" name="yes" > 
<label>No.</label> <input type="radio" name="No" ><br>

<label>Insurance Company Name:</label>
  <input type="text" name="icname"><br>
<label>Card Number:</label>
  <input type="text" name="cnum"><br>
  <label>Reference Number:</label>
  <input type="text" name="rno"><br>
  
  
  
  
  <h4>Medical History </h4>
  
  <label> Name of Medical Doctor:</label>
  <input type="text" name="mdname"><br>
  <label>Contact Phone Number:</label>
  <input type="text" name="cpn"><br>
  
  <label>List all the medication/Food you are allergic to:</label>
<input type="checkbox" id="checker" name="none" > <label>None</label>
<textarea rows = "5" cols = "35" id="textInput" name="fallergy"></textarea><br>
<label>List all the medication/Drugs you are allergic to:</label>
<input type="checkbox" id="checker1"> <label>None</label>
<textarea rows = "5" cols = "35" id="textInput1"></textarea><br>

<label>List any medical conditions you may have including:</label>
<input type="radio" name="none" > <label>None</label>

  <br>
  
  <label> Any Previous unusual reaction to dental treatment?:</label>
  <input type="text" name="reaction"><br>
  <label>Reason for today's visit:</label>
  <input type="text" name="reason"><br>
  <label> Emergency contact name:</label>
  <input type="text" name="ename"><br>
  <label>Emergency contact number:</label>
  <input type="text" name="enum"><br>
  <label> Emergency contact relationship:</label>
  <input type="text" name="mrelation"><br>
  
  <input type="submit" name="submit" value="Submit" />
  
  </form>


	
	

    
</body>
</html>

    