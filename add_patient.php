<?php
// Include the necessary files
include('connection.php'); // Assuming this file contains the database connection code

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    
    $patientName = mysqli_real_escape_string($conn, $_POST['patientName']);
    $patientEmail = mysqli_real_escape_string($conn, $_POST['patientEmail']);
    $patientPassword = $_POST['patientPassword'];

    // Check if the email already exists in the database
    $emailExistsQuery = "SELECT * FROM users WHERE Email = '$patientEmail'";
    $emailExistsResult = mysqli_query($conn, $emailExistsQuery);
    if (mysqli_num_rows($emailExistsResult) > 0) {
        // Email already taken, display an error message or perform appropriate action
        echo "Email is already taken. Please choose a different email.";
    } else {
        // Hash the password
        $hashedPassword = password_hash($patientPassword, PASSWORD_DEFAULT);
        
        // Insert the admin into the database
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