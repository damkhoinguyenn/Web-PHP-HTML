<?php
$FullName = $_GET['FullName'];
require("Includes/Connection.php");
include("Includes/Functions.php");
if (deleteUser($FullName)) {
    header("Location:index.php");
    exit();
} else {
    echo "Loi gi do ...";
}
mysqli_close($conn);
