<?php

include('connection.php'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    $patientName = mysqli_real_escape_string($conn, $_POST['patientName']);
    $patientEmail = mysqli_real_escape_string($conn, $_POST['patientEmail']);
    $patientPassword = $_POST['patientPassword'];

    
    $emailExistsQuery = "SELECT * FROM users WHERE Email = '$patientEmail'";
    $emailExistsResult = mysqli_query($conn, $emailExistsQuery);
    if (mysqli_num_rows($emailExistsResult) > 0) {
        
        echo "Email is already taken. Please choose a different email.";
    } else {
       
        $hashedPassword = password_hash($patientPassword, PASSWORD_DEFAULT);
        
       
        $insertQuery = "INSERT INTO users (Name, Email,Password_hash, role) VALUES ('$patientName', '$patientEmail', '$hashedPassword', 'user')";
        if (mysqli_query($conn, $insertQuery)) {
            
            header("Location: patients.php");
            exit();
        } else {
            
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>