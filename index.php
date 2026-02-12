<?php

$host = "db";
$user = "root";
$pass = "rootpassword";
$db = "testdb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "<h1>PHP + MySQL via Docker & Coolify</h1>";
echo "Connected successfully to MySQL database.";

?>

