<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<title>Khoa Công Nghệ Thông Tin</title>
</head>

<body>

	<header>
		<?php
		include("include/header.php");
		?>
	</header>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form action="process-login.php" method="POST" class="was-validated">

						<div class="form-group" style="margin-top:25px">
							<label for="username">Email đăng nhập</label>
							<input class="form-control" type="text" name="username" id="username" placeholder="tài khoản đăng nhập" required="" ng-model="Username">
							<div class="valid-feedback">Nhập thành công.</div>
							<div class="invalid-feedback">Hãy điền đẩy đủ thông tin.</div>
						</div>

						<div class="form-group">
							<label for="password">Mật khẩu</label>
							<input class="form-control" type="password" name="password" id="password" placeholder="********" required="" ng-model="Password">
							<div class="valid-feedback">Nhập thành công.</div>
							<div class="invalid-feedback">Hãy điền đẩy đủ thông tin.</div>
						</div>

						<div class="form-group">
							<input type="submit" class="form-control btn btn-primary" value="Đăng nhập" name="txtLogin" id="txtLogin" aria-describedby="emailHelpId">
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
			</div>
		</div>
	</body>

	<footer>
		<?php
		include("include/footer.php");
		?>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>