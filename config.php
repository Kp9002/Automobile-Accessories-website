<?php

session_start();

// Create connection
$conn = new mysqli("localhost", "root", "", "autoweb");

// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}

?>