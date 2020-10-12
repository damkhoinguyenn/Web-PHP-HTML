<?php
    // kiểm tra
    $errors = array();
    $email = $_POST['username'];
    $password = $_POST['password'];
	
    if (empty($errors)){
        // kết nối database
        $conn = mysqli_connect('localhost','root','','project04');
        if(!$conn){
            die('Khong the ket noi');
        }
        // kiểm tra theo email và password
        $sql = "SELECT * FROM `users` WHERE `email`";
        // echo $sql;
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $row = mysqli_fetch_assoc($result);
            // print_r($row);
            $password_hash = $row['password'];
            // echo $password_hash;
            if(password_verify($password,$password_hash)){
               echo "OK, khớp.";
            }else{
                echo "Chưa khớp";
            }
        }else{
            echo ".....";
        }

    }else{
        // Co loi, hien thi lai loi cho nguoi dung biet
        echo "Co loi nhap lieu ...";
    }
?>
