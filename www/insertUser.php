<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "userDatabase";

function getFormInfo($v) {
  return isset($_POST[$v]) ? htmlspecialchars($_POST[$v]) : null;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>