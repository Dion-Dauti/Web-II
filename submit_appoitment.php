<!-- submit_appointment.php -->

<?php
// Assuming you have a database connection established
include('connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $doctorName = $_POST['doctorName'];
    $message = $_POST['message'];

    // Perform any necessary data validation here

    // Fetch the user ID based on the name and email
    $userQuery = "SELECT id FROM users WHERE Name = '$name' AND Email = '$email'";
    $userResult = mysqli_query($conn, $userQuery);

    if ($userResult && mysqli_num_rows($userResult) > 0) {
        // User exists, retrieve the ID
        $userRow = mysqli_fetch_assoc($userResult);
        $userId = $userRow['id'];

        // Fetch the doctor ID and specialization based on the doctor name
        $doctorQuery = "SELECT id, specilization FROM doctors WHERE doctorName = '$doctorName'";
        $doctorResult = mysqli_query($conn, $doctorQuery);

        if ($doctorResult && mysqli_num_rows($doctorResult) > 0) {
            // Doctor exists, retrieve the ID and specialization
            $doctorRow = mysqli_fetch_assoc($doctorResult);
            $doctorId = $doctorRow['id'];
            $doctorSpecialization = $doctorRow['doctorSpecialization'];

            // Insert the form data into the database along with the user ID, doctor ID, and doctor specialization
            $insertQuery = "INSERT INTO appointment (doctorSpecialization , userId , doctorId,  Message) VALUES ( '$doctorSpecialization','$userId', '$doctorId',  '$message')";

            if (mysqli_query($conn, $insertQuery)) {
                // Success message
                echo "Appointment submitted successfully!";
            } else {
                // Error message
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            // Doctor does not exist
            echo "Invalid doctor name.";
        }

        // Free the doctor result set
        mysqli_free_result($doctorResult);
    } else {
        // User does not exist or invalid credentials
        echo "Invalid name or email.";
    }

    // Free the user result set
    mysqli_free_result($userResult);
}

// Close the database connection
mysqli_close($conn);
?>