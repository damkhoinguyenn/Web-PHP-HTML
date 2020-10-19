<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
$Email = $_GET['Email'];
require("include/connection.php");
include("include/functions.php");
if (deleteUser($FullName)) {
    header("Location:index.php");
    exit();
} else {
    echo "Loi gi do ...";
}
mysqli_close($conn);
