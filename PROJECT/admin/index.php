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
            <a class="navbar-brand" href="#"><Span style="color: yellow;"><h2>DashBoardAdmin</h2></Span></a>
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
                            <a class="dropdown-item" href="xetTuyen.php">Xét tuyển học bạ</a>
                            <a class="dropdown-item" href="tableTeachers.php">Quản lí tài khoản Giáo Viên</a>
                        </div>
                    </li>
                </ul>
                <li class="nav-item dropdown list-unstyled">
                    <a class="nav-link log1 dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h6>Xin chào,<?php echo $_SESSION['Email']; ?></h6>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="operation/logout.php">Logout</a>
                    </div>
                </li>

            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead class = "thead-dark">
                        <tr>
                            <th>UserId</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Thêm</th>
                            <th>Sửa</th>
                            <th>Xóa</th>

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
                                <td><a href="register.php?User=<?php echo $row[0]; ?>"><i class="fas fa-user-plus"></i></a> </td>
                                <td><a href="edit.php?User=<?php echo $row[0]; ?>"><i class="fas fa-edit"> </i></a></td>
                                <td><a href="operation/delete.php?User=<?php echo $row[0]; ?>"><i class="fas fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>