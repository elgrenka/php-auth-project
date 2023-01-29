<?php
session_start();
require_once 'connection.php';

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    echo "OK";
} else {
    $_SESSION['message'] = 'Passwords don\'t match';
    header('Location: ../register.php');
}


