<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
$Email = $_GET['Email'];
require("../include/connection.php");
include("../include/functions.php");
if (deleteUser($Email)) {
    header("Location: index.php");
    exit();
} else {
    echo "Có lỗi xin hãy thao tác lại !";
}
mysqli_close($conn);
