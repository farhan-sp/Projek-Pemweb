<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "127.0.0.1";
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch(PDOException $e) {
    // Log the error securely instead of displaying in production
    error_log("Database connection failed: " . $e->getMessage());
    http_response_code(500);
    die("Database connection error. Please try again later.");
}
?>