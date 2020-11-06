<?php
session_start();
if (!isset($_SESSION['Email'])) {
  header("Location: login.php");
  exit();
}
include("../include/header/headerAdmin.php");
?>

<main class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="operation/register.php" method="POST">
        <h1>Them Sinh Vien</h1>

        <div class="form-group">
          <label for="txtFullName">Full Name</label>
          <input type="text" class="form-control" name="txtFullName" id="txtFullName">
        </div>

        <div class="form-group">
          <label for="txtEmail">Email</label>
          <input type="text" class="form-control" name="txtEmail" id="txtEmail">
        </div>

        <div class="form-group">
          <label for="txtPassword">Password</label>
          <input type="text" class="form-control" name="txtPassword" id="txtPassword">
        </div>

        <div class="form-group">
          <label for="txtPasswordRepeat">Repeat Password</label>
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
include("../include/footer/footerAdmin.php");
?>