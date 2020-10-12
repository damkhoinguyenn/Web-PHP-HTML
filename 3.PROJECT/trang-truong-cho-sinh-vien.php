<header>
	<?php
	include("include/header.php");
	?>
</header>

<body>
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
	<div class="card-columns">
		<div class="card">
			<img src="images/cse-hallthumb.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title that wraps to a new line</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		</div>
		<div class="card p-3">
			<blockquote class="blockquote mb-0 card-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<footer class="blockquote-footer">
					<small class="text-muted">
						Someone famous in <cite title="Source Title">Source Title</cite>
					</small>
				</footer>
			</blockquote>
		</div>
		<div class="card">
			<img src="..." class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card bg-primary text-white text-center p-3">
			<blockquote class="blockquote mb-0">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
				<footer class="blockquote-footer text-white">
					<small>
						Someone famous in <cite title="Source Title">Source Title</cite>
					</small>
				</footer>
			</blockquote>
		</div>
		<div class="card text-center">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
		<div class="card">
			<img src="..." class="card-img-top" alt="...">
		</div>
		<div class="card p-3 text-right">
			<blockquote class="blockquote mb-0">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<footer class="blockquote-footer">
					<small class="text-muted">
						Someone famous in <cite title="Source Title">Source Title</cite>
					</small>
				</footer>
			</blockquote>
		</div>
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
				<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			</div>
		</div>
	</div>
</body>

<footer>
	<?php
	include("include/footer.php");
	?>
</footer>