<?php
include("include/header-logo.php");
include("include/connection.php");
// include("include/functions.php");

if (isset($_POST["btnLogin"])) {
	$Email = $_POST["txtEmail"];
	$Password = $_POST["txtPassword"];
	// làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
	$Email = strip_tags($Email);
	$Email = addslashes($Email);
	$Password = strip_tags($Password);
	$Password = addslashes($Password);
	if ("SELECT * FROM `users` WHERE Email = '$Email' and Password = '$Password'") {
		$sql = "SELECT * FROM `users` WHERE Email = '$Email' and Password = '$Password'";
		$result = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($result);
		if ($num_rows == 0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		} else {
			//lưu tên đăng nhập vào session 
			$_SESSION['FullName'] = $FullName;
			//chuyển hướng tới trang-truong-cho-sinh-vien.php sau này sửa thành trang cho cựu sinh viên
			header('Location: trang-truong-cho-cuu-sinh-vien.php');
		}
	} elseif ("SELECT * FROM `admin` WHERE Email = '$Email' and Password = '$Password'") {
		$sql = "SELECT * FROM `admin` WHERE Email = '$Email' and Password = '$Password'";
		$result = mysqli_query($conn, $sql);
		$num_rows = mysqli_num_rows($result);
		if ($num_rows == 0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		} else {
			//lưu tên đăng nhập vào session 
			$_SESSION['FullName'] = $FullName;
			//chuyển hướng tới index.php
			header('Location: index.php');
		}
	}
}
?>

<div class="container">
	<div class="row">
		<div class="col bg">
		</div>

		<div class="col bg">
			<form action="" method="POST" class="was-validated">
				<h1 class="logins"><span style="color:blue">L</span><span style="color:red">O</span><span style="color:yellow">G</span><span style="color:green">I</span><span style="color:violet">N</span></h1>

				<div class="form-group" style="margin-top:25px">
					<label for="txtEmail">Email đăng nhập</label>
					<input class="form-control" type="text" name="txtEmail" id="txtEmail" placeholder="tài khoản đăng nhập" required="" ng-model="Username">
					<div class="valid-feedback">Nhập thành công.</div>
					<div class="invalid-feedback">Hãy điền đẩy đủ thông tin.</div>
				</div>

				<div class="form-group">
					<label for="txtPassword">Mật khẩu</label>
					<input class="form-control" type="password" name="txtPassword" id="txtPassword" placeholder="********" required="" ng-model="Password">
					<div class="valid-feedback">Nhập thành công.</div>
					<div class="invalid-feedback">Hãy điền đẩy đủ thông tin.</div>
				</div>

				<div class="form-group">
					<input type="submit" class="form-control btn btn-primary" value="Đăng nhập" name="btnLogin" id="btnLogin" aria-describedby="emailHelpId">
				</div>

				<div>
					<p style="color:#111">
						<!-- sửa thành trang tạo tài khoản khi có -->
						Bạn chưa có tài khoản? <a href="#" class="">Gửi yêu cầu</a> tạo tài khoản mới
					</p>
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