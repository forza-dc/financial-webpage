<?php
include_once 'db.php';
include_once 'functions.php';

session_start();

function is_logged_in() {
    return isset($_SESSION['user_id']);
}

function login($username, $password) {
    global $conn;

    $username = sanitize_input($username);
    $password = sanitize_input($password);

    // Implement user authentication
}

function register($username, $password) {
    global $conn;

    $username = sanitize_input($username);
    $password = sanitize_input($password);

    // Implement user registration
}
?>
