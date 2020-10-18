<?php
session_start();
if (!isset($_SESSION['FullName'])) {
    header('Location: trang-truong-cho-cuu-sinh-vien.php');
}
