<?php
$servername = "database-1.c7uce8yog8c7.eu-north-1.rds.amazonaws.com";
$username = "admin";
$password = "admin1234";
$dbname = "user_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];

// Insert into table
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "<h2 style='text-align:center;margin-top:50px;font-family:Arial;'>Thank you, $name! Your data has been saved successfully.</h2>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

