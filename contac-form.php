<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  // Connect to MySQL database
  $host = "localhost"; // Enter your database host here
  $username = "root"; // Enter your database username here
  $password = ""; // Enter your database password here
  $dbname = "cmc"; // Enter your database name here
  $conn = new mysqli($host, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Insert form data into database
  $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sss", $name, $email, $message);
  $stmt->execute();

  // Close database connection
  $stmt->close();
  $conn->close();
}
