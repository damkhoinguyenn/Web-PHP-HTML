<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
$Email = $_GET['Email'];
require("../../../include/func/connection.php");
include("../../../include/func/functions.php");

if (deleteUser($Email)) {
    header("Location: ../tablesusers.php");
    exit();
} else {
    echo "Xay ra loi....";
}
mysqli_close($conn);
