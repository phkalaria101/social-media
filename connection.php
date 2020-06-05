<?php
$host = "localhost";
$servername = "localhost";
$username = "username";
$password = "password";
$db = "dbname";
// Create connection
$conn = mysqli_connect($name, $username, $password,$email $db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
