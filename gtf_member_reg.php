<?php

// Include database connection
require_once 'dbConnection.php';


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO gtf_members (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);

// Execute SQL statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();

?>
