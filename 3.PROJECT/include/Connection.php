<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'Mid-Test';
$conn =  mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die('Khong the ket noi vi ..');
    exit();
}