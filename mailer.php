<?php
include 'connection.php';

    
   
    $name = $_POST['names'];
    $email = $_POST['emails'];
    $phone = $_POST['tel'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO faq (username, useremail, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $name, $email, $phone, $subject, $message);
    
    // Execute the statement
    if ($stmt->execute()) {
        // Insertion successful
        header("Location: contact.html");
    } else {
        // Error occurred
        echo "Error: " . $stmt->error;
    }
    
    // Close the statement and database connection
    $stmt->close();
    $conn->close();
    ?>
    






