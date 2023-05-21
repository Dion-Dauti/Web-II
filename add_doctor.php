
<?php

include('connection.php'); 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    
    $doctorName = mysqli_real_escape_string($conn, $_POST['doctorName']);
    $doctorSpecialzation = mysqli_real_escape_string($conn, $_POST['doctorSpecialzation']);
    $doctorEmail = $_POST['doctorEmail'];

    // Kontrollo mos emaili vetem ekziton
    $emailExistsQuery = "SELECT * FROM doctors WHERE docEmail = '$doctorEmail'"; 
    $emailExistsResult = mysqli_query($conn, $emailExistsQuery);
    if (mysqli_num_rows($emailExistsResult) > 0) {
        
        echo "Email is already taken. Please choose a different email.";
    } else {
       
        
        
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