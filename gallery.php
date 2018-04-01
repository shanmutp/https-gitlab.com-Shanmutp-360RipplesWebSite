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
    <title>Gallery :: 360 Ripples Solution Pvt Ltd - Ripples of Excellence</title>
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
       <!-- <script src="https://code.jquery.com/jquery-1.12.2.min.js" integrity="sha256-lZFHibXzMHo3GGeehn1hudTAP3Sc0uKXBXAzHX1sjtk=" crossorigin="anonymous"></script> 

<!--Bootstrap JS-->
<!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</script>-->

		<script src="js/vendor/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"  ></script>
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
       
	   <section class="gallery-bg">
    <div class="container">     
   
      <div class="row">
	  
	 <div class="col-md-3" style="margin-left:-90px;"><div style="background:#efefef; margin-top:35px;"><?php include("scroll-top.php")?></div></div>
        <div class="col-md-8 bg-cnt">
		           <p style="height:20px;"></p>
   
            <b>
             <span class="small" style="font-size:20px;">
			  Career Enablement Program at Dhanalakshmi College of Engineering</span> </b>
				<footer style="font-size:12px; ">January 5th & 6th, 2017</footer>
            </br>
			 <p style="font-size:17px;">
			 
			 As a Skill Development Partner of Dhanalakshmi College of Engineering (DCE), numerous sessions of Career Enablement Program was conducted to around 600 students, to make them understand the IT industry expectations, how they can equip themselves to exceed those expectations and become a strong contender to get placed in top organizations of the industry.
			 </p>
			 <p style="height:20px;">
			 
			 </p>
           
		    	<div class="row">

    <div class="col-lg-12">
      <!--  <h1 class="page-header">Thumbnail Gallery</h1>-->
    
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Dhanalakshmi College of Engineering"  data-image="img/gallery/DCE-1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/DCE-1.jpg" alt="Short alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Dhanalakshmi College of Engineering"  data-image="img/gallery/DCE-2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/DCE-2.jpg" alt="A alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Dhanalakshmi College of Engineering"  data-image="img/gallery/DCE-3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/DCE-3.jpg" alt="Another alt text">
            </a>
        </div>
		 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Dhanalakshmi College of Engineering"  data-image="img/gallery/DCE-3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/DCE-5.jpg" alt="Another alt text">
            </a>
        </div>



<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    <!--This text will be overwritten by jQuery-->
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
		</div>
	  
  
		 <!--panel end -->     
		       <!--<p style="height:350px;"></p>     
        </div>
        <div class="col-md-2">
		<!--div style="margin-top:35px; background-color:#0099FF;"><img src="img/1.png" alt="about us"></div-->
		  
		</div>
      <!--</div>
	  

	  </div>
  <!--  </div>-->
  
  <!---------------------------------------------------------------------------------------->
  
    <!--<div class="container">      -->
   
      <!--<div class="row">
	  
	 
        <div class="col-md-8 bg-cnt">-->
		           <p style="height:20px;"></p>
   
            <b>
              <span class="small" style="font-size:20px;">
			  Skill Development Program at Panimalar Engineering College</span> </b>
				<footer style="font-size:12px; ">September 10th to 14th, 2016</footer>
            </br>
			 <p style="font-size:17px;">
			 
			 Detailed IT Industry oriented Skill development workshops and Career enablement program was conducted to around 300+ students, enabling them to understand real time application of software engineering principles, OOAD and data engineering skills.
			 </p>
			 <p style="height:20px;">
			 
			 </p>
           
		    	<div class="row">

    <div class="col-lg-12">
      <!--  <h1 class="page-header">Thumbnail Gallery</h1>-->
    
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Panimalar Engineering College"  data-image="img/gallery/PEC-1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/PEC-1.jpg" alt="Short alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Panimalar Engineering College"  data-image="img/gallery/PEC-2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/PEC-2.jpg" alt="A alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Panimalar Engineering College"  data-image="img/gallery/PEC-3.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/PEC-3.jpg" alt="Another alt text">
            </a>
        </div>
		<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Panimalar Engineering College"  data-image="img/gallery/PEC-4.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/PEC-4.jpg" alt="Another alt text">
            </a>
        </div>



<!--<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <!--<div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>-->

              <!--  <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>-->
	</div>	
	  
  
		 <!--panel end -->     
		      <!-- <p style="height:350px;"></p>   -->  
        </div>
		<!--</div>
	<!--	</div>
        <!--<div class="col-md-2">
		<!--div style="margin-top:35px; background-color:#0099FF;"><img src="img/1.png" alt="about us"></div-->
		  
		<!--</div>-->
      <!--</div>
	  <!---------------------------------------------------------------------------->

	  <!--</div>
  <!--  </div>-->
  
  <!----------------------------------------------------------------------------------->
  
    <!--<div class="container">      -->
   
      <!--<div class="row">
	  
        <div class="col-md-8 bg-cnt">-->
		           <p style="height:20px;"></p>
   
            <b>
              <span class="small" style="font-size:20px;">
			  Placement Readiness Program at 360 Ripples</span> </b>
				<!--<footer style="font-size:12px; color:#dc2440;">January 5th & 6th, 2017</footer>-->
            </br></br>
			 <p style="font-size:17px;">
			 
			Hands-on, multi-week training and workshop, conducted at 360 Ripples premises, fully focused towards placing the fresher's across Tier-1, 2 and 3 IT companies. The candidates were trained on most popular technologies and selective latest technologies.
			 </p>
			 <p style="height:20px;">
			 
			 </p>
           
		    	<div class="row">

    <div class="col-lg-12">
      <!--  <h1 class="page-header">Thumbnail Gallery</h1>-->
    
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="360 Ripples"  data-image="img/gallery/Ripples-1.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/Ripples-1.jpg" alt="Short alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="360 Ripples"  data-image="img/gallery/Ripples-2.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/Ripples-2.jpg" alt="A alt text">
            </a>
        </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="360 Ripples"  data-image="img/gallery/Ripples-5.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/Ripples-5.jpg" alt="Another alt text">
            </a>
        </div>
		 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="360 Ripples"  data-image="img/gallery/Ripples-4.jpg" data-target="#image-gallery">
                <img class="img-responsive" src="img/gallery/Ripples-4.jpg" alt="Another alt text">
            </a>
        </div>



<!--<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <!--<div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>-->

              <!--  <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
	</div>-->
</div>
		
	  
  
		 <!--panel end -->     
		       <p style="height:200px;"></p>     
        </div>
        <div class="col-md-2">
		<!--div style="margin-top:35px; background-color:#0099FF;"><img src="img/1.png" alt="about us"></div-->
		  
		</div>
      </div>
	  

	  </div>
  </div>
  </section>
  <script>
$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
           // $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
</script>
  
        <!-- Footer -->
        <?php include("footer.php");?>
 
    </body>
</html>