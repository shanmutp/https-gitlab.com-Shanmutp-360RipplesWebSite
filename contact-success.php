<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Contact Us :: 360 Ripples Solution Pvt Ltd - Ripples of Excellence</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- Main CSS -->
        <link rel="stylesheet" href="css/main.css">        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Linea Basic -->
        <link rel="stylesheet" href="css/lineabasic.css">        
        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Slick carousel -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        
        <!-- Slider -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <link rel="stylesheet" type="text/css" href="js/revolutionslider/css/settings.css">
        <link rel="stylesheet" type="text/css" href="js/revolutionslider/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="js/revolutionslider/css/layers.css">
        <script src="js/vendor/modernizr.js"></script>

    </head>
    <body data-spy="scroll" data-offset="50" data-target=".navbar-default" class="slider-home">

        <!-- Preloader -->
        <div class="preloader">
            <span></span>
            <span></span>
        </div>

        <!-- Navbar -->
        <?php include("nav.php");?>
		
       <div class="clearfix"></div> 
        <div style="height:68px;"></div>
       
	   <section class="contact-bg">
    <div class="container">      
   
      <div class="row">
	  
	  <div class="col-md-3" style="margin-left:-90px;"><div style="background:#efefef; margin-top:35px;"><?php include("scroll-top.php")?></div></div>
        <div class="col-md-8 bg-cnt" style="padding-bottom:130px;">
          
            <b>
              <span class="small" style="font-size:35px; color:#dc2440;">Contact Us</span>
             </b>
			 
			 <h3>Your Enquiry has been successfully submitted...</h3>
              <!--
                            <p> <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.6020784073926!2d80.2275528!3d12.9332775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525c5784aa5805%3A0xd669df9b2c86e6bb!2sHoneykomb+Apartment%2C+2nd+Cross+St%2C+Chandrasekhar+Avenue%2C+Thoraipakkam%2C+Chennai%2C+Tamil+Nadu+600097!5e0!3m2!1sen!2sin!4v1476866464467" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></p><br>
 
						
						<address class="address">
                            <i class="icon icon-basic-mail"></i>
                            <a href="mailto:shanmu@360ripples.com">shanmu@360ripples.com</a><br>
<a href="mailto:vasuki@360ripples.com">
vasuki@360ripples.com</a>
                        </address>
                        <address class="address">
                            <i class="icon icon-basic-geolocalize-01"></i>
                           
							<strong>Head Office:</strong><br>
No 36 3'rd street Chandrasekaran Nagar,<br> Honey Komb Building,
PTC quarters Bus stop,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thoraipakkam OMR,
Chennai, 
Tamilnadu.
                        </address>
                        <address class="address">
                            <i class="icon icon-basic-smartphone"></i>
                           +91 9884491012 / 9003050639 
                        </address>
						 
						  
	               
        </div>
		
        <div class="col-md-2" style="background:#0033CC;">
		<!--div style="margin-top:35px; backgrou
		/nd-color:#0099FF;"><img src="img/1.png" alt="about us"></div>
		  
		</div-->
		 
      </div>
    </div>
  </section>
  
<?php
 
 function FilterCChars($TheString)
{
 return preg_replace('/[\x00-\x1F]/', '', $TheString);
}


if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
 $ClientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
 $ClientIP = $_SERVER['REMOTE_ADDR'];
}

 
$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$oName = $_REQUEST['oname'] ;
$FirstName = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$Phone = $_REQUEST['phone'] ;
$technology = $_REQUEST['technology'] ;
$Comments = $_REQUEST['address'] ;


 

$todayis = date("l, F j, Y, g:i a") ;

$FirstName = $FirstName ;
$subject = "Quick Enquiry - $technology ";
$FirstName;

$Message = " $todayis [EST] \n

FirstName   : $FirstName \n
OName   	: $oName \n
Email       : $email \n
Mobile      : $Phone \n
Technology  : $technology \n
Comments    : $Comments\n

";
$from = "From:$FirstName\r\n";

mail("vasuki@360ripples.com,shanmu@360ripples.com", $subject, $Message, $from );
?>

<script type="text/javascript">
function Redirect()
{
    window.location="http://360ripples.com/contact.php";
}
//document.write("Loding...");

setTimeout('Redirect()',2000);
</script>	
  
  
        <!-- Footer -->
        <?php include("footer.php");?>


	<script src="js/vendor/jquery-2.2.3.min.js"></script>
    <script src="js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/revolutionslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/revolutionslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/revolutionslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/wow.min.js"></script>



        
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/vendor/fastclick.js"></script>

        <script src="js/bootstrap.min.js"></script>

        <script src="js/vendor/jquery.appear.js"></script>                  <!-- jQuery Appear -->
        <script src="js/vendor/jquery.easing.1.3.js"></script>              <!-- jQuery Easing -->
        <script src="js/vendor/imagesloaded.pkgd.min.js"></script>          <!-- Imagesloaded -->
        <script src="js/vendor/isotope.pkgd.min.js"></script>               <!-- Isotope -->
        <script src="js/vendor/slick.min.js"></script>                      <!-- Slick carousel -->
        <script src="js/vendor/jquery.tweet.min.js"></script>               <!-- Tweet.js-Mod -->
        <script src="js/vendor/jquery.countTo.js"></script>                 <!-- Count To -->
        <script src="js/vendor/jquery.easypiechart.min.js"></script>        <!-- easyPieChart -->
        <script src="js/vendor/jquery.magnific-popup.min.js"></script>      <!-- Magnific Popup -->

        <script src="js/main.js"></script>

        <script src="js/vendor/jquery.validate.min.js"></script>            <!-- jQuery Validate -->
        <script src="js/contact.js"></script>

        <script src="http://maps.google.com/maps/api/js?sensor=false"></script><!-- GMap -->
        <script src="js/vendor/gmap3.min.js"></script>
        <script src="js/mymap.js"></script>


    </body>
</html>