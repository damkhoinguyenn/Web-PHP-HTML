<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
include("../include/header/headerAdmin.php");
?>
<script>
    function ConfirmDelete() {
        confirm("Are you sure you want to delete?");
    }
</script>

<main class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="operation/delete.php" method="post">
                <div class="form-group">
                    <label for="txtFullName">Full Name</label>
                    <input type="text" name="txtFullName" id="txtFullName" class="form-control" aria-describedby="helpId" value="<?php echo $user['FullName']; ?>">
                </div>

                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="email" class="form-control" name="txtEmail" id="txtEmail" aria-describedby="emailHelpId" value="<?php echo $user['Email']; ?>">
                </div>

                <div class=" form-group">
                    <button type="back" class="bg-light " name="btnCancel" id="btnCancel">
                        <a class="btnCancel" href="index.php">Cancel</a>
                    </button>
                </div>

            </form>
        </div>
    </div>
</main>

<?php
include("../include/footer/footerAdmin.php");
?>