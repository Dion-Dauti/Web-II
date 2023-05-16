<?php
include('connection.php');


$adminId = $_POST['adminId'] ;

$query = "DELETE FROM users WHERE id = $adminId ";

if (mysqli_query($conn, $query)) {
   
} else {
 
   echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
