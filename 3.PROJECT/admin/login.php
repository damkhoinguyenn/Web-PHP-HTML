<?php
include("../include/header/headerAdmin.php");
?>

<div class="container">
	<div class="row">
		<div class="col bg">
		</div>

		<div class="col bg">
			<form action="operation/login.php" method="post">
				<h1 class="logins"><span style="color:blue">L</span><span style="color:red">O</span><span style="color:yellow">G</span><span style="color:green">I</span><span style="color:violet">N</span></h1>

				<?php
				// if (isset($_GET['error'])) {
				// 	if ($_GET['error'] == 'emptyfields') {
				// 		echo '<p class="signuperror">Fill in all foelds !</p>';
				// 	} elseif ($_GET['error'] == 'wrongpassword') {
				// 		echo '<p class="signuperror">Wrong Password !</p>';
				// 	}
				// }
				?>
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