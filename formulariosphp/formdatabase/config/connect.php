<?php
    $host="127.0.0.1";
    $user="fundweb";
    $password="Fundamentos4303";
    $database="calificaciones";
   // Create connection
   $conn = mysqli_connect($host, $user, $password, $database);
   
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";
  ?>