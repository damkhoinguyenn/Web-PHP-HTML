<?php
    // Kiem tra
    $errors = array();
    $email = $_POST['txtEmail'];
	if (empty($email)) {
		$errors[] = 'You forgot to enter your email address.';
    }

    $password = $_POST['txtPassword'];
	
	if (empty($password)) {	
			$errors[] = 'Your two password did not match.';
	} 
    // Kiem tra Error:
    if (empty($errors)){
        // B1: Ket noi database Server;
        $conn = mysqli_connect('localhost','admin','abcabc','simpledb');
        if(!$conn){
            die('Khong the ket noi');
        }
        // B2: Khai bao cau truy van
        $sql = "SELECT * FROM users WHERE email='$email'";
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