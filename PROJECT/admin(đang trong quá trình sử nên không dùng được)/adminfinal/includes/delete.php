<?php
include("../../../include/func/connection.php");
include("../../../include/func/functions.php");
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
// $Email = $_GET['Email'];
// $student = getOneStudent($Email);
$sql = "DELETE FROM `students` WHERE `Email` = '$Email'";
if (mysqli_query($conn, $sql)) {
    header("Location: ../tablesusers.php");
    exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
