<?php session_start();
include'connection.php'?>
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Life Care - Responsive HTML5 Multi Page Template</title>
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

   <style>

/* ikona per shfaqjen e emrit */
.userinfo{
   margin-left:500px;
   margin-top: 5px;
   
}
   </style>
   </head>
    
        <body class="clinic_version">
            <!-- LOADER -->
            <!-- <div id="preloader">
               <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
            </div> -->
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

  


            


  
  <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
     <div class="container"  style="margin-top:80px">
        <div class="row">
           <div class="col-md-12">
              <div class="tab-content">
                 <div class="tab-pane active fade in" id="tab1">
                    <div class="row text-center">
                       <div class="col-md-4">
                          <div class="pricing-table">
                             <div class="pricing-table-header">
                                <h2>Shared Hosting</h2>
                                <h3>$85/month</h3>
                             </div>
                             <div class="pricing-table-features">
                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                             </div>
                             <div class="pricing-table-sign-up">
                                <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="pricing-table pricing-table-highlighted">
                             <div class="pricing-table-header grd1">
                                <h2>WordPress Hosting</h2>
                                <h3>$59/year</h3>
                             </div>
                             <div class="pricing-table-space"></div>
                             <div class="pricing-table-text">
                                <p>This is a perfect choice for small businesses and startups.</p>
                             </div>
                             <div class="pricing-table-features">
                                <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                             </div>
                             <div class="pricing-table-sign-up">
                                <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-4">
                          <div class="pricing-table">
                             <div class="pricing-table-header">
                                <h2>Reseller Hosting</h2>
                                <h3>$85/one-time</h3>
                             </div>
                             <div class="pricing-table-features">
                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                             </div>
                             <div class="pricing-table-sign-up">
                                <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- end row -->
                 </div>
                 <!-- end pane -->
                 <div class="tab-pane fade" id="tab2">
                    <div class="row text-center">
                       <div class="col-md-6">
                          <div class="pricing-table">
                             <div class="pricing-table-header">
                                <h2>Dedicated Server</h2>
                                <h3>$85/month</h3>
                             </div>
                             <div class="pricing-table-space"></div>
                             <div class="pricing-table-features">
                                <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                             </div>
                             <div class="pricing-table-sign-up">
                                <a href="#contact" data-scroll="" class="btn btn-dark btn-radius btn-brd">Order Now</a>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-6">
                          <div class="pricing-table pricing-table-highlighted">
                             <div class="pricing-table-header grd1">
                                <h2>VPS Server</h2>
                                <h3>$59/month</h3>
                             </div>
                             <div class="pricing-table-space"></div>
                             <div class="pricing-table-text">
                                <p>This is a perfect choice for small businesses and startups.</p>
                             </div>
                             <div class="pricing-table-features">
                                <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                             </div>
                             <div class="pricing-table-sign-up">
                                <a href="#contact" data-scroll="" class="btn btn-light btn-radius btn-brd grd1 effect-1">Order Now</a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!-- end row -->
                 </div>
                 <!-- end pane -->
              </div>
              <!-- end content -->
           </div>
           <!-- end col -->
        </div>
     </div>
  </div>
  
  <!-- end doctor section -->








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
                   <li><a href="support.google.com/answer/2451065?hl=en"><i class="fa fa-google-plus"></i></a></li>
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
