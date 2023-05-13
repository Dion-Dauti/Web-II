<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'root';
$db_name = 'hms';
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, 3307);
if(! $conn )
{
die('Could not connect: ' . mysqli_connect_error());
}



?>