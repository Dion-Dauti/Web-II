<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Shiko a jon set edhe merri
    if (isset($_POST['name2'])) {
        $name = $_POST['name2'];
    } else {
        echo "Name is required.";
        exit();
    }

    if (isset($_POST['email2'])) {
        $email = $_POST['email2'];
    } else {
        echo "Email is required.";
        exit();
    }

    // $day = $_POST['day'];
    // $time = $_POST['time'];

    if (isset($_POST['doctorName2'])) {
        $doctorName = $_POST['doctorName2'];
    } else {
        echo "Doctor name is required.";
        exit();
    }

    if (isset($_POST['message2'])) {
        $message = $_POST['message2'];
    } else {
        echo "Message is required.";
        exit();
    }

    
    $userQuery = "SELECT id FROM users WHERE Name = '$name' AND Email = '$email'";
    $userResult = mysqli_query($conn, $userQuery);

    if ($userResult && mysqli_num_rows($userResult) > 0) {
        
        $userRow = mysqli_fetch_assoc($userResult);
        $userId = $userRow['id'];

    
        $doctorQuery = "SELECT id, specilization FROM doctors WHERE doctorName = '$doctorName'";
        $doctorResult = mysqli_query($conn, $doctorQuery);

        if ($doctorResult && mysqli_num_rows($doctorResult) > 0) {
      
            $doctorRow = mysqli_fetch_assoc($doctorResult);
            $doctorId = $doctorRow['id'];
            $doctorSpecialization = $doctorRow['specilization'];

            
            $insertQuery = "INSERT INTO appointment ( userId, doctorId, Message) VALUES ('$userId', '$doctorId', '$message')";

            if (mysqli_query($conn, $insertQuery)) {
                // Success message
                header("Location: service.php");
            } else {
                // Error message
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            // Doctor does not exist
            echo "Invalid doctor name.";
        }

       
        mysqli_free_result($doctorResult);
    } else {
        
        echo "Invalid name or email.";
    }

    
    mysqli_free_result($userResult);
}

mysqli_close($conn);
?>
