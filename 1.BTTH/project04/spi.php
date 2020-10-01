<?php include('config.php'); ?>

<?php include('includes/public/registration_login.php'); ?>

<?php include('includes/all_functions.php'); ?>

<?php include('includes/public/head_section.php'); ?>


<title>LifeBlog | Home </title>

</head>
<body>

<div class="container">

<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/public/navbar.php'); ?>
<!-- // Navbar -->


<!-- Messages -->
	<?php include( ROOT_PATH . '/includes/public/messages.php'); ?>
<!-- // Messages -->

<!-- content -->
<div class="content">
	<h2 class="content-title">Phân tích SPI</h2>
	<hr>

    <form action="cal_spi.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                Chọn tệp:
                <input type="file" title="Upload excel file" name="excel_file" id="file-input" class="file-input" required="required">

                Chọn nguồn:
                <select name="places" id="sltPlaces">
                    <option value="none">--Chọn địa điểm --</option>
                    <option value="MocHoa">Mộc Hóa</option>
                    <option value="MyTho">Mỹ Tho</option>
                    <option value="BaTri">Ba Tri</option>
                    <option value="BacLieu">Bạc Liêu</option>
                    <option value="CaMau">Cà Mau</option>
                    <option value="Canglong">Càng Long</option>
                    <option value="Caolanh">Cao Lãnh</option>
                    <option value="Chaudoc">Châu Đốc</option>
                    <option value="Rachgia">Rạch Giá</option>
                    <option value="Soctrang">Sóc Trăng</option>
                    <option value="Cantho">Cần Thơ</option>
                    <option value="ViThanh">Vị Thanh</option>
                    <option value="Vinhlong">Vĩnh Long</option>
                </select>
            </div>
            <div class="col-md-4">
                <div class="scale-time">
                    Thời đoạn:<br>
                    <input type="radio" name="scaleTime" value="1" checked> 1 tháng<br>
                    <input type="radio" name="scaleTime" value="3"> 3 tháng<br>
                    <input type="radio" name="scaleTime" value="6"> 6 tháng<br>
                    <input type="radio" name="scaleTime" value="12"> 12 tháng

                </div>
                <input type="submit" value="Phân tích" id="btnAnalysis">
            </div>
        </div>
    </form>

    <div class="notification-are">
        
    </div>

</div>
<!-- // content -->


</div>
<!-- // container -->


<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/public/footer.php'); ?>
<!-- // Footer -->
