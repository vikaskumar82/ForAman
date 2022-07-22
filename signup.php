<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>
    <meta name="author" content="Seville dental">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="tailwind-login-style.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="canonical" href="https://www.sevilledentalclinic.com.au/"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #676762;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #3597FC;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<script src="js/seville.js"></script>
</head>

<body class="bg-gray-100">
<div id="headerContent"></div>

                 <?php
                require_once('RegisterModel.php');

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = $_POST["name"];
                    $surname = $_POST["surname"];
                    $email = $_POST["email"];
                    $password = $_POST["password"];

                    $registerModel = new RegisterModel();
                    echo "$registerModel->doRegister($name, $surname, $email, $password)";
                }
            ?>
<form action="signup.php" method="post">
  <div class="container" style="background-color:#A2F0F0; margin-top:150px; margin-bottom:50px">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-xs-12" style="padding-top:20px">
      <p align="center"><img src="images/signup.png" width="100" height="100px"></p>
    <p align="center">Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="Surname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Surname" name="surname" required>

    <label for="Email"><b>Email <i class="fas fa-envelope leading-10"></i></b></label>
    <input type="text" placeholder="Email" name="email" required>
    
    <label for="password"><b>Password  <i class="fas fa-key leading-10"></i></b></label>
      <input type="password" placeholder="password" checked="checked" name="password" style="margin-bottom:15px">
    </label>
      </div>
        <div class="col-lg-6 col-md-6 col-xs-12" style="background-color:#ccc; padding:150px 50px 0px 50px">
        <img src="images/logo.png"><br>
        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

<div class="clearfix">
  <button type="button" class="cancelbtn">Cancel</button>
  <button type="submit" class="signupbtn">Sign Up</button>
  <span class="text-gray-500">Already have an account?</span>
            <a class="underline text-blue-500 hover:text-blue-600" href="login.php">Login</a>
</div>
              </div>  
        </div>
    </div>

           
              </form>
  
</body>

</html>