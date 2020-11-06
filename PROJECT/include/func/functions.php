<?php
// for student
function getAllStudents()
{
    global $conn;
    $sql = "SELECT * FROM `students` ";
    $result = mysqli_query($conn, $sql);
    $students = mysqli_fetch_all($result);
    return $students;
}

// for student
function getOneStudent($Email)
{
    global $conn;
    $Email = $_REQUEST['Email'];
    $sql = "SELECT * FROM `students` WHERE Email = '$Email'";
    $result = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($result);
    return $student;
}

// for admin
function getAllTeachers()
{
    global $conn;
    $sql = "SELECT * FROM `teachers`";
    $result = mysqli_query($conn, $sql);
    $teachers = mysqli_fetch_all($result);
    return $teachers;
}

// for student Xet Tuyen
function getAllStudentsXT()
{
    global $conn;
    $sql = "SELECT * FROM `enrollment`";
    $result = mysqli_query($conn, $sql);
    $students = mysqli_fetch_all($result);
    return $students;
}

// for student Xet Tuyen
function getOneStudentXT($Id)
{
    global $conn;
    $sql = "SELECT * FROM `enrollment` WHERE Id = '$Id'";
    $result = mysqli_query($conn, $sql);
    $student = mysqli_fetch_assoc($result);
    return $student;
}

// function deleteUser($id)
// {
//     global $conn;
//     $sql = "DELETE FROM students WHERE userid = '$id'";
//     if (mysqli_query($conn, $sql))
//         return TRUE;
//     else
//         return FALSE;
// }
// for admin
// function deleteUser($Email)
// {
//     global $conn;
//     $sql = "DELETE FROM `students` WHERE Email = '$Email'";
//     if (mysqli_query($conn, $sql))
//         return TRUE;
//     else
//         return FALSE;
// }
// for admin
// function editUser($FullName, $Email, $Password)
// {
//     global $conn;
//     $sql = "UPDATE `users` SET `FullName` ='$FullName', `Email`='$Email',`Password`='$Password' where `Email` = '$Email' ";
//     $result = mysqli_query($conn, $sql);
//     if ($result) {
//         echo "Sua thanh cong.";
//         header("Location: ../../admin/index.php");
//         exit();
//     } else {
//         echo "Sua that bai.";
//     }
// }
