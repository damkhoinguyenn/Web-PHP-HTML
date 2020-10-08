<?php
    // B1: Ket noi DB
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db   = 'test';
    $port = '';
    $conn =  mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die('Khong the ket noi vi ..');
        exit();
    }

?>