<?php session_start();
include 'connection.php';?>

    <!DOCTYPE html>
<html lang="en">
    <head>
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Admin  | Dashboard</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  
   
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
    <!-- Bootstrap CSS -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="js/modernizer.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezsaFV3cOeW+AYBIHmeUVeL8hT/Hf+m8ohF6QAeY3wv4IhXHto3Zy+x02yoW6oSn" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/72b475b245.js" crossorigin="anonymous"></script>
   <!-- [if lt IE 9] -->
    </head>
		
  
    
        <body class="clinic_version">
            <!-- LOADER -->
            <!--  -->
            <!-- END LOADER -->
            <header>
               <div class="header-top wow fadeIn">
                  <div class="container">
                     <a class="navbar-brand" href="adminDashboard.php"><img src="images/logo.png" alt="image"></a>
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



            
            
<div class="container-fluid whatdoInamethis">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2" style="margin-left: -35px;">
                <?php
                include('sidenav.php');
                include('connection.php');
                ?>
            </div>
            <div class="col-md-10">
                <h4 class="my-5">Admin Dashboard</h4>
                <div class="row">
                    <div class="col-md-4 my-2">
                        <div class="bg-success" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <?php 
                                $admins_query = mysqli_query($conn, "SELECT COUNT(*) AS num_admins FROM users WHERE role='admin'");
                                $admins_row = mysqli_fetch_assoc($admins_query);
                                $num_admins = $admins_row['num_admins'];
                                ?>
                                <div class="text-white">
                                    Total Admins
                                    <div class="number-placeholder"><?php echo $num_admins; ?></div>
                                </div>
                                <i class="fas fa-user-cog fa-3x" style="color: white;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="bg-info" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <?php 
                                $doctors_query = mysqli_query($conn, "SELECT COUNT(*) AS num_doctors FROM doctors");
                                $doctors_row = mysqli_fetch_assoc($doctors_query);
                                $num_doctors = $doctors_row['num_doctors'];
                                ?>
                                <div class="text-white">
                                    Total Doctors
                                    <div class="number-placeholder"><?php echo $num_doctors;?></div>
                                </div>
                                <i class="fas fa-user-md fa-3x" style="color: white;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2">
                        <div class="bg-warning" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-between p-3">
                                <?php 
                                $users_query = mysqli_query($conn, "SELECT COUNT(*) AS num_users FROM users WHERE role='user'");
                                $users_row = mysqli_fetch_assoc($users_query);
                                $num_users = $users_row['num_users'];
                                ?>
                                <div class="text-white">
                                    Total Patients
                                    <div class="number-placeholder"><?php echo $num_users;?></div>
                                </div>
                                <i class="fas fa-user-friends fa-3x" style="color: white;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4 my-2">
    <div class="bg-danger" style="height: 150px;">
        <div class="d-flex align-items-center justify-content-between p-3">
            <?php 
            $appointments_query = mysqli_query($conn, "SELECT COUNT(*) AS num_appointments, SUM(consultancyFees) AS total_fees FROM appointment");
            $appointments_row = mysqli_fetch_assoc($appointments_query);
            $num_appointments = $appointments_row['num_appointments'];
            $total_fees = $appointments_row['total_fees'];
            ?>
            <div class="text-white">
                Total Appointments
                <div class="number-placeholder"><?php echo $num_appointments; ?></div>
            </div>
            <i class="fas fa-file-alt fa-3x" style="color: white;"></i>
        </div>
    </div>
</div>
                    <div
                    class="col-md-4 my-2">
      <div class="bg-warning" style="height: 150px;">
          <div class="d-flex align-items-center justify-content-between p-3">
          <div class="text-white">
                    Total Job Requests
      <div class="number-placeholder">0</div>
        </div>
             <i class="fas fa-briefcase fa-3x" style="color: white;"></i>
               </div>
               </div>
               </div>
               <div class="col-md-4 my-2">
    <div class="bg-success" style="height: 150px;">
        <div class="d-flex align-items-center justify-content-between p-3">
            <div class="text-white">
                Total Income
                <div class="number-placeholder">$<?php echo $total_fees; ?></div>
            </div>
            <i class="fas fa-money-bill fa-3x" style="color: white;"></i>
        </div>
    </div>
</div>








		
        
      





			
									

											
	</body>					
			
	
	
</html>