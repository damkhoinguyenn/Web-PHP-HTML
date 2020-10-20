<?php
// for login admin & user
// function loginUser()
// {
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
function getOneUser($Email)
{
    global $conn;
    $sql = "SELECT * FROM `users` WHERE Email = '$Email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
// for admin
function deleteUser($Email)
{
    global $conn;
    $sql = "DELETE FROM `users` WHERE Email = '$Email'";
    if (mysqli_query($conn, $sql))
        return TRUE;
    else
        return FALSE;
}
// for admin
// function addUser($FullName, $Email, $Password)
// {
//     global $conn;
//     $sql = "INSERT INTO `users`( `FullName`, `Email`, `Password`) VALUES ('$FullName', '$Email', '$Password')";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//         echo "Them thanh cong.";
//         header("Location:index.php");
//         exit();
//     } else {
//         echo "Them that bai.";
//     }
// }
// for admin
function editUser($FullName, $Email, $Password)
{
    global $conn;
    $sql = "UPDATE `users` SET `FullName` ='$FullName', `Email`='$Email',`Password`='$Password' where `Email` = '$Email' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sua thanh cong.";
        header("Location: index.php");
        exit();
    } else {
        echo "Sua that bai.";
    }
}
// for admin
function editPage()
{
}
