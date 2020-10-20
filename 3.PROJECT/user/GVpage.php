<<<<<<< HEAD
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
	<div class="container">
		<div class="col-2">
			<div class="row">
				<a href="" class=" text-white">Trường ĐH Thủy Lợi-TLU</a>

			</div>
		</div>
		<div class="col-6">
			<div class="row">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item">
						<span class="text-white">Ngôn ngữ:</span>
						<a href="GVpage.php"><img src="../images/vi.jpg"></a>
						<a href="#"><img src="../images/en.jpg"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col">
			<div class="row">
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
					<button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Tìm kiếm</button>
				</form>
			</div>
		</div>
	</div>
</nav>
<!-- <a href="SVpage.php"><img src="../images/vi.jpg"></a> -->
<!-- <a href="#"><img src="../images/en.jpg"></a> -->
<div class="container">
	<div class="row">
		<div class="col-12">
			<?php
			include("../include/headergv.php");
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

<div class="container">
	<div class="row">
		<div class="col">
			<button type="button" class="btn btn-primary btn-lg btn-block">Tin tức</button>
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="../images/chaok62.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
						<a href="#" class="stretched-link">Trường ĐH Thủy Lợi chào đón tân sinh viên khóa K62</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col">
			<button type="button" class="btn btn-primary btn-lg btn-block">Sự kiện</button>
			<div class="card mb-3" style="max-width: 540px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="../images/CSE logo blue.jpg" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
						<a href="#" class="stretched-link">Thông báo tổ chức thi và cấp chứng chỉ tiếng Anh bậc 2, 3, 4, 5</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="500" height="700" src="https://www.youtube.com/embed/g2bFaOrbESE" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>







<?php
include("../include/footergv.php");
=======
<?php
include("../include/header/headerGV.php");
?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 ">
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
                        <img src="images/banner.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/bannertq4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/hoi-thao.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/inra1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/sanh-t54.jpg" class="d-block w-100" alt="...">
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
        <div class="col">

            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/g2bFaOrbESE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<?php
include("../include/footer/footerGV.php");
>>>>>>> 82d9488cdffdfbe04782ae2f5b12cf34551fba5b
?>