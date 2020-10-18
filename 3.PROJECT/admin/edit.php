<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: trang-truong-cho-sinh-vien.php');
}
include("include/header.php");
require("include/connection.php");
include("include/functions.php");
$email = $_GET['email'];
$email = getOneUser($email);
if (isset($_POST['btnSave'])) {
    $fullName = $_POST['txtFullName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    editUser($fullName, $email, $password);
}
?>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="txtFullName">Full Name</label>
                        <input type="text" class="form-control" name="txtFullName" id="txtFullName" value="<?php echo $class['fullName']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $class['email']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="text" class="form-control" name="txtPassword" id="txtPassword" value="<?php echo $class['password']; ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-success text-white" name="btnSave" id="btnSave">
                            Luu Lai
                        </button>
                    </div>

                    <!-- <div class="form-group">
                        <button type="back" class="bg-light " name="btnCancel" id="btnCancel">
                            <a class="btnCancel" href="index.php">Cancel</a>
                        </button>
                    </div> -->

                </form>
            </div>
        </div>
    </main>
</body>

<?php
include("include/footer.php");
?>