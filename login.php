<?php 

$is_invalid = false;

# detect if the form has been submitted

if($_SERVER["REQUEST_METHOD"] === "POST"  ){
    # kontrollo nese email dhe password jane match me ato ne databaze
    $mysqli = require __DIR__."/s_db.php";

    $sql = sprintf( "SELECT * FROM Users 
                     WHERE Email = '%s'",
                    $mysqli->real_escape_string(  $_POST["email"]));    //perdoret per te menjanuar sql injection attack keshtu qe e bejme escape vleren qe vjen ne form
    $result =  $mysqli->query($sql);
   $user = $result->fetch_assoc();
   //verifiko passwordin
   if($user){
   if(password_verify($_POST["password"],$user["Password_hash"])){
    //pasi qe useri te logohet, te kaloj tek faqja e rradhes ne kete rast "l_test.php"
   session_start();
   //session_regenerate_id();

   $_SESSION["user_id"] = $user["id"];
   $_SESSION["user_role"]=$user["role"]; //e ruan rolin e userit ne session
   header("Location: l_test.php");
   exit;
   }
}
   $is_invalid = true;

}

//sesionet perdoren per te mbajtur ne mend vlerat ne mes te browser request





?>




<!DOCTYPE html>
<head>

    <title>Log In</title>
    <meta charset="UTF - 8">
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            box-sizing: border-box;
            margin: 50px;
            margin-right: 500px;
            margin-left: 500px;
            margin-top:50px;
            background-color: lightcyan;
        }
        img{
            height:50px;
        }
        
        #email{
            background-color: white;
            outline-color:aqua;
            width: 75%;
           padding: 15px;
           margin: 5px 0 22px 0;
           display: inline-block;
           border-color: aqua;

        }
        #password{
            background-color:white;
            outline-color:aqua;
            width: 75%;
           padding: 15px;
           margin: 5px 0 22px 0;
           display: inline-block;
           border-color: aqua;
        }
      
        #login{
            background-color: cornflowerblue;
            padding: 15px 25px;
            border: none;
            color: white;

        }
       
        #login:hover{
            background-color: green;
        }
       

        h1{
            color:blue;
            
            
        }

        label{
            color:blue;
            
            
        }
        .signup{
            text-decoration: none;
        }

        #background{
           background-image: url("images/form.jpg");
           opacity: 0.2;
           position:absolute;
           top:0;
           bottom:0;
           left:0;
           right:0;
           background-repeat: no-repeat;
           background-size: cover;
           z-index: -1;

     
        }
        
    </style>
   
    
    
    <body>
        <div id = "background"></div>
        <div>
            <img src="images/logo.png">
        </div>
        
        <br>
        <h1><b>Log In<b></h1>
        <?php if($is_invalid): ?>
            <em>Invalid login</em>
            <?php endif; ?>
        <form method="POST">
            <label for="email"><b>Email<b></label>
            <br>
        
            <input type="email" name="email" id="email" placeholder="Email"
            value="<?= htmlspecialchars($_POST["email"] ??"") ?> ">
            <br>
            <label for="password"><b>Password<b></label>
            <br>
            <input type="password" name="password" id="password" placeholder="Password">
            <br>
            <button id="login"><b>Log in<b></button>
            <br>
            <h4><b>If you don't have an account, then you can </b><a class="signup" href="signup.php"><b>Sign up</b></a></h4>

        </form>
    </body>
</head>
  
   