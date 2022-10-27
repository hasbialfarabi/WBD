<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$db = "spotify";

// Create connection
$conn = new mysqli($localhost, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>