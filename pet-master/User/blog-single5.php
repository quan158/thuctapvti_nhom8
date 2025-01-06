<?php
session_start();
            include("control.php");
          $get_data = new data_user();
if (isset($_SESSION['user'])) {
  $count = $get_data->count_Cart($_SESSION['user']);
}else{
  if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
  }else{
    $count = '0';
  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Kingdom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Pet Kingdom</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Trang chủ</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cửa hàng</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Cửa hàng</a>
              	<a class="dropdown-item" href="wishlist.php">Danh sách yêu thích</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">Về chúng tôi</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Tin tức</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Liên hệ</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[<?php echo $count;?>]</a></li>
            <li class="nav-item dropdown">
              <?php if (isset($_SESSION["user"])) {
              ?>
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user'] ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="taikhoan.php">Thông tin tài khoản</a>
              	<a class="dropdown-item" href="logout.php">Đăng xuất</a>
              </div>
              <?php } else { ?>
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="sign-up.php">Đăng ký</a>
              	<a class="dropdown-item" href="sign-in.php">Đăng nhập</a>
              </div>
              <?php } ?>
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/banner2.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Tin tức</span></p>
            <h1 class="mb-0 bread">Tin tức</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg" style="background-color: #f9f9f9; padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 ftco-animate">
        <h2 class="mb-3" style="color: #333; font-size: 32px; font-weight: bold; text-align: center;">Chuột Hamster – Người Bạn Nhỏ Dễ Thương Và Năng Động</h2>
        <p style="font-size: 18px; line-height: 1.8; color: #555; text-align: justify;">Chuột Hamster là một trong những loài vật nuôi phổ biến nhất trong các gia đình hiện nay, đặc biệt với những người sống trong không gian nhỏ như căn hộ hay chung cư. Với ngoại hình nhỏ nhắn, bộ lông mềm mại và đôi mắt to tròn, Hamster dễ dàng chiếm được cảm tình của nhiều người yêu thích thú cưng. Không chỉ dễ thương, chúng còn rất năng động, thích khám phá và hoạt động liên tục trong chiếc lồng của mình.</p>
        
        <!-- Hình ảnh minh họa -->
        <div style="text-align: center; margin: 30px 0;">
          <img src="images/chuotchuot.jpg" alt="Chuột Hamster" class="img-fluid" style="max-width: 100%; width: 800px; height: auto; border-radius: 10px; box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
        </div>

        <p style="font-size: 18px; line-height: 1.8; color: #555; text-align: justify;">Hamster có nhiều loài với đủ loại màu sắc và kích thước khác nhau, từ Hamster lùn Campbell đến Hamster lông dài Syrian. Mỗi giống đều có những đặc điểm riêng biệt, nhưng nhìn chung, chúng đều rất dễ chăm sóc và có thói quen sống độc lập. Chuột Hamster thường được nuôi trong lồng với các đồ chơi như bánh xe chạy, đường ống, và các vật dụng để leo trèo. Chúng có thói quen dự trữ thức ăn trong các ngăn nhỏ trong lồng, khiến hành vi của chúng trở nên thú vị và đáng yêu khi quan sát.</p>

        <h4 style="color: #333; font-size: 24px; margin-top: 30px; font-weight: bold;">Ưu điểm khi nuôi chuột Hamster:</h4>
        <p style="font-size: 18px; line-height: 1.8; color: #555; text-align: justify;">Nuôi chuột Hamster rất phù hợp cho những người bận rộn hoặc không có nhiều không gian. Chúng là loài vật nhỏ, không cần nhiều diện tích và cũng không đòi hỏi quá nhiều sự chăm sóc. Hamster dễ nuôi và chi phí nuôi không quá cao. Chúng không cần được dắt đi dạo hay tắm rửa thường xuyên như chó mèo, và có thể tự giải trí với các đồ chơi trong lồng. Hamster cũng là loài vật sạch sẽ, ít khi gây mùi hôi nếu được chăm sóc đúng cách. Ngoài ra, Hamster có vòng đời ngắn (thường từ 2-3 năm), giúp chủ nhân không phải cam kết nuôi dài hạn như các loài vật khác.</p>

        <h4 style="color: #333; font-size: 24px; margin-top: 30px; font-weight: bold;">Nhược điểm khi nuôi chuột Hamster:</h4>
        <p style="font-size: 18px; line-height: 1.8; color: #555; text-align: justify;">Mặc dù chuột Hamster có nhiều ưu điểm, nhưng cũng có một số nhược điểm cần lưu ý. Chúng có vòng đời ngắn, điều này có thể khiến người nuôi cảm thấy buồn khi phải chia tay sớm với thú cưng của mình. Hamster cũng là loài vật khá nhạy cảm, chúng dễ bị căng thẳng nếu không được chăm sóc đúng cách hoặc bị tác động từ môi trường xung quanh. Vì là loài vật nhỏ, chúng dễ bị tổn thương nếu bị trẻ em xử lý thô bạo. Ngoài ra, Hamster có thói quen hoạt động về đêm, có thể gây tiếng ồn khi chúng chạy trên bánh xe hoặc leo trèo trong lồng vào ban đêm, điều này có thể làm phiền giấc ngủ của người nuôi.</p>

        <p style="font-size: 18px; line-height: 1.8; color: #555; text-align: justify;">Dù có một vài nhược điểm nhỏ, chuột Hamster vẫn là một trong những lựa chọn tuyệt vời cho những ai yêu thích sự nhỏ nhắn, dễ thương và năng động. Chúng không chỉ là người bạn nhỏ đáng yêu mà còn mang lại niềm vui, giúp xua tan căng thẳng và thêm phần sinh động cho cuộc sống hàng ngày.</p>
            


            
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Tìm Kiếm...">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading">Danh Mục</h3>
              <ul class="categories">
                <li><a href="#">Chó</a></li>
                <li><a href="#">Mèo </a></li>

                <li><a href="#">Chim </a></li>
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading">Tin tức mới nhất</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/chocho.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="blog-single.php">Chó – loài vật trung thành và thân thiện, từ lâu đã trở thành người bạn gắn bó với con người</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> 30/7/2024</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/meomeo.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="blog-single.php">Mèo – loài vật thanh lịch và độc lập, được yêu thích bởi sự mềm mại và bí ẩn</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> 30/7/2024</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/chimchim.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="blog-single.php">Chim – biểu tượng của tự do và sự thanh thoát, mang lại âm thanh du dương từ những bản nhạc tự nhiên</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> 30/7/2024</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>


        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Pet Kingdom</h2>
              <p>Sản phẩm tươi sạch</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Danh mục</h2>
              <ul class="list-unstyled">
                <li><a href="shop.php" class="py-2 d-block">Cửa hàng</a></li>
                <li><a href="about.php" class="py-2 d-block">Về chúng tôi</a></li>
                <li><a href="blog.php" class="py-2 d-block">Tin tức</a></li>
                <li><a href="contact.php" class="py-2 d-block">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Hỗ trợ</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="#" class="py-2 d-block">Thông tin vận chuyển</a></li>
	                <li><a href="#" class="py-2 d-block">Trả hàng &amp; Hoàn tiền</a></li>
	                <li><a href="#" class="py-2 d-block">Điểu khoản &amp; Quy định</a></li>
	                <li><a href="#" class="py-2 d-block">Chính sách bảo mật</a></li>
	              </ul>
	           
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Bạn có thắc mắc?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">218, Minh Khai, Hai Bà Trưng, Hà Nội</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+0369852147</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">quan@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>