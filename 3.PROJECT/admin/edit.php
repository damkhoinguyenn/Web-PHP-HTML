<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
require("../include/connection.php");
include("../include/functions.php");
$Email = $_GET['Email'];
$user = getOneUser($Email);
include("../include/header/headerAdmin.php");
if (isset($_POST['btnSave'])) {
    $FullName = $_POST['txtFullName'];
    $Email = $_POST['txtEmail'];
    $Password = $_POST['txtPassword'];

    editUser($FullName, $Email, $Password);
}
?>

<body>
    <main class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="txtFullName">Full Name</label>
                        <input type="text" class="form-control" name="txtFullName" id="txtFullName" value="<?php echo $user['FullName']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $user['Email']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="text" class="form-control" name="txtPassword" id="txtPassword" value="<?php echo $user['Password']; ?>">
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
include("../include/footer/footerAdmin.php");
?>