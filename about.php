<?php session_start();
include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Price</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   <script src="https://kit.fontawesome.com/72b475b245.js" crossorigin="anonymous"></script>
   </head>
    
        <body class="clinic_version">
            <!-- LOADER elma-->
            
            <!-- END LOADER -->
            <header>
               <div class="header-top wow fadeIn">
                  <div class="container">
                     <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="image"></a>
                     <div class="right-header">
                        <div class="header-info">
                           <div class="info-inner">
                              <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                              <span class="iconcont"><a href="tel:800 123 456">800 123 456</a></span>	
                           </div>
                           <div class="info-inner">
                              <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                              <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifecare.com</a></span>	
                           </div>
                           <div class="info-inner">
                              <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                              <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php
        if (!isset($_SESSION['user_id'])) {
         // User is not logged in, include base navigation bar
         include('base-navbar.php');
     } else {
         // Fetch the user's role from the session
         $role = $_SESSION['user_role'];
     
         // Include the appropriate navigation bar based on the user's role
         if ($role === 'user') {
             include('user-navbar.php');
         } elseif ($role === 'admin') {
             include('admin-navbar.php');
         } else {
             // User has no role defined, include base navigation bar
             include('base-navbar.php');
         }
     }
     
     $conn->close();
     ?>
            </header>

  


            


  
 

            <div id="about" class="section wow fadeIn">
               <div class="container">
                  <div class="heading">
                     <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
                     <h2>The Specialist Clinic</h2>
                  </div>
                  <!-- end title -->
                  <div class="row">
                     <div class="col-md-6">
                        <div class="message-box">
                           <h4>What We Do</h4>
                           <h2>Clinic Service</h2>
                           <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                           <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.  </p>
                           <a href="service.php
                           " data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Learn More</a>
                        </div>
                        <!-- end messagebox -->
                     </div>
                     <!-- end col -->
                     <div class="col-md-6">
                        <div class="post-media wow fadeIn">
                           <img src="images/about_03.jpg" alt="" class="img-responsive">
                           <a href="https://youtu.be/OJuQuANr0F8" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                        </div>
                        <!-- end media -->
                     </div>
                     <!-- end col -->
                  </div>
                  <!-- end row -->
                  <hr class="hr1">
                  <div class="row">
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-widget">
                           <div class="post-media wow fadeIn">
                              <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                              <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                           </div>
                           <h3>Digital Control Center</h3>
                        </div>
                        <!-- end service -->
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-widget">
                           <div class="post-media wow fadeIn">
                              <a href="images/clinic_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                              <img src="images/clinic_02.jpg" alt="" class="img-responsive">
                           </div>
                           <h3>Hygienic Operating Room</h3>
                        </div>
                        <!-- end service -->
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-widget">
                           <div class="post-media wow fadeIn">
                              <a href="images/clinic_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                              <img src="images/clinic_03.jpg" alt="" class="img-responsive">
                           </div>
                           <h3>Specialist Physicians</h3>
                        </div>
                        <!-- end service -->
                     </div>
                     <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="service-widget">
                           <div class="post-media wow fadeIn">
                              <a href="images/clinic_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                              <img src="images/clinic_01.jpg" alt="" class="img-responsive">
                           </div>
                           <h3>Digital Control Center</h3>
                        </div>
                        <!-- end service -->
                     </div>
                  </div>
                  <!-- end row -->
               </div>
               <!-- end container -->
            </div>










  <footer id="footer" class="footer-area wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-md-4">
             <div class="logo padding">
                <a href=""><img src="images/logo.png" alt=""></a>
                <p>Locavore pork belly scen ester pine est chill wave microdosing pop uple itarian cliche artisan.</p>
             </div>
          </div>
          <div class="col-md-4">
             <div class="footer-info padding">
                <h3>CONTACT US</h3>
                <p><i class="fa fa-map-marker" aria-hidden="true"></i> PO Box 16122 Collins Street West Victoria 8007 Australia</p>
                <p><i class="fa fa-paper-plane" aria-hidden="true"></i> info@gmail.com</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> (+1) 800 123 456</p>
             </div>
          </div>
          <div class="col-md-4">
             <div class="subcriber-info">
                <h3>SUBSCRIBE</h3>
                <p>Get healthy news, tip and solutions to your problems from our experts.</p>
                <div class="subcriber-box">
                   <form id="mc-form" class="mc-form">
                      <div class="newsletter-form">
                         <input type="email" autocomplete="off" id="mc-email" placeholder="Email address" class="form-control" name="EMAIL">
                         <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button> 
                         <div class="clearfix"></div>
                         <!-- mailchimp-alerts Start -->
                         <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div>
                            <!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div>
                            <!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div>
                            <!-- mailchimp-error end -->
                         </div>
                         <!-- mailchimp-alerts end -->
                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <div class="copyright-area wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-md-8">
             <div class="footer-text">
                <p>© 2023 Lifecare. All Rights Reserved.</p>
             </div>
          </div>
          <div class="col-md-4">
             <div class="social">
                <ul class="social-links">
                   <li><a href=""><i class="fa fa-rss"></i></a></li>
                   <li><a href=""><i class="fa fa-facebook"></i></a></li>
                   <li><a href=""><i class="fa fa-twitter"></i></a></li>
                   <li><a href="https://support.google.com/answer/2451065?hl=en"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="https://www.youtube.com/watch?v=vSHkMAMRRV4"><i class="fa fa-youtube"></i></a></li>
                   <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </div>











      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   $(document).ready(function() {
      $('.dropdownn').hover(
         function() {
            $(this).find('.dropdownn-menu').css('display', 'block');
         },
         function() {
            $(this).find('.dropdownn-menu').css('display', 'none');
         }
      );
   });
</script>
