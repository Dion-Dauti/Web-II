<?php
include('connection.php');

// Get the admin ID from the AJAX request
$patientId = $_POST['patientId']; 

// Remove the patient from the database
$query = "DELETE FROM users WHERE id = $patientId";

if (mysqli_query($conn, $query)) {
   
} else {
   // Return an error response
   echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
