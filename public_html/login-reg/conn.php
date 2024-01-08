<?php
$servername = "68.178.149.82";
$username = "setthawut7686";
$password = "setthawut7686";
$dbname= "User_id";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>