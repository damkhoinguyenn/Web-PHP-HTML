<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
include("includes/headeradmin.php");
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
                        <a class="nav-link" href="edituser.html">
                            <i class="material-icons">person</i>
                            <p>Student Profile</p>
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
                        <!-- <a class="navbar-brand" href="javascript:;">User Profile</a> -->
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

            <!-- Open Edit -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">StudentXT</h4>
                                    <!-- <p class="card-category">Complete your profile</p> -->
                                </div>
                                <div class="card-body">
                                    <form action="operation/edit.php" method="post">
                                        <div class="row">
                                            <!-- <div class="col">
                                                <div class="form-group">
                                                    <label for="label">Full Name</label>
                                                    <input type="text" class="form-control" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>">
                                                </div>
                                            </div> -->
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">First Name</label>
                                                    <input type="text" class="form-control" name="txtFirstName" id="txtFirstName">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Last Name</label>
                                                    <input type="text" class="form-control" name="txtLastName" id="txtLastName">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Phone Number</label>
                                                    <input type="text" class="form-control" name="txtPhone" id="txtPhone">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Birthday</label>
                                                    <div class='input-group date' id='datetimepicker1'>
                                                        <input type='text' class="form-control" />
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <script type="text/javascript">
                                                $(function() {
                                                    $('#datetimepicker1').datetimepicker();
                                                });
                                            </script>

                                            <div class="col">


                                                <div class="form-group">
                                                    <label class="label">Gender</label>
                                                    <form action=""><br>
                                                        <input type="radio" name="gender" value="male" checked> Male
                                                        <input type="radio" name="gender" value="female"> Female
                                                    </form>
                                                    <!-- <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="GenderRadios" id="GenderRadios" value="Male" checked>
                                                        <label class="form-check-label" for="GenderRadios">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="GenderRadios" id="GenderRadios" value="Female">
                                                        <label class="form-check-label" for="GenderRadios">
                                                            Female
                                                        </label>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Email</label>
                                                    <input type="text" class="form-control" name="txtEmail" id="txtEmail">
                                                </div>
                                            </div>

                                        </div>



                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Adress</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">City</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Country</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Postal Code</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <button type="submit" class="btn btn-primary pull-right" name="btnUpdate" id="btnUpdate">Update Profile</button>
                                        <div class="clearfix"></div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Edit -->

            <?php
            include("includes/footeradmin.php");
            ?>