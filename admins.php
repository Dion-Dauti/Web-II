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
    <style>
      /* CSS styles for the table */
      .table-scroll {
        max-height: 400px; /* Adjust the maximum height as needed */
         overflow-y: scroll;
         overflow-x: hidden;
      }
      

      .whatdoInamethis {
         display: flex;
      }

      .col-md-2 {
         position: sticky;
         top: 0;
         height: 100vh;
         overflow-y: auto;
      }

      .col-md-10 {
         height: calc(100vh - 170px); /* Adjust the value if needed */
         overflow-y: auto;
      }
   </style>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <script src="js/modernizer.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezsaFV3cOeW+AYBIHmeUVeL8hT/Hf+m8ohF6QAeY3wv4IhXHto3Zy+x02yoW6oSn" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/72b475b245.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <!-- [if lt IE 9] -->
   <script>
          function removeAdmin(adminId) {
            // Send an AJAX request to delete the admin
             $.ajax({
              url: 'remove_admin.php',
                method: 'POST',
              data: { adminId: adminId },
                success: function(response) {
               // Reload the page after successful deletion
                 location.reload();
                },
             error: function(xhr, status, error) {
                 console.log(error);
         }
             });
          }
           </script>
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
         <div class="list-group bg-info" style="height: 100vh;">
<a href="adminDashboard.php" class="list-group-item list-group-item-action bg-info text-center text-white">Dashboard</a>
<a href="admins.php" class="list-group-item list-group-item-action bg-info text-center text-white">Administrators</a>
<a href="admin-doctors.php" class="list-group-item list-group-item-action bg-info text-center text-white">Doctors</a>
<a href="patients.php" class="list-group-item list-group-item-action bg-info text-center text-white">Patient</a>
</div>
            <?php
            
            include('connection.php');
            ?>
         </div>
         <div class="col-md-10">
            <h2>All Admins</h2><div class="table-scroll" style="max-height: 400px; overflow: auto;"> <table class="table">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
             
                  <?php
                  // Merri Adminat 
                  $query = mysqli_query($conn, "SELECT * FROM users WHERE role='admin'");
                  while ($row = mysqli_fetch_assoc($query)) {
                     $adminId = $row['id'];
                     $adminName = $row['Name'];
                     ?>
                     <tr>
                        <td><?php echo $adminId; ?></td>
                        <td><?php echo $adminName; ?></td>
                        <td><button class="btn btn-danger" onclick="removeAdmin(<?php echo $adminId; ?>)"><i class="fas fa-times"></i></button></td>
                     </tr>
                     <?php
                  }
                  ?>
               </tbody>
            </table></div>
            
            
            <h2>Add New Admin</h2>
            <form action="add_admin.php" method="post">
               <div class="form-group">
                  <label for="adminName">Name</label>
                  <input type="text" class="form-control" id="adminName" name="adminName" required>
               </div>
               <div class="form-group">
                  <label for="adminEmail">Email</label>
                  <input type="email" class="form-control" id="adminEmail" name="adminEmail" required>
               </div>
               <div class="form-group">
                  <label for="adminPassword">Password</label>
                  <input type="password" class="form-control" id="adminPassword" name="adminPassword" required>
               </div>
               <button type="submit" class="btn btn-primary">Add Admin</button>
            </form>
         </div>
      </div>
   </div>
</div>
               