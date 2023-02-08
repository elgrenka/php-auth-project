<?php
session_start();
require_once 'connection.php';

$login = $_POST['login'];
//$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$password = md5($_POST['password']);
$query = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
global $connect;

$check_user = mysqli_query($connect, $query);

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];
    
    header('Location: ../profile.php');

} else {
    $_SESSION['message'] = 'Your login or password are not correct';
    header('Location: ../index.php');
}