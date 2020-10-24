<?php
if (isset($_POST['btnSave'])) {
    require("../../include/func/connection.php");
    require("../../include/func/functions.php");
    $FullName = $_POST['txtFullName'];
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];
    $PasswordRepeat = $_POST['txtPasswordRepeat'];

    // kiểm tra lỗi, thiếu dữ liệu
    if (empty($FullName) || empty($Email) || empty($Password) || empty($PasswordRepeat)) {
        header("Location: ../register.php?error=emptyfields&fullname=" . $FullName . "&email=" . $Email);
        exit();
    } // nếu cả email và fullname đều nhập sai
    // elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $FullName)) {
    //     header("Location: ../register.php?error=invalidemail&fullName");
    //     exit();
    // } 
    // nếu email nhập sai
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.php?error=invalidemail&fullname=" . $FullName);
        exit();
    } // nếu fullname nhập sai
    // elseif (!preg_match("/^[a-zA-Z0-9]*$/", $FullName)) {
    //     header("Location: ../register.php?error=invalidfullname&email=" . $Email);
    //     exit();
    // } 
    // nếu 2 password nhập không giống nhau
    elseif ($Password !== $PasswordRepeat) {
        header("Location: ../register.php?error=passwordcheck&fullname=" . $FullName . "&email=" . $Email);
        exit();
    } // kiểm tra email đã tồn tại trong db hay chưa
    else {
        $sql = "SELECT * FROM `users` WHERE Email = ?";
        $result = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($result, $sql)) {
            header("Location: ../register.php?error=sqlerror");
            exit();
        } else {
            // tránh bị lộ dữ liệu
            // gán giá trị lấy được vào trong select để đẩy về db
            mysqli_stmt_bind_param($result, "s", $Email);
            mysqli_stmt_execute($result);
            mysqli_stmt_store_result($result);
            $resultCheck = mysqli_stmt_num_rows($result);
            if ($resultCheck > 0) {
                header("Location: ../register.php?error=emailtaken&fullName=" . $FullName);
                exit();
            } else {
                $sql = "INSERT INTO `users`( `FullName`, `Email`, `Password`) VALUES (?, ?, ?)";
                $result = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($result, $sql)) {
                    header("Location: ../register.php?error=sqlerror");
                    exit();
                } else {
                    // mã hóa password gửi về db
                    $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
                    // tránh bị lộ dữ liệu
                    // gán giá trị lấy được vào trong select để đẩy về db
                    mysqli_stmt_bind_param($result, "sss", $FullName, $Email, $hashedPassword);
                    mysqli_stmt_execute($result);
                    header("Location: ../index.php");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($result);
    mysqli_close($conn);
} else {
    header("Location: ../login.php");
    exit();
}
