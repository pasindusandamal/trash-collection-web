<?php
// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// Connect to the MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert the data into the users table
$sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
