<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'test';
$conn =  mysqli_connect('localhost', $user, $pass, $db);
if (!$conn) {
    die('Khong the ket noi vi ..');
    exit();
}
