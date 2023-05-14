<?php
include('connection.php');

// Get the admin ID from the AJAX request
$adminId = $_POST['adminId'];

// Remove the admin from the database
$query = "DELETE FROM users WHERE id = $adminId";

if (mysqli_query($conn, $query)) {
   
} else {
   // Return an error response
   echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
