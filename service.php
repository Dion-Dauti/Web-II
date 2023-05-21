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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezsaFV3cOeW+AYBIHmeUVeL8hT/Hf+m8ohF6QAeY3wv4IhXHto3Zy+x02yoW6oSn" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/72b475b245.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <!-- [if lt IE 9] -->
   </head>
    
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


           <li class="dropdownn">
               <a href="service.php" class="dropdown-toggle" data-toggle="dropdown">Services</a>
               <div class="dropdownn-menu">
                  <ul>
                     <li><a href="#">Service 1</a></li>
                     <li><a href="#">Service 2</a></li>
                     <li><a href="#">Service 3</a></li>
                  </ul>
               </div>
        
          </li>>


  


            


  
            <div id="service" class="services wow fadeIn">
                <div class="container"  style="margin-top:80px">
                   <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                         <div class="inner-services">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <div class="serv">
                                  <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                                  <h4>PREMIUM FACILITIES</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <div class="serv">
                                  <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                                  <h4>LARGE LABORATORY</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <div class="serv">
                                  <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                                  <h4>DETAILED SPECIALIST</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <div class="serv">
                                  <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                                  <h4>CHILDREN CARE CENTER</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <div class="serv">
                                  <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                                  <h4>FINE INFRASTRUCTURE</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                               <div class="serv">
                                  <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                                  <h4>ANYTIME BLOOD BANK</h4>
                                  <p>Lorem Ipsum is simply dummy text of the printing.</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                         <div class="appointment-form">
                            <h3><span>+</span> Book Appointment</h3>
                            <div class="form">
                            <form action="submit_appoitment.php" method="post">
  <fieldset>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="form-group">
          <input type="text" name="name2" id="name" placeholder="Your Name" required />
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="form-group">
          <input type="email" name="email2" placeholder="Email Address" id="email" required />
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
      <div class="row">
        <div class="form-group">
          <select class="form-control" name="day" required>
            <option value="">Select Day</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control" name="time" required>
            <option value="">Select Time</option>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="form-group">
          <select class="form-control" id="doctorName" name="doctorName2" required>
            <option value="">Select Doctor</option>
            <?php
            // Assuming you have a database connection established
            include('connection.php');
            // Fetch doctors' names from the database
            $query = "SELECT doctorName FROM doctors";
            $result = mysqli_query($conn, $query);

            // Generate HTML code with the doctors' names
            while ($row = mysqli_fetch_assoc($result)) {
              $doctorName = $row['doctorName'];
              echo "<option value=\"$doctorName\">$doctorName</option>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
          </select>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="form-group">
          <textarea rows="4" name="message2" id="message" class="form-control" placeholder="Your Message..." required></textarea>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="row">
        <div class="form-group">
          <div class="center"><button type="submit">Submit</button></div>
        </div>
      </div>
    </div>
  </fieldset>
</form>

                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- end section -->












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