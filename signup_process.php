<?php 

/*print_r($_POST); //masi i japim te dhenat ne nje forme na dalin te faqja */


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate email
    $email = $_POST["email"];
    $valid = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    if (!preg_match($valid, $email)) {
        $error_message = "Invalid email format";
        echo "<p style='color:red;'>$error_message</p>";
        
        exit();
    }

   // Validate password
   $password = $_POST["password"];
   $valid_password = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/";
   if (!preg_match($valid_password, $password)) {
       $error_message = "Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one digit";
       echo "<p style='color:red;'>$error_message</p>";
       exit();
   }
}



if($_POST["password"] !== $_POST["password_confirmation"]){
    $error_message = "Passwords must match";
    
    echo "<script>alert('$error_message');</script>";
    echo "<script>window.location.href='signup.html';</script>";
    exit();
}







# HASH - imi i passwordit

$password_hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
var_dump($password_hash);






if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__."/s_db.php";
    
    $email = $mysqli->real_escape_string($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $name = $mysqli->real_escape_string($_POST["name"]);
    $lastname = isset($_POST["last_name"]) ? $mysqli->real_escape_string($_POST["last_name"]) : '';

    $user_role = $_POST["user_role"] ?? "user";
    
    // Check if the email already exists in the database
 
$email_check_query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($mysqli, $email_check_query);

$user = mysqli_fetch_assoc($result);

if ($user) { // If email already exists
    echo '<script>alert("This email is already taken!"); window.location.href = "signup.html";</script>';
    exit();
} else { // If email is available, continue with signup process
    // Add user to database
    $sql = "INSERT INTO users (name, last_name, email, password_hash, role) VALUES ('$name','$lastname', '$email', '$password', '$user_role')";
    mysqli_query($mysqli, $sql);
    if (!$result) {
        die('Error executing MySQLi statement: ' . mysqli_error($mysqli));
    }
    // Set cookie and redirect user to home page
    setcookie("user_email", $email, time() + (86400 * 30), "/");
    header('Location: login.php');
    exit();
}

}





//$sql = "INSERT INTO Users(Name,Email,Password_hash) VALUES (?,?,?)";


/*$stmt = $mysqli->stmt_init();
if(!$stmt->prepare($sql)){
    die("SQL error: ".$mysqli->error);
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash); //"sss" d.t.th string string string meqe i kemi te tri parametrat string

if ($stmt->execute()){
    //echo "Sign up successful <br>";
     //kalo ne faqen tjeter pasi te behesh sign up psh te test.html
     header("Location: test.html");
     exit;



}
else {
    if($mysqli->errno === 1062){
        die("Email already taken!<br> ");
    }
    else {
        die("Error executing MySQLi statement: " . $stmt->error . " (" . $stmt->errno . ")");
    }
}*/
/*try {
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);
    $stmt->execute();

    //kalo ne faqen tjeter pasi te behesh sign up psh te test.html
    header("Location: test.html");
    exit;

} catch (mysqli_sql_exception $e) {
    if($e->getCode() === 1062) {
        die("Email already taken!<br> ");
    } else {
        die("SQL error: ".$e->getMessage());
    }
}*/







?>