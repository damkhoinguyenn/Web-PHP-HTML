<!-- admin -->
<?php
session_start();
if(!isset($_SESSION['Email'])){
    header("Location: SVpage.php");
    exit();
}
include("./include/header.php");
?>

<body>
    <h6>Chúc mừng <?php echo $_SESSION['Email'];  ?> đã đăng nhập thành công !</h6>
    <h1>DANH SACH SINH VIEN</h1>
    <table class="table">
        <thead>
            <tr>
                <th>UserId</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <?php
        require('include/connection.php');
        include("include/functions.php");
        $users = getAllUsers();
        foreach ($users as $row) {
        ?>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><a href="edit.php?User=<?php echo $row[0]; ?>">edit</a></td>
                    <td><a href="delete.php?User=<?php echo $row[0]; ?>">delete</a></td>
                </tr>
            </tbody>
        <?php
        }
        ?>
    </table>
</body>

<?php
include("include/footer.php");
?>