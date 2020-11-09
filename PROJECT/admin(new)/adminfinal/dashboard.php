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
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active ">
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
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- người tạo ra trang web -->
                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="javascript:;">
                                        <img class="img" src="../assets/img/faces/nguyen.png" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray">DEV</h6>
                                    <h4 class="card-title">Đàm Nguyên</h4>
                                    <p class="card-description">
                                        Nghèo không là xấu, nghèo mà không có chí mới là xấu; hèn không đáng ghét, hèn mà không có tài mới đáng ghét; già không nên than thở, già mà sống thừa mới đáng than thở; chết không nên bi ai, chết mà vô bổ mới đáng bi ai.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="javascript:;">
                                        <img class="img" src="../assets/img/faces/nguyen.png" />
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-category text-gray">DEV</h6>
                                    <h4 class="card-title">Đàm Nguyên</h4>
                                    <p class="card-description">
                                        Nghèo không là xấu, nghèo mà không có chí mới là xấu; hèn không đáng ghét, hèn mà không có tài mới đáng ghét; già không nên than thở, già mà sống thừa mới đáng than thở; chết không nên bi ai, chết mà vô bổ mới đáng bi ai.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- đóng người tạo trang -->
                    </div>
                </div>
            </div>

            <?php
            include("includes/footeradmin.php")
            ?>