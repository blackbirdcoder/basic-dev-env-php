<?php
$host = getenv('APP_NAME') . '_' . getenv('CONTAINER_MYSQL');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_PASSWORD');

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
} else {
    echo "Connect ti MySQL server successfully!";
}

