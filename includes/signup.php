<?php
session_start();
require_once 'connection.php';

$name = $_POST['name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
global $connect;

if ($password === $password_confirm) {
    $time = time();
    $path = "uploads/{$time}_{$_FILES['avatar']['name']}";

    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], "../$path")) {
        $_SESSION['message'] = 'Error upload file';
        header('Location: ../register.php');
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "
        INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `avatar`)
        VALUES (NULL, '$name', '$login', '$email', '$password', '$path');
    ";

    echo "<script>console.log($password)</script>";
    mysqli_query($connect, $query);
    $_SESSION['message'] = "Register completed successfully";
    header('Location: ../index.php');

} else {
    $_SESSION['message'] = 'Passwords don\'t match';
    header('Location: ../register.php');
}


