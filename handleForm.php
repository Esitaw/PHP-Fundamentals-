<?php 
session_start();


if (isset($_POST['submitBtn'])) {
    // Check if user is already logged in
    if (isset($_SESSION['firstName'])) {
        $_SESSION['error'] = "Someone is already logged in. Please log out first.";
        header('Location: index.php');
        exit(); 
    }

    // Get the first name from index.php
    $firstName = $_POST['firstName'];

    // Get the password from the input field
    $password = md5($_POST['password']);

    // Set the session variables
    $_SESSION['firstName'] = $firstName;
    $_SESSION['password'] = $password;

 
    header('Location: index.php');
}
?>
