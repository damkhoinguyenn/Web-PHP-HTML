<?php
session_start();
if (!isset($_SESSION['FullName'])) {
    header("Location: login.php");
    exit();
}
include("../include/header/headerAdmin.php");
?>

<?php
include("../include/footer/footerAdmin.php");
?>
