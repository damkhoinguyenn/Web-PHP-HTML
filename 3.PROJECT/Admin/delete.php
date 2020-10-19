<?php
$FullName = $_GET['FullName'];
require("include/connection.php");
include("include/functions.php");
if (deleteUser($FullName)) {
    header("Location:index.php");
    exit();
} else {
    echo "Loi gi do ...";
}
mysqli_close($conn);
