<!-- admin -->
<?php
session_start();
if (!isset($_SESSION['FullName'])) {
  header('Location: trang-truong-cho-sinh-vien.php');
}
include("include/header.php");
if (isset($_POST['btnSave'])) {
  include("include/connection.php");
  require("include/functions.php");
  $Email = $_POST['txtEmail'];
  $Password = $_POST['txtPassword'];

  addUser($FullName, $Email, $Password);
}
?>

<main class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="POST">
        <h1>Them Sinh Vien</h1>

        <div class="form-group">
          <label for="txtEmail">Email</label>
          <input type="text" class="form-control" name="txtEmail" id="txtEmail">
        </div>

        <div class="form-group">
          <label for="txtPassword">Password</label>
          <input type="text" class="form-control" name="txtPassword" id="txtPassword">
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
include("include/footer.php");
?>