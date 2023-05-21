<?php
include('connection.php');


$patientId = $_POST['patientId']; 

$query = "DELETE FROM users WHERE id = $patientId";

if (mysqli_query($conn, $query)) {
   
} else {
   
   echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
