<?php

include('connection.php'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $adminName = mysqli_real_escape_string($conn, $_POST['adminName']);
    $adminEmail = mysqli_real_escape_string($conn, $_POST['adminEmail']);
   

    $emailExistsQuery = "SELECT * FROM users WHERE Email = '$adminEmail'";
    $emailExistsResult = mysqli_query($conn, $emailExistsQuery);
    if (mysqli_num_rows($emailExistsResult) > 0) {
        
        echo "Email is already taken. Please choose a different email.";
    } else {
        // Hashimi
        $hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);
        
        // Insert the admin 
        $insertQuery = "INSERT INTO users (Name, Email,Password_hash, role) VALUES ('$adminName', '$adminEmail', '$hashedPassword', 'admin')";
        if (mysqli_query($conn, $insertQuery)) {
            
            header("Location: admins.php");
            exit();
        } else {
            
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
