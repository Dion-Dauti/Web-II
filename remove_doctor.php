<?php
include('connection.php');

$doctorId = $_POST['doctorId']; 


$query = "DELETE FROM doctors WHERE id = $doctorId";

if (mysqli_query($conn, $query)) {
   
} else {
   
   echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>