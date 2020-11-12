<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
$user_id = $_GET['id'];
require("../include/func/connection.php");
include("../include/func/functions.php");

if (deleteUser($user_id)) {
    header("Location:index.php");
    exit();
} else {
    echo "Xay ra loi....";
}
mysqli_close($conn);
?>
