<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h6>Chúc mừng <?php echo $_SESSION['Email'];  ?> đã đăng nhập thành công !</h6>
    <h1>DANH SACH SINH VIEN DANG HOC TAI TRUONG</h1>
    <table class="table">
        <thead>
            <tr>
                <th>UserId</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
                <th><a href="editPage.php">Edit Page</a></th>
                <th><a href="operation/logout.php">Logout</a></th>
                <th><a href="register.php">Register</a></th>
                <th><a href="xetTuyen.php">Xet Tuyen</a></th>
                <th><a href="tableTeachers.php">Giao vien</a></th>
            </tr>
        </thead>
        <?php
        require('../include/func/connection.php');
        include("../include/func/functions.php");
        $students = getAllStudents();
        foreach ($students as $row) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><a href="view.php?User=<?php echo $row[0]; ?>">view</a></td>
                    <td><a href="edit.php?User=<?php echo $row[0]; ?>">edit</a></td>
                    <td><a href="operation/delete.php?User=<?php echo $row[0]; ?>">delete</a></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</body>