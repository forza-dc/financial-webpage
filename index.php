<?php
include_once 'auth.php';

if (is_logged_in()) {
    // Implement logic for authenticated users
    echo "Welcome to the dashboard!";
} else {
    // Implement logic for non-authenticated users
    echo "Welcome to the main page!";
}
?>
