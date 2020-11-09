<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
include("includes/headeradmin.php")
?>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo"><a href="#" class="simple-text logo-normal">
                    Admin
                </a></div>
            <!-- các trang -->
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item  ">
                        <a class="nav-link" href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="tablesusers.php">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="tablesXT.php">
                            <i class="material-icons">content_paste</i>
                            <p>Table StudentXT</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="register.php">
                            <p>Add Student</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- đóng các trang -->
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Table List</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="tableadmins.php">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="includes/logout.php">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- Table -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">XT Table</h4>
                                    <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th>UserId</th>
                                                <th>Full Name</th>
                                                <th>Gender</th>
                                                <th>Birthday</th>
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
                                            </thead>
                                            <tbody>
                                                <?php
                                                require('../../include/func/connection.php');
                                                include('../../include/func/functions.php');
                                                $students = getAllStudentsXT();
                                                foreach ($students as $row) {
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
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            include("includes/footeradmin.php")
            ?>