<?php
require("../include/func/connection.php");
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
$Email = $_GET['Email'];
$user = getOneUser($Email);
$sql = "DELETE FROM `users` WHERE Email = '$Email'";
if (mysqli_query($conn, $sql)) {
    header("Location: ../index.php");
    exit();
} else
    echo "Có lỗi xin hãy thao tác lại !";

// if (deleteUser($Email)) {
//     header("Location: index.php");
//     exit();
// } else {
//     echo "Có lỗi xin hãy thao tác lại !";
// }
mysqli_close($conn);
