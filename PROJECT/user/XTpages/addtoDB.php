<?php
require("../../include/func/connection.php");
require("../../include/func/functions.php");
if (isset($_POST['btnSend'])) {
    if (!empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST['']) && !empty($_POST[''])) {
        $FullName = $_POST[''];
        $Gender = $_POST[''];
        $Birthday = $_POST[''];
        $Ethnic = $_POST[''];
        $Relligion = $_POST[''];
        $Place = $_POST[''];
        $Place = $_POST[''];
        $Yeargra = $_POST[''];
        $Rank12 = $_POST[''];
        $Att12 = $_POST[''];
        $CMND = $_POST[''];
        $DataCMND = $_POST[''];
        $PlaceCMND = $_POST[''];
        $BornPlace = $_POST[''];
        $Year10 = $_POST[''];
        $CodeSchool10 = $_POST[''];
        $Year11 = $_POST[''];
        $CodeSchool11 = $_POST[''];
        $Year12 = $_POST[''];
        $CodeSchool12 = $_POST[''];
        $PlaceContact = $_POST[''];
        $PhoneStudents = $_POST[''];
        $PhoneParent = $_POST[''];

        $sql = "INSERT INTO `enrollment`( `FullName`, `Gender`, `Birthday`,'Ethnic','Relligion','Place','Yeargra','Rank12','Att12','CMND','DataCMND','PlaceCMND','BornPlace','Year10','CodeSchool10','Year11','CodeSchool11','Year12','CodeSchool12','PlaceContact','PhoneStudents','PhoneParent') 
        VALUES ('$FullName','$Gender')";
        $result = mysqli_query($conn, $sql) or die();
        if ($result) {
            echo "form send successfully";
        } else {
            echo "form did not send successfully";
        }
    } else {
        echo "all fields required";
    }
}


// tạo bên trang DHB.php 1 đoạn code trên form là <form action="addtoDB.php"method="post">
// tạo nút Send với class là btn Send để đổ dữ liệu lên DB
// tạo xong form sửa lại tên class ứng với từng trường để đổ về DB