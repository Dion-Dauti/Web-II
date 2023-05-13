<?php

//MYSQLi

//pathi, qasja (useri), fjalekalimi  = tri piakt kyqe per me e lidh me databaze
//kalojme te browseri edhe /lcoalhost/phpmyadmin/

//hapi i pare - konektimi me server

$dbhost = '127.0.0.1:3308';
$dbuser="root";
$dbpass = 'root';
$dbname = 'hms';
$mysqli= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$mysqli){
    die("Could not connect: ".mysqli_connect_error());
}
echo "Connected successfully <br> <br>";

return $mysqli;

//rekomandohet qe password_hash te ruhet me 255 karaktere

$sql1 = "CREATE TABLE if not exists Users(
Id int,
Name varchar(128),
Email varchar(220) UNIQUE,
Password_hash varchar(225)  

)";

/*if(mysqli_query($conn,$sql1)){
    echo "Tabela u krijua <br>";
}
else {
    echo "Tabela nuk u krijua <br>";
}*/
















?>