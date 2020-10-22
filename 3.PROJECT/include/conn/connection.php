<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'Project';
$conn =  mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Kết nối bị lỗi vì :" . mysqli_connect_error());
}
