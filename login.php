<!doctype html>

<html lang="en">
<head>
     
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Seville dental">
    <link rel="shortcut icon" href="images/fevicon.ico">
<script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800&display=swap" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="tailwind-login-style.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="canonical" href="https://www.sevilledentalclinic.com.au/"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.2.1.css" rel="stylesheet">
    <link href="css/stylje.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
	 <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
<script src="js/seville.js"></script>
	</head>
<head>
    
</head>

<body style='background-image: url("images/slide01.jpg")';>
    <div>
   <div id="headerContent"></div>

    <div style="margin-top:150px; padding:50px">
    <div class="row">
        
        <div class="col-lg-6 col-md-6 col-xs-12" align="right">
  <!-- Login panel -->
  <div class="bg-white px-10 w-full sm:w-6/12">
            <h1 class="pt-7 mb-6"><img src="images/lock-icon.png" style="width:100px; margin-left:120px"></h1>

        <?php
            require_once('LoginModel.php');

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST["email"];
                $password = $_POST["password"];
                
                $loginModel = new LoginModel();
                $result = $loginModel->doLogin($email, $password);

                if ($result) {
                    // redirect user to homepage
                    header("Location: email-list.php");
                } else {
                    // invalid credentials - error message
                     echo "<p class=\"text-red-500 text-sm mb-1\">Incorrect credentials. Please try again.</p>";
                }
            }
        ?>

            <form action="login.php" method="post">
                <div class="input_group flex mb-5 shadow">
                    <div>
                        <i class="fas fa-envelope leading-10"></i>
                    </div>
                    <input type="text" name="email" placeholder="email">
                </div>

                <div class="input_group flex mb-9 shadow">
                    <div>
                        <i class="fas fa-key leading-10"></i>
                    </div>
                    <input type="password" name="password" placeholder="password">
                </div>

                <input class="cursor-pointer bg-blue-600 text-white hover:bg-blue-700 w-full h-10 rounded" type="submit"
                    value="Login">

            </form>

            <div class="mt-7 pb-3 text-center">
                <span class="text-gray-500">Don't have an account?</span>
                <a class="underline text-blue-500 hover:text-blue-600" href="signup.php">Sign Up</a>
            </div>
        </div>
       </div>
       <div class="col-lg-5 col-md-5 col-xs-12">
           <img src="images/logo.png" style="margin-top:80px">
           <h2 style="color:#fff">Login To Seville Dental Admin</h2>
<p style="color:#ccc">Our goal is to make sure you leave with a smile on your face!</p>
             </div>
        <div class="col-md-1"></div>
</div>
</div>
</div>

      
</body>

</html>