<?php session_start();
include 'connection.php'; ?>
<!DOCTYPE html>
<html>
   <head>
      <title>User Profile</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script>
         $(document).ready(function() {
            $.ajax({
               url: "get_user_info.php",
               type: "POST",
               dataType: "json",
               success: function(response) {
                  // Update the user information on the page 
                  $("#userInformation").html(`
                     <p><strong>Name:</strong> ${response.Name}</p>
                     <p><strong>Last Name:</strong> ${response.Last_name}</p>
                     <p><strong>Email:</strong> ${response.Email}</p>
                  `);
               },
               error: function(xhr, status, error) {
                  console.log(xhr.responseText);
               }
            });
         });
      </script>
      <style>
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   background: linear-gradient(135deg, #ffcccc 0%, #e6f2ff 100%);
}

.container {
   border: 1px solid #ccc;
   background-color: #fff;
   padding: 20px;
   width: 300px;
   box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
   text-align: center;
   color: #008cba;
   margin-bottom: 20px;
}

h2 {
   color: #555;
   margin-top: 20px;
   margin-bottom: 10px;
}

label {
   display: block;
   margin-bottom: 5px;
   color: #555;
}

input[type="text"],
input[type="email"] {
   width: 100%;
   padding: 8px;
   margin-bottom: 10px;
   border: 1px solid #ccc;
   border-radius: 4px;
}

input[type="submit"] {
   background-color: #008cba;
   color: #fff;
   border: none;
   padding: 10px 20px;
   cursor: pointer;
   border-radius: 4px;
}

input[type="submit"]:hover {
   background-color: #005b7d;
}

form {
   display: flex;
   flex-direction: column;
   align-items: center;
} 

.go-back-button {
   position: fixed;
   top: 20px;
   left: 20px;
   padding: 10px 20px;
   background-color: #008cba;
   color: #fff;
   border: none;
   border-radius: 4px;
   cursor: pointer;
   transition: background-color 0.3s ease; 
}

.go-back-button:hover {
   background-color: #f4f7f9; 
   color: #008cba; 
}


    </style>
   </head>
   <body>
      <div class="container">
         <h1>User Profile</h1>
         
         <h2>User Information</h2>
         <div id="userInformation"></div>
         
         <h2>Modify User Information</h2>
         <form action="changeuser_info.php" method="POST">
            <label for="newName">New Name:</label>
            <input type="text" id="newName" name="newName" required>

            <label for="newEmail">New Email:</label>
            <input type="email" id="newEmail" name="newEmail" required>

            <label for="newPassword=">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>

            <input type="submit" value="Update">
         </form>
         <button class="go-back-button" onclick="location.href='index.php'">Go to Homepage</button>
      </div>
   </body>
</html>


