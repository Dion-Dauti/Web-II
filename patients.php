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
   <title>Admin | Dashboard</title>
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
   
   <style>
   .table-scroll {
      overflow: auto;
      max-height: 400px; /* Adjust the maximum height as needed */
   }

   .whatdoInamethis {
      display: flex;
      height: calc(100vh - 70px); /* Adjust the value if needed */
      overflow: hidden;
   }

   .col-md-2 {
      position: sticky;
      top: 0;
      height: 100%;
      overflow-y: scroll;
   }

   .col-md-10 {
      height: 100%;
      overflow-y: scroll;
   }
</style>

   </style>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezsaFV3cOeW+AYBIHmeUVeL8hT/Hf+m8ohF6QAeY3wv4IhXHto3Zy+x02yoW6oSn" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/72b475b245.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- <script>
      function removePatient(patientId) {
         // Send an AJAX request to delete the patient
         $.ajax({
            url: 'remove_patient.php',
            method: 'POST',
            data: { patientId: patientId },
            success: function(response) {
               // Reload the page after successful deletion
               location.reload();
            },
            error: function(xhr, status, error) {
               console.log(error);
            }
         });
      }
   </script> -->
</head>
<body class="clinic_version">
   <header>
      <div class="header-top wow fadeIn">
         <div class="container">
            <a class="navbar-brand" href="adminDashboard.php"><img src="images/logo.png" alt="image"></a>
            <div class="right-header">
               <div class="header-info">
                  <div class="info-inner">
                     <span class="icontop"><<img src="images/phone-icon.png" alt="#"></span>
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
      <div class="header-bottom wow fadeIn">
         <div class="container">
            <nav class="main-menu">
               <div style="background-color: #157fda;">
                  <ul style="list-style-type: none; margin: 0; padding: 0; display: flex; justify-content: center;">
                     <li><a class="active" href="index.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">Home</a></li>
                     <li><a data-scroll href="#about" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">About us</a></li>
                     <li><a data-scroll href="#service" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">Patients</a></li>
                     <li><a href="doctors.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">Doctors</a></li>
                     <li><a data-scroll href="#getintouch" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">Contact</a></li>
                  </ul>
               </div>
            </nav>
            <div class="serch-bar">
               <div id="custom-search-input">
                  <div class="input-group col-md-12">
                     <input type="text" class="form-control input-lg" placeholder="Search" />
                     <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                           <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid whatdoInamethis">
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-2" style="margin-left: -35px;">
               <div class="list-group bg-info" style="height: 100vh;">
                        <a href="adminDashboard.php" class="list-group-item list-group-item-action  
                        bg-info text-center text-white">Dashboard </a>
                        <a href="admins.php" class="list-group-item list-group-item-action  
                        bg-info text-center text-white">Administrators </a>
                        <a href="" class="list-group-item list-group-item-action  
                        bg-info text-center text-white">Doctors </a>
                        <a href="" class="list-group-item list-group-item-action  
                        bg-info text-center text-white">Patient </a>

                    </div>
                  <?php
                  
                  include('connection.php');
                  ?>
               </div>
               <div class="col-md-10">
                  <h2>All Patients</h2><div  class="table-scroll" style="max-height: 400px; overflow: auto;"><table>
                     <thead>
                        <tr>
                           <th>ID</th>
                           <<th>Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        // Fetch all patients from the database
                        $query = mysqli_query($conn, "SELECT * FROM users WHERE role='user'");
                        while ($row = mysqli_fetch_assoc($query)) {
                           $patientId = $row['id'];
                           $patientName = $row['Name'];
                           $patientLastName = $row['Last_name'];
                           $patientEmail = $row['Email'];
                           ?>
                           <tr>
                              <td><?php echo $patientId; ?></td>
                              <td><?php echo $patientName; ?></td>
                              <td><?php echo $patientLastName; ?></td>
                              <td><?php echo $patientEmail; ?></td>
                              <td><button class="btn btn-danger" onclick="removePatient(<?php echo $patientId; ?>)"><i class="fas fa-times"></i></button></td>
                           </tr>
                           <?php
                        }
                        ?>
                     </tbody>
                  </table></div>
                  
                  
                  <h2>Add New Patient</h2>
                  <form action="add_patient.php" method="post">
                     <div class="form-group">
                        <label for="patientName">Name</label>
                        <input type="text" class="form-control" id="patientName" name="patientName" required>
                     </div>
                     <div class="form-group">
                        <label for="patientLastName">Last Name</label>
                        <input type="text" class="form-control" id="patientLastName" name="patientLastName" required>
                     </div>
                     <div class="form-group">
                        <label for="patientEmail">Email</label>
                        <input type="email" class="form-control" id="patientEmail" name="patientEmail" required>
                     </div>
                     <div class="form-group">
                        <label for="patientPassword">Password</label>
                        <input type="password" class="form-control" id="patientPassword" name="patientPassword" required>
                     </div>
                     <button type="submit" class="btn btn-primary">Add Patient</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-A8mRHcFmY9T2VEqKIG2emYq7bVl3Yx8amJ1bJUmaSLW2zVqw1KHznXwQtjimG5XZ" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      
      <!-- Custom Scripts -->
      <script>
         function removePatient(patientId) {
            // Send an AJAX request to delete the patient
            $.ajax({
               url: 'remove_patient.php',
               method: 'POST',
               data: { patientId: patientId },
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
   </body>
</html>
