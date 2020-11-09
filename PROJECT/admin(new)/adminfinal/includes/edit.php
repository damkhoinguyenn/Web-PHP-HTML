<?php
require("../../include/func/connection.php");
include("../../include/func/functions.php");
// $Email = $_GET['Email'];
// $student = getOneStudent($Email);
if (isset($_POST['btnUpdate'])) {
    $FullName = $_REQUEST['txtFullName'];
    $Email = $_REQUEST['txtEmail'];
    $Password = $_REQUEST['txtPassword'];

    $sql = "UPDATE `students` SET `FullName`='" . $FullName . "', `Email`='" . $Email . "', `Password`='" . $Password . "' where `Email` = '" . $Email . "'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "edit successfully!";
        header("Location: ../index.php");
        exit();
    } else {
        echo "edit failed!";
    }
}
