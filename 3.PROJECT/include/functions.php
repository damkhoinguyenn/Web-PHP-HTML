<?php
// for login admin & user
function loginUser()
{
    // kiểm tra
    $errors = array();
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($errors)) {
        global $conn;
        $sql = "SELECT * FROM `user-login` WHERE `email`";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $password_hash = $row['password'];
            if (password_verify($password, $password_hash)) {
                echo "OK, khớp.";
            } else {
                echo "Chưa khớp";
            }
        } else {
            echo ".....";
        }
    } else {
        echo "Co loi nhap lieu ...";
    }
}
// for admin
function getAllClasses()
{
    global $conn;
    $sql = "SELECT * FROM class";
    $result = mysqli_query($conn, $sql);
    $class = mysqli_fetch_all($result);
    return $class;
}
// for admin
function deleteClass($MaLop)
{
    global $conn;
    $sql = "DELETE FROM class WHERE MaLop = '$MaLop'";
    if (mysqli_query($conn, $sql))
        return TRUE;
    else
        return FALSE;
}
// for admin
function addUser($MaLop, $TenLopHoc, $GiaoVien, $LichHoc, $HocPhi, $NgayBatDau, $NgayKetThuc, $PhongHoc)
{
    global $conn;
    $sql = "INSERT INTO class (`MaLop`, `TenLopHoc`, `GiaoVien`, `LichHoc`, `HocPhi`, `NgayBatDau`, `NgayKetThuc`,`PhongHoc`) VALUES ($MaLop,$TenLopHoc,$GiaoVien,$LichHoc,$HocPhi,$NgayBatDau,$NgayKetThuc,$PhongHoc)";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Them thanh cong.";
        header("Location:index.php");
        exit();
    } else {
        echo "Them that bai.";
    }
}
// for admin
function editUser($MaLop, $TenLopHoc, $GiaoVien, $LichHoc, $HocPhi, $NgayBatDau, $NgayKetThuc, $PhongHoc)
{
    global $conn;
    $sql = "UPDATE class SET `MaLop`='$MaLop', `TenLopHoc`='$TenLopHoc', `GiaoVien`='$GiaoVien',`LichHoc`='$LichHoc',`HocPhi`='$HocPhi',`NgayBatDau`='$NgayBatDau',`NgayKetThuc`='$NgayKetThuc',`PhongHoc`='$PhongHoc' where `MaLop` = '$MaLop' ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Sua thanh cong.";
        header("Location:index.php");
        exit();
    } else {
        echo "Sua that bai.";
    }
}
