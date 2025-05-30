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
    /* Cấu trúc lưới cho sản phẩm và danh mục */
.ftco-section .container .row {
    display: flex;
    justify-content: flex-start; 
}

.product-category {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.product-category td {
    padding: 10px;
    border: 1px solid #ddd;
}

.product-category .category-item a {
    display: block;
    color: #000;
    text-decoration: none;
}

.product-category .category-item a:hover {
    background-color: #f4f4f4;
}

.product-category .active a {
    font-weight: bold;
    color: #fff;
    background-color: #007bff;
}

.search-container input {
    width: 100%;
    padding: 8px;
    margin-top: 10px;
    border: 1px solid #ccc;
}

/* Các kiểu dáng cho sản phẩm */
.product {
    margin-bottom: 30px;
}

.product .img-prod img {
    width: 100%;
    height: auto;
}

.product .text {
    padding: 10px;
}

.product .pricing .price-sale {
    font-weight: bold;
    color: #ff6a00;
}

/* Danh mục nằm bên trái */
.col-md-3 {
    max-width: 300px; /* Đặt chiều rộng danh mục sản phẩm bên trái */
}

.col-md-9 {
    width: 75%; /* Đặt chiều rộng cho phần sản phẩm bên phải */
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
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Sản phẩm</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <!-- Thanh tìm kiếm và danh mục -->
            <div class="col-md-3 mb-5">
                <div class="search-container">
                    <form method="POST">
                        <input type="text" name="query" placeholder="Tìm kiếm">
                        <input type="submit" name="search" id="" value="Tìm kiếm">
                    </form>
                    <?php
                    if(isset($_POST['search'])){
                      $search = $_POST['query'];
                      if(!empty($search)){
                        echo "<script>window.location=('shop.php?search=$search');</script>";
                      }
                    } ?>
                </div>
                <h3>DANH MỤC</h3>
                <table class="product-category">
                  <td><a href="shop.php">All</a></td>
                  <?php
                  // Lấy danh mục hiện tại từ URL hoặc mặc định là "All"
                  $current_cat = isset($_GET['cat']) ? $_GET['cat'] : 'All';

                  // Lấy danh sách danh mục từ cơ sở dữ liệu
                  $categories = $get_data->select_cat_list();

                  // Kiểm tra nếu có danh mục nào được tìm thấy
                  if ($categories->num_rows > 0) {
                      // Duyệt qua từng danh mục
                      while ($row = $categories->fetch_assoc()) {
                          $category_name = htmlspecialchars($row['name_cat']); // Xử lý dữ liệu đầu ra an toàn
                          echo "
                          <tr>
                              <td><a href=\"shop.php?cat=$category_name\">$category_name</a></td>
                          </tr>";
                      }
                  } else {
                      // Hiển thị thông báo nếu không tìm thấy danh mục nào
                      echo '<tr><td>Không tìm thấy danh mục</td></tr>';
                  }
                  ?>
              </table>

            </div>

            <!-- Sản phẩm hiển thị -->
            <div class="col-md-9 mb-5">
                <div class="row">
                    <?php
                    if (isset($_GET['search'])) {
                      $products = $get_data->search($_GET['search']);
                      if($products->num_rows <=0){
                        echo "<h2>Không tìm thấy thú cưng</h2>";
                      }
                      foreach ($products as $pro) {
                        ?>
                      <div class="col-md-3 col-sm-6 mb-4">
                            <div class="product">
                                <a href="product-single.php?id_pet=<?php echo $pro['id_pet']; ?>" class="img-prod">
                                    <img class="img-fluid" src="../Admin/upload/<?php echo $pro['picture']; ?>" alt="<?php echo $pro['name_pet']; ?>">
                                </a>
                                <div class="text py-3 text-center">
                                    <h3>
                                        <a href="product-single.php?id_pet=<?php echo $pro['id_pet']; ?>">
                                            <?php echo $pro['name_pet']; ?>
                                        </a>
                                    </h3>
                                    <p class="price">
                                        <span class="price-sale"><?php echo number_format($pro['price'], 0, ',', '.'); ?> ₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    } else {
                      $products = isset($_GET['cat']) ? $get_data->select_product_cat($_GET['cat']) : $get_data->select_product();
                      foreach ($products as $pro) {
                        ?>
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="product">
                                <a href="product-single.php?id_pet=<?php echo $pro['id_pet']; ?>" class="img-prod">
                                    <img class="img-fluid" src="../Admin/upload/<?php echo $pro['picture']; ?>" alt="<?php echo $pro['name_pet']; ?>">
                                </a>
                                <div class="text py-3 text-center">
                                    <h3>
                                        <a href="product-single.php?id_pet=<?php echo $pro['id_pet']; ?>">
                                            <?php echo $pro['name_pet']; ?>
                                        </a>
                                    </h3>
                                    <p class="price">
                                        <span class="price-sale"><?php echo number_format($pro['price'], 0, ',', '.'); ?> ₫</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    } ?>
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