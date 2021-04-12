<?php

// access the current session
if (session_status() == PHP_SESSION_NONE) {
    session_start(); 
}

// check for email
if (empty($_SESSION['email'])) {
    // asks to login if email isn't existing
    header('location:login.php');
    exit();
}
?>