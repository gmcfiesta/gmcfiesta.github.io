<?php
$servername = "localhost";
$username = "id2900475_admin";
$password = "aksaichin";
$database = "id2900475_one";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo ;
?>