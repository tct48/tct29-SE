<?php
    $host = "localhost";
    $database = "deejung1_se";
    $user = "deejung1_ketar";
    $password = "123456@q!";
    $conn = new mysqli($host,$user,$password,$database);

    // Check connection
    if ($conn -> connect_errno) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }else{
        // echo "Connect";
    }
?>