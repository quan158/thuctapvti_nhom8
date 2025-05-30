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
    <style>
      /* Tùy chỉnh cho phần About */
.ftco-section {
    padding: 60px 0;
}

.bg-light {
    background-color: #f4f4f4;
}

.img-2 {
    background-size: cover;
    background-position: center;
    height: 800px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px; /* Dịch ảnh xuống 20px */
}

.heading-section-bold h1 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #2980b9;
}

.wrap-about {
    padding-left: 30px;
    padding-right: 30px;
}

.wrap-about p {
    font-size: 1.2rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}

.wrap-about .btn-primary {
    background-color: #2980b9;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
}

.wrap-about .btn-primary:hover {
    background-color: #1a67a2;
}

/* Hiệu ứng hover cho ảnh */
.img-2:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}

/* Tùy chỉnh cho phần dịch vụ */
.ftco-services {
    padding: 60px 0;
}

.service-item {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    padding: 30px;
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

.service-item:hover {
    transform: translateY(-10px);
}

.service-item .icon {
    margin-bottom: 20px;
}

.service-item img {
    width: 80px;
    height: 80px;
    object-fit: contain;
}

.service-item h3 {
    font-size: 1.5rem;
    color: #2980b9;
    margin-bottom: 10px;
}

.service-item p {
    font-size: 1rem;
    color: #555;
}

h2 {
    font-size: 2.5rem;
    font-weight: bold;
    color: #2980b9;
    margin-bottom: 30px;
}

.ftco-section .container {
    max-width: 1200px;
}

    </style>
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
	          <li class="nav-item"><a href="shop.php" class="nav-link">Cửa hàng</a></li>
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Về chúng tôi</span></p>
            <h1 class="mb-0 bread">Về chúng tôi</h1>
          </div>
        </div>
      </div>
    </div>
<br>   
<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <!-- Phần hình ảnh -->
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/cutemeo.jpg);">
                <!-- Thay thế video bằng ảnh ở đây -->
            </div>

            <!-- Phần văn bản -->
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h1 class="mb-4">Chào Mừng Bạn Đến Với Pet Kingdom</h1>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>Chào mừng bạn đến với <strong>Pet Kingdom</strong>, nơi bạn có thể tìm thấy những người bạn đồng hành đáng yêu và trung thành nhất cho gia đình mình.</p>
                    <p>Chúng tôi cung cấp đa dạng các loại thú cưng từ chó, mèo, thỏ, chim đến cá, tất cả đều khỏe mạnh và đã được chăm sóc chu đáo. Chúng tôi cam kết cung cấp cho bạn những loài thú cưng khỏe mạnh, dễ thương và hoàn hảo cho ngôi nhà của bạn.</p>
                    <p>Hãy đến và khám phá Pet Kingdom, nơi cung cấp tất cả những gì bạn cần cho thú cưng của mình, từ thức ăn, đồ chơi đến các dịch vụ chăm sóc thú cưng chuyên nghiệp.</p>
                    <p><a href="shop.php" class="btn btn-primary">Mua Ngay</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

		
<section class="ftco-section ftco-services bg-light" id="section-services">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4">Dịch Vụ Chăm Sóc Thú Cưng Tại Pet Kingdom</h2>
                <p class="mb-5">Chúng tôi cung cấp những dịch vụ chăm sóc thú cưng toàn diện, giúp bạn và thú cưng có những trải nghiệm tuyệt vời nhất.</p>
                <div class="row">
                    <!-- Dịch Vụ 1 -->
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="service-item text-center">
                            <div class="icon">
                                <img src="images/cattia.jpg" alt="Grooming" class="img-fluid">
                            </div>
                            <h3>Chăm Sóc Lông</h3>
                            <p>Chúng tôi cung cấp dịch vụ chăm sóc lông cho thú cưng, giúp thú cưng của bạn luôn sạch sẽ và xinh đẹp.</p>
                        </div>
                    </div>

                    <!-- Dịch Vụ 2 -->
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="service-item text-center">
                            <div class="icon">
                                <img src="images/images.jpg" alt="Vet" class="img-fluid">
                            </div>
                            <h3>Thăm Khám Thú Cưng</h3>
                            <p>Đội ngũ bác sĩ chuyên nghiệp của chúng tôi luôn sẵn sàng thăm khám và chăm sóc sức khỏe cho thú cưng của bạn.</p>
                        </div>
                    </div>

                    <!-- Dịch Vụ 3 -->
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="service-item text-center">
                            <div class="icon">
                                <img src="images/dochoi.jpg" alt="Toys" class="img-fluid">
                            </div>
                            <h3>Đồ Chơi & Phụ Kiện</h3>
                            <p>Chúng tôi cung cấp các loại đồ chơi và phụ kiện cho thú cưng, giúp chúng luôn vui vẻ và năng động.</p>
                        </div>
                    </div>

                    <!-- Dịch Vụ 4 -->
                    <div class="col-md-3 d-flex justify-content-center">
                        <div class="service-item text-center">
                            <div class="icon">
                                <img src="images/huanluyen.jpg" alt="Training" class="img-fluid">
                            </div>
                            <h3>Huấn Luyện Thú Cưng</h3>
                            <p>Chúng tôi cung cấp các khóa huấn luyện thú cưng, giúp chúng phát triển kỹ năng và hành vi tốt hơn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
		
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Đánh giá</span>
            <h2 class="mb-4">Đánh giá của những khách hàng thân mến của chúng tôi</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">mấy bạn thỏ của shop rất đáng yêu</p>
                    <p class="name">Vũ Kiệt</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">hãy đến pet kingdom để có cho mình một bạn thú cưng .</p>
                    <p class="name">Mạc Thanh Bình</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">chất lượng dịch vụ 100%.</p>
                    <p class="name">Phí Văn Quân</p> 
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">cảm ơn shop đã cho mình một bạn chó dễ thương.</p>
                    <p class="name">Phan Đức</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">shop mười trên mười </p>
                    <p class="name">Tùng Dương</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Giao hàng miễn phí</h3>
                <span>Cho hoá đơn trên 2.000.000</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Luôn tươi</h3>
                <span>Đầy đủ bao bì</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Chất lượng cao</h3>
                <span>An toàn thực phẩm</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Hỗ trợ</h3>
                <span>Hỗ trợ 24/7</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

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