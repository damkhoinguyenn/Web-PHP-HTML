<?php
session_start();
if (!isset($_SESSION['Email'])) {
    header("Location: loginteacher.php");
    exit();
}
?>
<!-- headerlogo -->
<div class="container hdl">
	<div class="row">
		<div class="col">
			<nav class="navbar navbar-expand-lg navbar-light bg-primary">
				<div class="col ">
					<a href="GVpage.php" class=" text-white">Trường ĐH Thủy Lợi-TLU</a>
				</div>
				<div class="col-5">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<span class="text-white">Ngôn ngữ:</span>
							<a href="GVpage.php"><img src="../images/vi.jpg"></a>
							<a href="#"><img src="../images/en.jpg"></a>
						</li>
					</ul>
				</div>
				<div class="col-4">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
						<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Tìm kiếm</button>
					</form>
				</div>
		</div>
		</nav>
	</div>
</div>
</div>
<!--// headerlogo -->
<!-- <a href="SVpage.php"><img src="../images/vi.jpg"></a> -->
<!-- <a href="#"><img src="../images/en.jpg"></a> -->

<!-- Font -->
<script src="https://kit.fontawesome.com/b83b93c2d0.js" crossorigin="anonymous"></script>
<!-- anh chay -->
<div class="container ">
	<div class="row">
		<div class="col-12">
			<?php
			include("../include/header/headergv.php");
			?>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img height="300" src="../images/ts.jpg" class=" d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img height="300" src="../images/maxresdefault.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img height="300" src="../images/dai-hoc-thuy-loi.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img height="300" src="../images/tuyensinh.jpg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img height="300" src="../images/sanh-t54.jpg" class="d-block w-100" alt="...">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- //anh chay -->


<!-- topic -->
<div class="container topics">
	<div class="row">
		<div class="col">
			<button type="button" class="btn btn-primary btn-lg btn-block">Tin tức</button>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/chaok62.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Trường ĐH Thủy Lợi chào đón tân sinh viên khóa K62</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card " style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/tuyensinh.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Chùm ảnh: Tân sinh viên hào hứng trong ngày nhập học đầu tiên</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/inra1.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Hội thảo tuyển dụng Kỹ sư làm việc tại Nhật Bản</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/thuk.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Chàng trai thủ khoa chọn ĐH Thủy lợi từ hơn 1 năm trước</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col">
			<button type="button" class="btn btn-primary btn-lg btn-block">Sự kiện</button>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/CSE logo blue.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Thông báo tổ chức thi và cấp chứng chỉ tiếng Anh bậc 2, 3, 4, 5</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/CSE logo blue.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Đăng ký tham gia Cuộc thi “Sinh viên Thủy lợi với ý tưởng khởi nghiệp” năm 2021</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/CSE logo blue.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Thông báo Tuyển sinh Chương trình Meister School khóa 19</a>
						</div>
					</div>
				</div>
			</div>
			<div class="card" style="height:120px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img width="10" height="100" src="../images/CSE logo blue.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<a href="#" class="stretched-link">Công ty TNHH Mosaic Việt Nam tuyển dụng nhân viên kinh doanh</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="500" height="700" src="https://www.youtube.com/embed/g2bFaOrbESE" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="title">
				<div class="section topics">
					<h2 class="section-tittle">Phân hiệu-Khoa</h2>
					<ul class="list-unstyled">
						<li><a href="#">Khoa Công trình</a></li>
						<li><a href="#">Khoa Kỹ thuật tài nguyên nước</a></li>
						<li><a href="SVpage.php">Khoa Công nghệ thông tin</a></li>
						<li><a href="#">Khoa Cơ khí</a></li>
						<li><a href="#">Khoa Điện - Điện tử</a></li>
						<li><a href="#">Khoa Kinh tế và Quản lý</a></li>
						<li><a href="#">Khoa Hóa và Môi trường</a></li>
						<li><a href="#">Trung tâm Đào tạo quốc tế</a></li>
						<li><a href="#">Phân hiệu Đại học Thủy lợi</a></li>
						<li><a href="#">Viện Đào tạo và Khoa học ứng dụng Miền Trung</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- //topic -->


<!-- content1 -->
<div class="container">
	<div class="row bg-light">
		<div class="col-4">
			<div class="card " style="width: 20rem;">
				<img height="180" src="../images/TuyenSinhDH.jpg" class="card-img" alt="...">
				<a href="XTpages/XTHB.php" class="stretched-link"></a>
			</div>
		</div>
		<div class="col-4">
			<div class="card " style="width: 20rem;">
				<img height="180" src="../images/TuyenSinhThacSi.jpg" class="card-img" alt="...">
				<a href="#" class="stretched-link"></a>
			</div>
		</div>
		<div class="col-4">
			<div class="card " style="width: 20rem;">
				<img height="180" src="../images/TuyenSinhTS.jpg" class="card-img" alt="...">
				<a href="#" class="stretched-link"></a>
			</div>
		</div>
	</div>
</div>
<!-- //content1 -->

<div class="container nd">
	<div class="row">
		<div class="col-md-12">
			<div class="row no-gutters bg-light position-relative">
				<div class="col-md-6 mb-md-0 p-md-4">
					<img src="..." class="w-100" alt="...">
				</div>
				<div class="col-md-6 position-static p-4 pl-md-0">
					<h5 class="mt-0">Columns with stretched link</h5>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
					<a href="#" class="stretched-link">Go somewhere</a>
				</div>
			</div>
			<div class="row no-gutters bg-light position-relative">
				<div class="col-md-6 mb-md-0 p-md-4">
					<img src="..." class="w-100" alt="...">
				</div>
				<div class="col-md-6 position-static p-4 pl-md-0">
					<h5 class="mt-0">Columns with stretched link</h5>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
					<a href="#" class="stretched-link">Go somewhere</a>
				</div>
			</div>
			<div class="row no-gutters bg-light position-relative">
				<div class="col-md-6 mb-md-0 p-md-4">
					<img src="..." class="w-100" alt="...">
				</div>
				<div class="col-md-6 position-static p-4 pl-md-0">
					<h5 class="mt-0">Columns with stretched link</h5>
					<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
					<a href="#" class="stretched-link">Go somewhere</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- content2 -->
<div class="container ts">
	<div class="row bg-warning">
		<div class="col-4">
			<div class="card " style="width: 20rem;">
				<img height="200" src="../images/CurentStudent.jpg" class="card-img" alt="...">
				<a href="XTHBpage.php" class="stretched-link"></a>
				<div class="card-body bg-success">

					<a href="#" class="btn btn-warning stretched-link">Tìm hiểu</a>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card " style="width: 20rem;">
				<img height="200" src="../images/FutureStudent.jpg" class="card-img" alt="...">
				<a href="#" class="stretched-link"></a>
				<div class="card-body bg-success">

					<a href="#" class="btn btn-warning stretched-link">Tìm hiểu</a>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card " style="width: 20rem;">
				<img height="200" src="../images/Alumi.jpg" class="card-img" alt="...">
				<a href="#" class="stretched-link"></a>
				<div class="card-body bg-success ">
					<a href="#" class="btn btn-warning stretched-link">Tìm hiểu</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //content2 -->

<!-- footer -->
<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-md-8 bg-primary text-left">
				<h4>
					<span>© 2020 TRƯỜNG ĐẠI HỌC THỦY LỢI</span>
				</h4>
			</div>
			<div class="col-md-4 bg-primary text-right">
				<a href="https://www.facebook.com/daihocthuyloi1959/?fref=ts">
					<img width="30px" height="30px" src="../images/fb-icon.png" alt="">
				</a>
				<a href="https://www.youtube.com/user/daihocthuyloi">
					<img width="30px" height="30px" src="../images/ytb-icon.png" alt="">
				</a>
				<a href="https://twitter.com/Daihocthuyloihn">
					<img width="30px" height="30px" src="../images/twitter-icon.png" alt="">
				</a>
			</div>
		</div>
	</div>
</div>
<?php
include("../include/footer/footerGV.php");
?>