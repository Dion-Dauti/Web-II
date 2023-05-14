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
    <body >
        <div></div>
    <style> 

    
    div{
    background-image:url("images/healthcare.avif");
    opacity:0.2;
    position:absolute;
    top:0;
    bottom:0;
    right:0;
    left:0;
    background-repeat: no-repeat;
    background-size: cover;
    z-index:-1;
}

h1{
    text-align: center;
    margin-top: 50px;
    font-weight: bold;
}

h3{
    text-align: center;
}

a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}



.button{
    padding-left: 20px;
    padding-right:20px;
    padding-top:12px;
    padding-bottom:12px;
    background-color:dodgerblue;
    margin-left:600px;
    border:none;
}

.button:hover{
    background-color: cornflowerblue;
    
}

.button2{
    padding-left: 20px;
    padding-right:20px;
    padding-top:12px;
    padding-bottom:12px;
    background-color:dodgerblue;
    margin-left:80px;
    border:none;

}

.button2:hover{
    background-color: cornflowerblue;
   
}








</style>

    <h1>
        WELCOME TO <img src="images/logo.png"> 
    </h1>

    <?php if(isset($_SESSION["user_id"])):?>
        <?php if($_SESSION["user_role"] == "admin"): ?>
        <!-- Show links for admin -->
        <h3>You are the admin of this page!</h3>
        <h3>Please choose your further action!</h3>
        <button class="button" ><a class = "admin" href="adminDashboard.php">Go to Admin page</a></button>
    <?php else:  ?>
        <?php  header('Location: index.html'); ?>
        <!-- Show links for normal user -->
        <button class="button"> <a href="login.php">Login</a></button>  <button class="button2"><a href="signup_process.php">Sign Up</a></button>
        
        
        <p><a href="index.html">Profile</a></p>
        <?php endif; ?>
       
        <button class="button2" ><a class="logout" href="logout.php">Log out </a></button>
    <?php else: ?>
      <button class="button"> <a href="login.php">Login</a></button>  <button class="button2"><a href="signup_process.php">Sign Up</a></button>

    <?php endif; ?>
    

    </body>
    </html>
