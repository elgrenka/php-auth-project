<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'test_db';

$connect = mysqli_connect($hostname, $username, $password, $database);

if (!$connect) {
    die('Error connecting to database');
} else {
    echo "<script>console.log('Connection success')</script>";
}