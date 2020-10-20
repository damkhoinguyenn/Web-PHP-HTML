<?php
if (isset($_POST['btnLogin'])) {
    require '../../include/connection.php';
    // $FullName = $_POST["txtFullName"];
    $Email = $_POST["txtEmail"];
    $Password = $_POST["txtPassword"];

    // kiểm tra lỗi, thiếu dữ liệu
    if (empty($Email) || empty($Password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM `admin` WHERE Email = ?";
        $result = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($result, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            // tránh bị lộ dữ liệu
            // gán giá trị lấy được vào trong select để đẩy về db
            mysqli_stmt_bind_param($result, "s", $Email);
            mysqli_stmt_execute($result);
            $resultCheck = mysqli_stmt_get_result($result);
            if ($row = mysqli_fetch_assoc($resultCheck)) {
                // kiểm tra password nhập vào có khớp với password trong db hay không
                $PasswordCheck = password_verify($Password, $row['Password']);
                if ($PasswordCheck == false) {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                // Không dùng else mà dùng elseif vì có khả năng passwordcheck sẽ nhận là string 
                // đã phần sẽ trả ra bool
                elseif ($PasswordCheck == true) {
                    session_start();
                    $_SESSION['FullName'] = $row['FullName'];
                    $_SESSION['Email'] = $row['Email'];
                    header('Location: index.php');
                } else {
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=nofullnameoremail");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
