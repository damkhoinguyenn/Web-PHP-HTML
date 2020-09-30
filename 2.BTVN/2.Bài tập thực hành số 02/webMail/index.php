<?php
require_once "contact.php";
$m = new sendMail();
 
if( isset($_POST['submit']) ) {
    $hoten = trim( strip_tags( $_POST['hoten'] ) );
    $email = trim( strip_tags( $_POST['email'] ));
    $tieude = trim( strip_tags( $_POST['tieude'] ) );
    $thongdiep = trim( strip_tags( $_POST['thongdiep'] ) );
 
    //điền email nhận tại đây
    $to = "web2code2vn@gmail.com";
    $tieudethu = "Liên hệ từ $hoten";           
    $noidungthu = "
    <strong>Họ tên: </strong> $hoten<br/>
    <strong>Email: </strong> $email<br/>
    <strong>Tiêu đề: </strong> $tieude<br/>
    <strong>Thông điệp: </strong> $thongdiep<br/>
    <i>Thư được gửi từ liên hệ của website https://cse.tlu.edu.vn</i>";
     
    //dùng mail test, đừng dùng mail chính thức
    $from = "web2code2vn@gmail.com";
 
    //pass email gmail
    $p = "thay_mat_khau_cua_ban_vao_day";
    $m -> sendMailFromLocalhost($to, $from, $tennguoigui="Web2Code2Vn", $tieudethu, $noidungthu, $from, $p, $error);
    if( $error != '' ) {
        $loi['guimail'] = "Gửi mail không thành công";
    }else {
        $thanhcong['guimail'] = "Gửi mail thành công";
    }
}
?>
 
<!DOCTYPE html>
<head>
<title>Web2Code2Vn | Send email with PHP from localhost</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="heading">
        <h3>LIÊN HỆ</h3>
        <hr>
    </div>
        <h3>Thông tin liên hệ:</h3>
         
        <?php echo isset($loi['guimail']) ? "<div class='loi'>".$loi['guimail']."</div>" : '' ?>
        <?php echo isset($thanhcong['guimail']) ? "<div class='thanhcong'>".$thanhcong['guimail']."</div>" : '' ?>    
         
        <div class="row">  
            <div class="col-xs-12 col-sm-6 col-md-6">
                <form id="form" action="" method="POST">         
                    <input type="text" id="hoten" name="hoten"  class="form-control" placeholder="Tên của bạn" >
                    <br>                
                    <input type="email" name="email" size="40" class="form-control" placeholder="Email">
                    <br>                
                    <input type="text" name="tieude" size="40" class="form-control" placeholder="Tiêu đề">
                    <br>                             
                    <textarea name="thongdiep" cols="40" rows="5" class="form-control" placeholder="Thông điệp"></textarea>        
                    <br>
                    <input type="submit" name="submit" value="Gửi" class="btn btn-primary">
                </form>
            </div>     
        </div>
    </div>
</body>
</html>