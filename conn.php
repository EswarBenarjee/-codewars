<?php
     $conn = new mysqli('localhost', 'root', '', 'codewars');
     if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }
     date_default_timezone_set("Asia/Calcutta");
?>