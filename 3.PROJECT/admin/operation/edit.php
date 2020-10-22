<?php
require("../../include/func/connection.php");
include("../../include/func/functions.php");
$Email = $_GET['Email'];
$user = getOneUser($Email);
include("../include/header/headerAdmin.php");
if (isset($_POST['btnSave'])) {
    $FullName = $_POST['txtFullName'];
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];

    editUser($FullName, $Email, $Password);
}
