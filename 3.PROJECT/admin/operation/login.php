<?php
session_start();
if (isset($_POST["btnLogin"])) {
    require('../../include/connection.php');
    $Email = $_POST["txtEmail"];
    $Password = $_POST["txtPassword"];
    // làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
    $Email = strip_tags($Email);
    $Email = addslashes($Email);
    $Password = strip_tags($Password);
    $Password = addslashes($Password);
    $sql = "SELECT * FROM `admin` WHERE Email = '$Email' and Password = '$Password'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
        echo "Tên đăng nhập hoặc mật khẩu không đúng !";
    } else {
        $_SESSION['Email'] = $Email;
        header('Location: ../index.php');
    }
}
