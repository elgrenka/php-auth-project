<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'mydb2';

$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die('Error connecting to database');
} else {
    echo "<script>console.log('Connection success')</script>";
}