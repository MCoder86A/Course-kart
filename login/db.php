<?php 
    $servername = "127.0.0.1";
    $username = "mrin";
    $password = "12345678";
    $dbname = "web";
    
    $conn = new mysqli($servername, $username, $password, $dbname,3306);
    
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //export
    
?>