<?php
// process.php
// This file will handle login and signup logic

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action']) && $_POST['action'] == 'signup') {
        echo "Signup logic will go here";
    } elseif (isset($_POST['action']) && $_POST['action'] == 'login') {
        echo "Login logic will go here";
    } else {
        echo "Invalid request";
    }
}
?>
