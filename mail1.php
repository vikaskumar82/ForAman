<?php
	$patient =  $_POST['patient'];
	$fname	=	$_POST['fname'];	
	$email	=	$_POST['email'];
	$phone	=	$_POST['phone'];
	$date   =   $_POST['date'];
	$msg	=	$_POST['comment'];
	$reason =   $_POST['reason'];
	$reasonOther =   $_POST['reason-other'];
	
	$subject = "Query from website";
	
    $to =  "deep27b@gmail.com";	
    
	/*$message = "
	<html>
	<head>
	<title>HTML email</title>
	<style>
			table, td, div, h1, p {font-family: Arial, sans-serif;}
			table, td 
			{
				border:2px solid #000000 !important;
			}
			tr:nth-child(even) {background: #CCC}
	tr:nth-child(odd) {background: #FFF}
	</style>
	</head>
	<body>
	<table>
	<tr>
	<td>Name:</td>
	<td>" . $fname . "</td>
	</tr>
	<tr>
	<td>Patient Type:</td>
	<td>" . ($patient == 1 ? 'Returning' : 'New') . "</td>
	</tr>
	<tr>
	<td>Email:</td>
	<td>" . $email . "</td>
	</tr>
	<tr>
	<td>Phone:</td>
	<td>" . $phone . "</td>
	</tr>
	<tr>
	<td>Date purposed:</td>
	<td>" . $date . "</td>
	</tr>
	<tr>
	  <td colspan=3>Comments:
	  " . $msg . "
	  </td>
	  	</tr>
		  <tr>
	  <td colspan=3>Comments:
	  " . $reason . "
	  </td>
	  <td colspan=3>Comments:
	  " . $reasonOther . "
	  </td>
	  	</tr>
	</table>
	</body>
	</html>
	";*/
	


require_once("emailsRepo.php");

//include_once("Logger.php");
/*Logger::$write_log = true;

Logger::$log_dir = dirname(__FILE__) .'/logs';
Logger::$log_file_name = 'log-appointment-2022';
Logger::$log_file_extension = 'log';*/



$blog = new emailsRepo();
		// Execute the query:
		if ($blog->Add($fname, $patient, $email, $phone, $date, $msg, $reason, $reasonOther, 'Appointment'))
		{
		    //Logger::info("successfully added the entry for : " .$email);
			//print '<p align="center"><font color="red">The blog entry has been added!</font></p>';
			//header( 'Location: index.html' );
		} 
		else {
		    //Logger::error( "Could not add the entry because there is an error running the query. Contact admin!" . $email);
			print '<p style="color: red;">Could not add the entry because there is an error running the query. Contact admin!<br
			</p>';
		}

	// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0";
$headers .= "Content-type:text/html;charset=iso-8859-1 ";

// More headers
$headers .= 'From: Website Enquiry<info@sevilledentalclinic.com.au>';



$message = "Name ". $fname . "\r\n" .
"Patient Type: ". ($patient == 1 ? 'Returning' : 'New') . "\r\n" .
"Email: ". $email . "\r\n" .
"Phone: ". $phone . "\r\n" .
"Date purposed: ". $date . "\r\n" .
"Reason: ". getReason($reason) . "\r\n" .
"Reason (others): ". $reasonOther . "\r\n" .
"Comments: ". $msg . "\r\n";


//echo 'sending email again';
//Logger::info("sending email for the customer with email: " . $email);
mail($to,$subject,$message,$headers);
//Logger::info("email sent to ". $email);
//echo 'sent email again';


function getReason($reasonid){
    $blog = new emailsRepo();
    $reasons = $blog-> reasonlist();
    foreach ($reasons as $reason){
        
        if ($reason["id"] == $reasonid){
            return $reason["reason_name"];
        }
    }
}

	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seville Dental Clinic</title>
	<link rel="shortcut icon" href="images/fevicon.ico">
	  <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,800&display=swap" rel="stylesheet">
	  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.2.1.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
	 <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/owl.theme.css" rel="stylesheet">
	<script type="text/javascript">
function hide() {
var div_ref = document.getElementById("id_textbox_1");
div_ref.style.visibility = "hidden";
}

function show() {
var div_ref = document.getElementById("id_textbox_1");
div_ref.style.visibility = "visible";
}
</script>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2321117504822058');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2321117504822058&ev=PageView&noscript=1"
/></noscript>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-720998536"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-720998536');
</script>
<script src="js/seville.js"></script>
	</head>
  <body data-spy="scroll" data-target="#sevilleNavbar" data-offset="110">
<div id="headerContent"></div>
		
 <section id="home">
	  <div id="dental-clinic" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" style="height:20vh">
    <div class="carousel-item item8 active">
		<div class="carousel-caption">
          <h1 class="animated slideInDown" style="animation-delay: 0.3s;"></h1>
         </div>
    </div>
     </div>
 
	  </section>
		</div>
		<br>
			
		   <!-- Full Page Image Background Carousel Header -->
  
  
</div>
	  <section id="aboutus">
	<h2 align="center">Thanks! Your details are successfully submitted.</h2>
	  </section>
	  
	  <div class="contact">
	  <section id="contact">
	  <div class="container-fluid">
	  <div class="row">
	  <div class="col-sm-10 offset-sm-1">
	  <div class="row"><div class="col-md-3"><img src="images/logo.png" width="150" class="img-fluid my-5" alt="">
	  <p class="text-white">Our office is dedicated to providing you with friendly, professional service while addressing all of your dental health needs.</p>
	  </div>
	  <div class="col-md-4">
	  <h3 class="text-white mb-4">On The Map</h3>
	  <div class="map-container">
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.5239422126006!2d145.4566011152136!3d-37.77775927975894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad62988ba7f4135%3A0xd5380e7885d731c2!2sShop+13%2F547+Warburton+Hwy%2C+Seville+VIC+3139%2C+Australia!5e0!3m2!1sen!2sin!4v1564847148161!5m2!1sen!2sin" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
	  </div>
	  </div>
	  <div class="col-md-5">
	  <h3 class="text-white mb-4">Contact Us</h3>
	  <form>
	  <div class="row">
	  <div class="col-sm-6">
	  <div class="form-group">
    <input type="text" class="form-control" id="fname" placeholder="Your Name">
  </div>
	  </div>
	  <div class="col-sm-6">
	  <div class="form-group">
    <input type="email" class="form-control" id="email" placeholder="Your Email">
  </div>
	  </div>
	  <div class="col-12">
	  <div class="form-group">
							<textarea class="form-control" id="message" name="contact_form_message" placeholder="Message" rows="7"></textarea>
						</div>
	  </div>
	  <div class="col-12">
	  <div class="text-center">
							<button class="btn btn-submit btn-block" type="submit">SEND</button>
							</div>
	  </div>
	  </div>
	  </form>
	  </div>
	  </div>
	  </div>
	  </div>
	  </div>
	  </section></div>
	  <div class="sticky-footer">
	  <div class="container-fluid">
	  <div class="row">
	  <div class="col-10 offset-1">
	  &copy; 2019 www.SevilleDentalClinic.com.au ALL RIGHTS ARE RESERVED.</div>
    </div>
	</div>
	</div>
<div class="gotoTop"><span></span></div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.2.1.js"></script>
	  <script src="js/owl.carousel.2.3.4.js"></script>
<script src="js/beforeAfter.js"></script>
	  <script>
	  //CODE Written by Sandeep Kumar
	  
		  $('html, body').animate({scrollTop: $('body').offset().top}, 100)
		  
	 var wh = $(window).outerHeight() - 50;
var ww = $(window).outerWidth();

	  $('.carousel').carousel({
  	interval: 10000
	  });
		  $(window).scroll(function(){
			  
    if ($(window).scrollTop() >= 100) {
        $('nav').addClass('darker');
		$('.gotoTop').addClass('in');
    }
    else {
        $('nav').removeClass('darker');
		$('.gotoTop').removeClass('in');
    }
});
$('.gotoTop').click(function (){
$('html, body').animate({scrollTop: $('body').offset().top}, 1000);
});

		  $('nav a').click(function (){
			  var el = $(this).attr("href");
		if (ww <992) {
		$('html, body').animate({scrollTop: $(el).offset().top - 90}, 1000);
		$(".navbar-toggler").click();
		}
		else {
		$('html, body').animate({scrollTop: $(el).offset().top}, 1000);
		}
		return false;
  })
$('a.btn-primary, .carousel-caption a').click(function (){
			  var el = $(this).attr("href");
    $('html, body').animate({scrollTop: $(el).offset().top}, 1000);
			  return false;
  })
	 $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsiveClass: true,
				dots:false,
                responsive: {
                  0: {
                    items: 1
                  },
                  800: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  },
					1200: {
                    items: 4						
                  }
                }
              })
            })
	  </script>
	  <script>
	function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}
</script>
  </body>
</html>
