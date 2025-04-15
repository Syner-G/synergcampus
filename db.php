<?php
$servername = "localhost"; // Change if your database server is different
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (leave empty if not set)
$dbname = "synergcampus"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: Set the character set to UTF-8
$conn->set_charset("utf8");

?>