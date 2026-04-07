<?php

$host = "sql113.infinityfree.com";
$dbname = "if0_41508331_ecommerce";
$username = "if0_41508331";
$password = "Ac4THlRxuX7V";

try {

    $pdo = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    error_log('Database connection failed: ' . $e->getMessage());
    http_response_code(500);
    die('Database connection failed. Please try again later.');
}