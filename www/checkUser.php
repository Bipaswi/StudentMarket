<?php
$servername = "localhost";
$username = "username";
$password = "password";

$nameOfUser = "username";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT password FROM Users WHERE nameOfUser = '{$nameOfUser}'";
$result = mysql_query($query);
echo (mysql_num_rows($result) == 0) ? 'NO' : 'YES';


$conn->close();
?>