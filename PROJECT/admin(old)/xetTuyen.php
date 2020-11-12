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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
<div class="navad">
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <a class="navbar-brand" href="#"><Span style="color: yellow;"><h2>DashBoard</h2></Span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admin</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tùy chọn</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="index.php">Quản lí Sinh viên</a>
                            <a class="dropdown-item" href="tableTeachers.php">Quản lí tài khoản Giáo Viên</a>
                        </div>
                    </li>
                </ul>
                <li class="nav-item dropdown list-unstyled">
                    <a class="nav-link log1 dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h6>Xin chào,<?php echo $_SESSION['Email']; ?></h6>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="">Logout</a>
                    </div>
                </li>

            </div>
        </nav>
    </div>
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