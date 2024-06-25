<?php
session_start();

// assume these are fetched from the database

$username = 'admin';
$password = 'password';

if ($_POST['username'] === $username && $_POST['password'] === $password) {
    $_SESSION['logged'] = true;
    header('Location: members.php');
} else {
    header('Location: login.php');
}
exit;