<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
include("../include/header/headerAdmin.php");
?>

<?php
include("../include/footer/footerAdmin.php");
?>
