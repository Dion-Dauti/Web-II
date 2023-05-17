

<style>
.userinfo{
   color:white;

}


</style>
<?php

// Start the session


// Check if the user ID is set in the session

// Start the session


// Check if the user ID is set in the session
if (isset($_SESSION["user_id"])) {
    // Retrieve the user ID from the session
    $userID = $_SESSION["user_id"];

    require __DIR__."/s_db.php";

    // Fetch user information from the database based on the user ID
    $mysqli= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if ($mysqli->connect_errno) {
        die("Failed to connect to MySQL: " . $mysqli->connect_error);
    }

    $query = "SELECT name, role FROM users WHERE id = $userID";
    $result = $mysqli->query($query);
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Display user information
        echo '<p class="userinfo">';
        echo '<i class="fa fa-circle-user fa-2x" style="color:white;"></i>';
        echo  " ". $user["name"]. "<br>";
        echo "Role: " . $user["role"] . "<br>";
       
        echo '</p';
      
    } else {
        echo "User not found";
    }

    $result->free();
    $mysqli->close();
} else {
    echo "User not logged in";
}


?>
