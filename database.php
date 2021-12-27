<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Create connection
$conn = new mysqli($servername, $username, $password, "mysitedb");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>