<?php
$config = include('config.php');

$conn = new mysqli(
    $config['host'],
    $config['user'],
    $config['password'],
    $config['database'],
    $config['port']
);

if ($conn->connect_error) {
    die("Database connection error: " . $conn->connect_error);
}
