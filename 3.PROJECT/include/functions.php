<?php
// for login admin & user
// function loginUser()
// {
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
// }
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
function getOneUser($email)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
// for admin
function deleteUser($email)
{
    global $conn;
    $email = $_GET['email'];
    $sql = "DELETE FROM `users` WHERE email = '$email'";
    if (mysqli_query($conn, $sql))
        return TRUE;
    else
        return FALSE;

    // if (deleteUser($email)) {
    //     header("Location:index.php");
    //     exit();
    // } else {
    //     echo "Loi gi do ...";
    // }
    // mysqli_close($conn);
}
// for admin
function addUser($email, $password)
{
    global $conn;
    $sql = "INSERT INTO `users`(`email`, `password`) VALUES ($email, $password)";
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
function editUser($fullName, $email, $password)
{
    global $conn;
    $sql = "UPDATE users SET `fullName` ='$fullName', `email`='$email',`password`='$password' where `fullName` = '$fullName' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sua thanh cong.";
        header("Location:index.php");
        exit();
    } else {
        echo "Sua that bai.";
    }
}
