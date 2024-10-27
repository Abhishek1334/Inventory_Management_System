<?php
// db.php - database connection
$servername = "localhost";  // Update with your database host
$username = "root";         // Update with your database username
$password = "";             // Update with your database password
$dbname = "shelfwise_db";   // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
