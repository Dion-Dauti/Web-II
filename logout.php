<?php
session_start();
session_destroy();

header("Location: l_test.php");
//kur e dergojme nje location header eshte mire te perdoret nje exit
exit;


