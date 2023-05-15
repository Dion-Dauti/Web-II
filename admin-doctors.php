
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
      function removeDoctor(doctorId) {
         // Send an AJAX request to delete the patient
         $.ajax({
            url: 'remove_doctor.php',
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
</head>
<body class="clinic_version">
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
      <div class="header-bottom wow fadeIn">
         <div class="container">
            <nav class="main-menu">
               <div style="background-color: #157fda;">
                  <ul style="list-style-type: none; margin: 0; padding: 0; display:flex;justify-content: center;">
<li><a class="active" href="index.html" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">Home</a></li>
<li><a data-scroll href="#about" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">About us</a></li>
<li><a data-scroll href="#service" style="display: block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;">Patient</a></li>
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
<a href="adminDashboard.php" class="list-group-item list-group-item-action bg-info text-center text-white">Dashboard</a>
<a href="admins.php" class="list-group-item list-group-item-action bg-info text-center text-white">Administrators</a>
<a href="" class="list-group-item list-group-item-action bg-info text-center text-white">Doctors</a>
<a href="patients.php" class="list-group-item list-group-item-action bg-info text-center text-white">Patient</a>
</div>
<?php
               include('connection.php');
               ?>
</div>
<div class="col-md-10">
<h2>All Doctors</h2>
<div class="table-scroll" style="max-height: 400px; overflow: auto;">
<table class="table ">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Specialzation</th>
<th>Email</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
                        // Fetch all patients from the database
                        $query = mysqli_query($conn, "SELECT * FROM doctors");
                        while ($row = mysqli_fetch_assoc($query)) {
                           $doctorId = $row['id'];
                           $doctorName = $row['doctorName'];
                           $doctorSpecialzation = $row['specilization'];
                           $doctorEmail = $row['docEmail'];
                        ?>
<tr>
<td><?php echo $doctorId; ?></td>
<td><?php echo $doctorName; ?></td>
                                 <td><?php echo $doctorSpecialzation; ?></td>
                                 <td><?php echo $doctorEmail; ?></td>
                                 <td><button class="btn btn-danger" onclick="removeDoctor(<?php echo $doctorId; ?>)"><i class="fas fa-times"></i></button></td>
                              </tr>
                           <?php
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>
                  <h2>Add New Doctor</h2>
                  <form action="add_doctor.php" method="post">
                     <div class="form-group">
                        <label for="doctorName">Name</label>
                        <input type="text" class="form-control" id="doctorName" name="doctorName" required>
                     </div>
                     <div class="form-group">
                        <label for="doctorSpecialzation">Specialzation</label>
                        <input type="text" class="form-control" id="doctorSpecialzation" name="doctorSpecialzation" required>
                     </div>
                     <div class="form-group">
                        <label for="doctorEmail">Email</label>
                        <input type="email" class="form-control" id="doctorEmail" name="doctorEmail"style="margin-bottom: 10px;" required>
                     </div>
                     
                     <button type="submit" class="btn btn-primary">Add Patient</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <style>
      .table-scroll {
         overflow: auto;
         max-height: 400px; /* Adjust the maximum height as needed */
      }
   </style>
                    </body>
</html>
