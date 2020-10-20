<?php
// session_start();
include("../include/header/headerAdmin.php");

<<<<<<< HEAD
if (isset($_POST["btnLogin"])) {
	$Email = $_POST["txtEmail"];
	$Password = $_POST["txtPassword"];
	// làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
	$Email = strip_tags($Email);
	$Email = addslashes($Email);
	$Password = strip_tags($Password);
	$Password = addslashes($Password);
//<<<<<<< Updated upstream:3.PROJECT/admin/login.php
	// $errors = array();
	// if (empty($errors)) {
	//     require("include/connection.php");
	//     $sql = "SELECT * FROM `admin` WHERE Email = '$Email'";
	//     $result = mysqli_query($conn,$sql);
	//     if(mysqli_num_rows($result)>0){
	//         $row = mysqli_fetch_assoc($result);
	//         if(password_verify($Password, $row['Password']))
	//         {
	//             session_start();
	//             $_SESSION['Email'] = $Email;
	//             header("Location:index.php");
	//             exit();
	//         }else{
	//             echo "Mat khau ko chinh xac";
	//         }
	//     }else{
	//         echo "Ko ton tai Tai khoan hoac Tai khoan chua duoc kich hoat";
	//     }

	//     }else{
	//         echo "Hien thi loi";
	// }
	include("../include/connection.php");

//>>>>>>> Stashed changes:3.PROJECT/login.php
	$sql = "SELECT * FROM `admin` WHERE Email = '$Email' and Password = '$Password'";
	$result = mysqli_query($conn, $sql);
	$num_rows = mysqli_num_rows($result);
	if ($num_rows == 0) {
		echo "tên đăng nhập hoặc mật khẩu không đúng !";
	} else {
		//lưu tên đăng nhập vào session 
		$_SESSION['Email'] = $Email;
		//chuyển hướng tới index.php
		header('Location: index.php');
	}
}
=======
// if (isset($_POST["btnLogin"])) {
// 	$Email = $_POST["txtEmail"];
// 	$Password = $_POST["txtPassword"];
// 	// làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
// 	$Email = strip_tags($Email);
// 	$Email = addslashes($Email);
// 	$Password = strip_tags($Password);
// 	$Password = addslashes($Password);
// 	include("../include/connection.php");
// 	$sql = "SELECT * FROM `admin` WHERE Email = '$Email' and Password = '$Password'";
// 	$result = mysqli_query($conn, $sql);
// 	$num_rows = mysqli_num_rows($result);
// 	if ($num_rows == 0) {
// 		echo "Tên đăng nhập hoặc mật khẩu không đúng !";
// 	} else {
// 		$_SESSION['Email'] = $Email;
// 		header('Location: index.php');
// 	}
// }
>>>>>>> 82d9488cdffdfbe04782ae2f5b12cf34551fba5b
?>

<div class="container">
	<div class="row">
		<div class="col bg">
		</div>

		<div class="col bg">
			<form action="operation/login.php" method="POST">
				<h1 class="logins"><span style="color:blue">L</span><span style="color:red">O</span><span style="color:yellow">G</span><span style="color:green">I</span><span style="color:violet">N</span></h1>

				<!-- <div class="form-group">
					<label for="txtFullName">Full Name</label>
					<input class="form-control" type="text" name="txtFullName" id="txtFullName" placeholder="Tên đăng nhập"" required="">
				</div> -->

				<div class=" form-group" style="margin-top:25px">
					<label for="txtEmail">Email</label>
					<input class="form-control" type="text" name="txtEmail" id="txtEmail" placeholder="tài khoản đăng nhập" required="">
				</div>

				<div class="form-group">
					<label for="txtPassword">Mật khẩu</label>
					<input class="form-control" type="password" name="txtPassword" id="txtPassword" placeholder="********" required="">
				</div>

				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" value="Đăng nhập" name="btnLogin" id="btnLogin">
				</div>

				<div>
					<!-- sửa thành trang tạo tài khoản khi có -->
					Bạn chưa có tài khoản? <a href="#" class="">Gửi yêu cầu</a> tạo tài khoản mới
				</div>

				<div>
					<!-- sửa thành trang đổi mật khẩu khi có -->
					<a href="#" class="">Bạn đã quên mật khẩu?</a>
				</div>

			</form>
		</div>

		<div class="col bg">
		</div>

	</div>
</div>

<?php
include("../include/footer/footerAdmin.php");
?>