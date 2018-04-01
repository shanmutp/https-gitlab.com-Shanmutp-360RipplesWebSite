<footer class="footer" style=" position:fixed; bottom:0;">            <div class="container clearfix">
    <div class="col-lg-12"> <div class="alignleft small" style="color:#FFFFFF;">&copy; 2016, 360 Ripples Solution Pvt Ltd. All Rights Reserved.</div> <div class="alignright small"> 
       
      </div> </div>
  </div>
        </footer>
		 
    
        <script src="js/vendor/jquery-2.2.3.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
       
        
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
        <script>
            // Progressbar
            $('.skill').appear(function() {
                $.each($('.skill'),function(){
                    $(this).css('width', 
                    $(this).attr('aria-valuenow')+'%');
                });
            });
            // Image Carousel
            $('.example-slider').slick({
                slide: 'ul>li',
                autoplay: true
            });
        </script>       