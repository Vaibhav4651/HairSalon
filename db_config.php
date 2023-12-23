<?php
$servername = "localhost"; // Server name (usually 'localhost' for local development)
$username = "root"; // MySQL username (default is 'root' for local server)
$password = ""; // MySQL password (leave it empty for no password)
$dbname = "miniproject"; 

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
