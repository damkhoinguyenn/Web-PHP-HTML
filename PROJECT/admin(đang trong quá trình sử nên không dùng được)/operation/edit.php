<?php
require("../../include/func/connection.php");
include("../../include/func/functions.php");
$Email = $_GET['Email'];
$student = getOneStudentXT($Email);
if (isset($_POST['btnSave'])) {
    $FullName = $_REQUEST['txtFullName'];
    $Email = $_REQUEST['txtEmail'];
    $Password = $_REQUEST['txtPassword'];

    $sql = " UPDATE `students` SET `FullName`='" . $FullName . "', `Email`='" . $Email . "', `Password`='" . $Password . "' WHERE `Email` = '" . $Email . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sua thanh cong.";
        header("Location: ../index.php");
        exit();
    } else {
        echo "Sua that bai.";
    }
}
