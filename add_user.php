<?php
	// Replace the database credentials with your own
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "cmc";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Check if the form has been submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

	  // Get the form data
	  $name = $_POST["name"];
	  $email = $_POST["email"];

	  // SQL query to insert the user into the database
	  $sql = "INSERT INTO my_table (name, email) VALUES ('$name', '$email')";

	  if ($conn->query($sql) === TRUE) {
	    echo "User created successfully";
	  } else {
	    echo "Error creating user: " . $conn->error;
	  }
	}

	$conn->close();
?>
