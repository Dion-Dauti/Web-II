

<style>
.userinfo{
   color:white;
   margin-left:500px;
   margin-top: 5px;
   

}


</style>
<?php




if (isset($_SESSION["user_id"])) {
   
    $userID = $_SESSION["user_id"];

    require __DIR__."/s_db.php";

    
    $mysqli= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,3307);
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
