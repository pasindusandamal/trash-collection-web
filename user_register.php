<?php
// Create a new MySQLi object
$mysqli = new mysqli("localhost", "root", "", "cmc");

// Check connection
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve the values submitted from the form
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

// Prepare the SQL statement
$stmt = $mysqli->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");

// Bind the parameters to the statement
$stmt->bind_param("sss", $username, $password, $role);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$mysqli->close();
?>
