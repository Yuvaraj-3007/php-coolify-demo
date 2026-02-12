<?php

$host = getenv('DB_HOST');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');
$db = getenv('DB_DATABASE');

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

echo "<h1>PHP + MySQL via Coolify</h1>";
echo "Database connected successfully";

?>