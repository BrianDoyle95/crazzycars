<?php

$host = "127.0.0.1";
    $user = "anjit11";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "car_rental";                                  //Your database name you want to connect to
    $port = 3306;
$con = mysqli_connect("$host","$user","$pass","$db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>