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
   <style>
     
   </style>
    
        <body class="clinic_version">
            <!-- LOADER -->
            
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

  


            


  
 


            <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
                <div class="container">
                   <div class="heading">
                      <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
                      <h2>Get in Touch</h2>
                   </div>
                </div>
                <div class="contact-section">
                   <div class="form-contant">
                      <form id="ajax-contact" action="mailer.php" method="post">
                         <div class="row">
                            <div class="col-md-6">
                               <div class="form-group in_name">
                                  <input type="text" name="names" class="form-control" placeholder="Name" required="required">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group in_email">
                                  <input type="email"name="emails" class="form-control" placeholder="E-mail" required="required">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group in_email">
                                  <input type="tel" name="tel" class="form-control" id="phone" placeholder="Phone" required="required">
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="form-group in_email">
                                  <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required">
                               </div>
                            </div>
                            <div class="col-md-12">
                               <div class="form-group in_message"> 
                                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required="required"></textarea>
                               </div>
                               <div class="actions">
                                  <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                               </div>
                            </div>
                         </div>
                      </form>
                   </div>
                   <div id="googleMap" style="width:100%;height:450px;"></div>
                </div>
             </div>
       









  <footer id="footer" class="footer-area wow fadeIn">
    <div class="container">
       <div class="row">
          <div class="col-md-4">
             <div class="logo padding">
                <a href=""><img src="images/logo.png" alt=""></a>
                <p>Time and health are two precious assets that we don’t recognize and appreciate until they have been depleted.</p>
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
                   <li><a href="https://life-care-ro.webnode.page/rss/"><i class="fa fa-rss"></i></a></li>
                   <li><a href="https://www.facebook.com/profile.php?id=100063743524584"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="https://twitter.com/lifecarenews?lang=en"><i class="fa fa-twitter"></i></a></li>
                   <li><a href="support.google.com/answer/2451065?hl=en"><i class="fa fa-google-plus"></i></a></li>
                   <li><a href="https://www.youtube.com/watch?v=vSHkMAMRRV4"><i class="fa fa-youtube"></i></a></li>
                   <li><a href="https://www.pinterest.com/pin/525373112764498074/"><i class="fa fa-pinterest"></i></a></li>
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
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap">
      
     </script>
   
    </body>
</html>
