<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}
require('../include/func/connection.php');
include("../include/func/functions.php");
$Email = $_GET['Email'];
$student = getOneStudent($Email);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<main class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="operation/edit.php" method="post">

                <div class="form-group">
                    <label for="txtFullName">Full Name</label>
                    <input type="text" class="form-control" name="txtFullName" id="txtFullName" value="<?php echo $student['FullName']; ?>">
                </div>

                <div class="form-group">
                    <label for="txtEmail">Email</label>
                    <input type="text" class="form-control" name="txtEmail" id="txtEmail" value="<?php echo $student['Email']; ?>">
                </div>

                <div class="form-group">
                    <label for="txtPassword">Password</label>
                    <input type="text" class="form-control" name="txtPassword" id="txtPassword" value="<?php echo $student['Password']; ?>">
                </div>

                <div class="form-group">
                    <button type="back" class="bg-light " name="btnCancel" id="btnCancel">
                        <a class="btnCancel" href="index.php">Cancel</a>
                    </button>
                </div>

            </form>
        </div>
    </div>
</main>