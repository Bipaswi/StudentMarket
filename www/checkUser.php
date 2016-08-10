<html>

	<head>
	<title>Login</title>

	</head>
	<body>
	
	<?php

	// Check if username and password are correct
	if ($_POST["username"] == "php@yahoo.com" && $_POST["password"] == "php") {
	 
	// If correct, we set the session to YES
	  session_start();
	  $_SESSION["Login"] = "YES";
	  echo "<h1>You are now logged correctly in</h1>";
	  echo "<p><a href='document.php'>Link to protected file</a><p/>";
	 
	}
	else {
	 
	// If not correct, we set the session to NO
	  session_start();
	  $_SESSION["Login"] = "NO";
	  echo "<h1>You are NOT logged correctly in </h1>";
	  echo "<p><a href='document.php'>Link to protected file</a></p>";
	 
	}

	/*
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


$conn->close();*/
	header('Location: index.html');
	?>

	</body>
	</html>