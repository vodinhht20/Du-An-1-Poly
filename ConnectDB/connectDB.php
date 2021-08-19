<?php 
 function connectDB() {
    $conn = new mysqli("localhost", "root", "", "db_duandoannhanhonline");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    } else {
        return $conn;
    }
    
 }