<?php
require("../../include/func/connection.php");
include("../../include/func/functions.php");
$Email = $_GET['Email'];
$user = getOneUser($Email);
if (isset($_POST['btnSave'])) {
    $FullName = $_POST['txtFullName'];
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];

    $sql = "UPDATE `users` SET `FullName` ='$FullName', `Email`='$Email',`Password`='$Password' where `Email` = '$Email' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sua thanh cong.";
        header("Location: ../index.php");
        exit();
    } else {
        echo "Sua that bai.";
    }
}