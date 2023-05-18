<?php
session_start();
include('connection.php');

if (isset($_SESSION["user_id"])) {
    $userID = $_SESSION["user_id"];

    // Fetch the user information from the database
    $sql = "SELECT Name, Last_name, Email FROM users WHERE id = $userID";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userInformation = array(
            'Name' => $row['Name'],
            'Last_name' => $row['Last_name'],
            'Email' => $row['Email']
        );
        echo json_encode($userInformation);
    } else {
        echo "User not found";
    }

    $conn->close();
} else {
    echo "User ID not set";
}
?>
