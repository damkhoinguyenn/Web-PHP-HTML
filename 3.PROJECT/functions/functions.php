<?php
function getAllClasses()
{
    global $conn;
    $sql = "SELECT * FROM class";
    $result = mysqli_query($conn, $sql);
    $class = mysqli_fetch_all($result);
    return $class;
}

function getOneClass($MaLop)
{
    global $conn;
    $sql = "SELECT * FROM class WHERE MaLop = '$MaLop'";
    $result = mysqli_query($conn, $sql);
    $class = mysqli_fetch_assoc($result);
    return $class;
}

function deleteClass($MaLop)
{
    global $conn;
    $sql = "DELETE FROM class WHERE MaLop = '$MaLop'";
    if (mysqli_query($conn, $sql))
        return TRUE;
    else
        return FALSE;
}
function addClass($MaLop, $TenLopHoc, $GiaoVien, $LichHoc, $HocPhi, $NgayBatDau, $NgayKetThuc, $PhongHoc)
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
function editClass($MaLop, $TenLopHoc, $GiaoVien, $LichHoc, $HocPhi, $NgayBatDau, $NgayKetThuc, $PhongHoc)
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
