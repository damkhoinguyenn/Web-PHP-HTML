<?php
// for login admin & user
function loginUser()
{
    // 	$username = $_POST["txtEmail"];
    // 	$password = $_POST["txtPassword"];
    //     // $errors = array();
    //     // if (empty($errors)) {
    //     //     global $conn;
    //     //     $sql = "SELECT * FROM `user-login` WHERE `email`";
    //     //     $result = mysqli_query($conn, $sql);
    //     //     if (mysqli_num_rows($result) > 0) {
    //     //         $row = mysqli_fetch_assoc($result);
    //     //         $password_hash = $row['password'];
    //     //         if (password_verify($password, $password_hash)) {
    //     //             echo "OK, khớp.";
    //     //         } else {
    //     //             echo "Chưa khớp";
    //     //         }
    //     //     } else {
    //     //         echo ".....";
    //     //     }
    //     // } else {
    //     //     echo "Co loi nhap lieu ...";
    //     // }

    //     if ($username == "" || $password == "") {
    //         echo "username hoặc password bạn không được để trống!";
    //     } else {
    //         global $conn;
    //         $sql = "SELECT * FROM `users` WHERE email = '$username' and password = '$password' ";
    //         $result = mysqli_query($conn, $sql);

    //         if (mysqli_num_rows($result) > 0) {
    //             $row = mysqli_fetch_assoc($result);
    //             $password_hash = $row['password'];
    //             if (password_verify($password, $password_hash)) {
    //                 echo "OK, khớp.";
    //             } elseif (mysqli_num_rows($result) == 0) {
    //                 echo "tên đăng nhập hoặc mật khẩu không đúng !";
    //             } else {
    //                 //lưu tên đăng nhập vào session để tiện xử lý sau này
    //                 $_SESSION['email'] = $username;
    //                 // Thực thi hành động sau khi lưu thông tin vào session
    //                 // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
    //                 header('Location: index.php');
    //             }
    //         } else {
    //             echo ".....";
    //         }
    //     }
}
// for admin
function getAllUsers()
{
    global $conn;
    $sql = "SELECT * FROM `users` ";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_all($result);
    return $user;
}
// for admin
function getOneUser($FullName)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE FullName = '$FullName'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
// for admin
function deleteUser($FullName)
{
    global $conn;
    $FullName = $_GET['FullName'];
    $sql = "DELETE FROM `users` WHERE FullName = '$FullName'";
    if (mysqli_query($conn, $sql))
        return TRUE;
    else
        return FALSE;
}
// for admin
function addUser($FullName, $Email, $Password)
{
    global $conn;
    $sql = "INSERT INTO `users`( `FullName`, `Email`, `Password`) VALUES ('$FullName', '$Email', '$Password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Them thanh cong.";
        header("Location:index.php");
        exit();
    } else {
        echo "Them that bai.";
    }
}
// for admin
function editUser($UserId, $FullName, $Email, $Password)
{
    global $conn;
    $sql = "UPDATE `users` SET `UserId`='$UserId', `FullName` ='$FullName', `Email`='$Email',`Password`='$Password' where `FullName` = '$FullName' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sua thanh cong.";
        header("Location:index.php");
        exit();
    } else {
        echo "Sua that bai.";
    }
}
// for admin
function editPage()
{
}
