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
    <h1>DANH SACH SINH VIEN XET TUYEN VAO TRUONG</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>FullName</th>
                <th>Gender</th>
                <th>Password</th>
                <th>Ethnic</th>
                <th>Relligion</th>
                <th>Place</th>
                <th>Yeargra</th>
                <th>Rank12</th>
                <th>Att12</th>
                <th>CMND</th>
                <th>DataCMND</th>
                <th>PlaceCMND</th>
                <th>BornPlace</th>
                <th>Year10</th>
                <th>CodeSchool10</th>
                <th>Year11</th>
                <th>CodeSchool11</th>
                <th>Year12</th>
                <th>CodeSchool12</th>
                <th>PlaceContact</th>
                <th>PhoneStudents</th>
                <th>PhoneParent</th>
            </tr>
        </thead>
        <?php
        require('../include/func/connection.php');
        include("../include/func/functions.php");
        $studentsXT = getAllStudentsXT();
        foreach ($studentsXT as $row) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                    <td><?php echo $row[9]; ?></td>
                    <td><?php echo $row[10]; ?></td>
                    <td><?php echo $row[11]; ?></td>
                    <td><?php echo $row[12]; ?></td>
                    <td><?php echo $row[13]; ?></td>
                    <td><?php echo $row[14]; ?></td>
                    <td><?php echo $row[15]; ?></td>
                    <td><?php echo $row[16]; ?></td>
                    <td><?php echo $row[17]; ?></td>
                    <td><?php echo $row[18]; ?></td>
                    <td><?php echo $row[19]; ?></td>
                    <td><?php echo $row[20]; ?></td>
                    <td><?php echo $row[21]; ?></td>
                    <td><?php echo $row[22]; ?></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</body>