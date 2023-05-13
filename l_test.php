<?php 
session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__."/s_db.php";
    $sql = "SELECT * FROM Users 
            WHERE id = {$_SESSION["user_id"]}";

$result = $mysqli->query($sql);
$user = $result->fetch_assoc();
}


?>





<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <meta charset="UTF - 8">
    <body>
    <h1>
        Home
    </h1>

    <?php if(isset($_SESSION["user_id"])):?>
        <?php if($_SESSION["user_role"] == "admin"): ?>
        <!-- Show links for admin -->
        <p>You are logged in as admin</p>
        <p><a href="adminDashboard.php">Admin page</a></p>
    <?php else: ?>
        <!-- Show links for normal user -->
        <p>You are logged in as normal user</p>
        <p><a href="index.html">Profile</a></p>
        <?php endif; ?>
       
        <p><a href="logout.php">Log out </a></p>
    <?php else: ?>
        <p><a href="login.php">Login</a> or <a href="signup_process.php">sign up</a></p>

    <?php endif; ?>
    

    </body>
    </html>
