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
          <li class="nav-item ">
            <a class="nav-link" href="tablesXT.php">
              <i class="material-icons">content_paste</i>
              <p>Table StudentXT</p>
            </a>
          </li>
          <li class="nav-item active ">
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
            <a class="navbar-brand" href="javascript:;">Them Sinh Vien</a>
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

      <main class="container">
        <div class="row">
          <div class="col-md-12">
            <form action="includes/register.php" method="post">
              <div class="form-group">
              </div>

              <div class="form-group">
              </div>

              <div class="form-group">
                <label class="bmd-label-floating">Full Name</label>
                <input type="text" class="form-control" name="txtFullName" id="txtFullName">
              </div>

              <div class="form-group">
                <label class="bmd-label-floating">Email</label>
                <input type="text" class="form-control" name="txtEmail" id="txtEmail">
              </div>

              <div class="form-group">
                <label class="bmd-label-floating">Password</label>
                <input type="text" class="form-control" name="txtPassword" id="txtPassword">
              </div>

              <div class="form-group">
                <label class="bmd-label-floating">Repeat Password</label>
                <input type="text" class="form-control" name="txtPasswordRepeat" id="txtPasswordRepeat">
              </div>

              <div class="form-group">
                <button type="submit" class="bg-success text-white" name="btnSave" id="btnSave">
                  Luu Lai
                </button>
              </div>

              <!-- <div class="form-group">
          <button type="back" class="bg-light " name="btnCancel" id="btnCancel">
            <a class="btnCancel" href="login.php">Cancel</a>
          </button>
        </div> -->

            </form>
          </div>
        </div>
      </main>

      <?php
      include("includes/footeradmin.php")
      ?>