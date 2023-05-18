<?php
session_start();
include('connection.php');

if (isset($_SESSION["user_id"])) {
    $userID = $_SESSION["user_id"];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the new values from the form
        $newName = $_POST['newName'];
        $newEmail = $_POST['newEmail'];
        $newPassword = $_POST['newPassword'];

        // Validate and sanitize the inputs (you should add appropriate validation and sanitization)

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Prepare and execute the SQL query to update user information
        $sql = "UPDATE users SET name = ?, email = ?, password_hash = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssi', $newName, $newEmail, $hashedPassword, $userID);
        $stmt->execute();

        // Redirect the user back to the profile page or any other appropriate page
        header('Location: servicess.php');
        exit();
    }
}
?>


