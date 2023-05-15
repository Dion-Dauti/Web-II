
<?php
// Include the necessary files
include('connection.php'); // Assuming this file contains the database connection code

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    
    $doctorName = mysqli_real_escape_string($conn, $_POST['doctorName']);
    $doctorSpecialzation = mysqli_real_escape_string($conn, $_POST['doctorSpecialzation']);
    $doctorEmail = $_POST['doctorEmail'];

    // Check if the email already exists in the database
    $emailExistsQuery = "SELECT * FROM doctors WHERE docEmail = '$doctorEmail'"; 
    $emailExistsResult = mysqli_query($conn, $emailExistsQuery);
    if (mysqli_num_rows($emailExistsResult) > 0) {
        // Email already taken, display an error message or perform appropriate action
        echo "Email is already taken. Please choose a different email.";
    } else {
       
        
        // Insert the doctor into the database
        $insertQuery = "INSERT INTO doctors ( specilization,doctorName, docEmail) VALUES ('$doctorSpecialzation','$doctorName', '$doctorEmail')";
        if (mysqli_query($conn, $insertQuery)) {
            
            header("Location: admin-doctors.php");
            exit();
        } else {
            
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>