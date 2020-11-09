<?php
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
                    <li class="nav-item active ">
                        <a class="nav-link" href="tablesusers.php">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li class="nav-item ">
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
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
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
                                    <h4 class="card-title ">Teachers Table</h4>
                                    <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th>UserId</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require('../../include/func/connection.php');
                                                include('../../include/func/functions.php');
                                                $teachers = getAllTeachers();
                                                foreach ($teachers as $row) {
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td scope="row"><?php echo $row[0]; ?></td>
                                                    <td><?php echo $row[1]; ?></td>
                                                    <td><?php echo $row[2]; ?></td>
                                                    <td><?php echo $row[3]; ?></td>
                                                    <td><a href="viewuser.php?Teacher=<?php echo $row[0]; ?>">view</a></td>
                                                    <td><a href="edit.php?Teacher=<?php echo $row[0]; ?>">edit</a></td>
                                                    <td><a href="includes/delete.php?Teacher=<?php echo $row[0]; ?>">delete</a></td>
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
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title ">Students Table</h4>
                                    <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <th>UserId</th>
                                                <th>Full Name</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>View</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $students = getAllStudents();
                                                foreach ($students as $row) {
                                                ?>
                                            <tbody>
                                                <tr>
                                                    <td scope="row"><?php echo $row[0]; ?></td>
                                                    <td><?php echo $row[1]; ?></td>
                                                    <td><?php echo $row[2]; ?></td>
                                                    <td><?php echo $row[3]; ?></td>
                                                    <td><a href="viewuser.php?Student=<?php echo $row[0]; ?>">view</a></td>
                                                    <td><a href="edit.php?Student=<?php echo $row[0]; ?>">edit</a></td>
                                                    <td><a href="includes/delete.php?Student=<?php echo $row[0]; ?>">delete</a></td>
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
            <!-- End Table -->
            <?php
            include("includes/footeradmin.php")
            ?>