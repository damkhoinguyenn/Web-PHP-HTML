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
	<?php
	include("include/header.php");
	?>
	<header>
	<nav class="navbar header">
			<div class="col-sm-8">
				<a class="navbar-brand" href="main.php">
					<img src="images/cse.jpg">
				</a>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-6 col-md-4">
						<a href="login.php">Login/<a href="register.php">Register?</a></a>
					</div>
					<div class="col-6 col-md-4">
						<a href="page.php"><img src="images/vi.jpg"></a>
						<a href="#"><img src="images/en.jpg"></a>
					</div>
				</div>
			</div>
		</nav>

		<div class="header">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
				<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="collapsibleNavId">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="main.php">Trang chủ <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giới thiệu</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">Logo khoa CNTT</a>
								<a class="dropdown-item" href="#">Lời chào mừng</a>
								<a class="dropdown-item" href="#">Tổ Chức</a>
								<a class="dropdown-item" href="#">Hợp tác liên kết</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Tuyển Sinh</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Đào tạo</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">Đào tạo đại học</a>
								<a class="dropdown-item" href="#">Đào tạo sau đại học</a>
								<a class="dropdown-item" href="#">Chuẩn Đầu Ra</a>
								<a class="dropdown-item" href="#">Định Hướng Nghề Nghiệp</a>
								<a class="dropdown-item" href="#">Mô hình đào tạo</a>
								<a class="dropdown-item" href="#">Đề Cương môn học</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nghiên cứu khoa học</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">Các đề tài,dự án</a>
								<a class="dropdown-item" href="#">Thông tin seminar</a>
								<a class="dropdown-item" href="#">Công trình công bố</a>
								<a class="dropdown-item" href="#">Các phòng thí nghiệm</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bộ Môn-Trung Tâm</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">CN Phần Mềm</a>
								<a class="dropdown-item" href="#">Hệ Thống Thông Tin</a>
								<a class="dropdown-item" href="#">Khoa Học Máy Tính</a>
								<a class="dropdown-item" href="#">Kỹ thuật Máy Tính & Mạng</a>
								<a class="dropdown-item" href="#">Toán Học</a>
								<a class="dropdown-item" href="#">Tin học và Kỹ thuật tính toán</a>
								<a class="dropdown-item" href="#">Trung tâm tin học</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sinh Viên</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">Tài liệu Sinh Viên</a>
								<a class="dropdown-item" href="#">Tổ tư vấn học tập</a>
								<a class="dropdown-item" href="#">Biểu mẫu ĐATN</a>
								<a class="dropdown-item" href="#">Luận Văn Tốt Nghiệp</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin tức</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">Sự Kiện</a>
								<a class="dropdown-item" href="#">CSE trên báo</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Thông báo</a>
							<div class="dropdown-menu" aria-labelledby="dropdownId">
								<a class="dropdown-item" href="#">Thông Báo</a>
								<a class="dropdown-item" href="#">TB đào tạo</a>
								<a class="dropdown-item" href="#">Nghiên cứu khoa học</a>
								<a class="dropdown-item" href="#">Tuyển dụng</a>
								<a class="dropdown-item" href="#">Học bổng</a>
								<a class="dropdown-item" href="#">Thông báo khác</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Liên hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

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

	<?php
	include("include/footer.php");
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>