<?php
session_start();
include ("control.php");
$get_data = new data(); $get_user = new data_user();
if (empty($_SESSION['user'])) {
  echo "<script>alert('Bạn cần đăng nhập để thực hiện thao tác này');
    window.location = 'sign-in.php';</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Product</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
              <img
                src="assets/img/kaiadmin/logo_light.svg"
                alt="navbar brand"
                class="navbar-brand"
                height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a
                  href="index.php"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Trang chủ</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Quản lý</h4>
              </li>
                    <li class="nav-item">
                      <a href="Product.php">
                        <i class="icon-book-open"></i>
                        <span class="sub-item">Sản phẩm</span>
                        
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="Category.php">
                        <i class="icon-menu"></i>
                        <span class="sub-item">Danh mục</span>
                        
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="Contact.php">
                        <i class="icon-envelope"></i>
                        <span class="sub-item">Liên hệ</span>
                        
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="Order.php">
                        <i class="icon-calendar"></i>
                        <span class="sub-item">Đơn đặt hàng</span>
                        
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="sign-up.php">
                        <i class="icon-chart"></i>
                        <span class="sub-item">Thêm tài khoản</span>
                        
                      </a>
                    </li>
                  
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.php" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
          >
            <div class="container-fluid">
              <nav
                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-search pe-1">
                      <i class="fa fa-search search-icon"></i>
                    </button>
                  </div>
                  <input
                    type="text"
                    placeholder="Search ..."
                    class="form-control"
                  />
                </div>
              </nav>

              <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <li
                  class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                  <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-expanded="false"
                    aria-haspopup="true"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-search animated fadeIn">
                    <form class="navbar-left navbar-form nav-search">
                      <div class="input-group">
                        <input
                          type="text"
                          placeholder="Search ..."
                          class="form-control"
                        />
                      </div>
                    </form>
                  </ul>
                </li>
                <li class="nav-item topbar-icon dropdown hidden-caret">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="notifDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="fa fa-bell"></i>
                    <span class="notification"></span>
                  </a>
                </li>
                
                <li class="nav-item topbar-user dropdown hidden-caret">
                  <?php if (isset($_SESSION['user'])) {
                    $select_admin = $get_user->select_admin($_SESSION['user']);
                    foreach ($select_admin as $se) { ?>
                  <a
                    class="dropdown-toggle profile-pic"
                    data-bs-toggle="dropdown"
                    href="#"
                    aria-expanded="false"
                  >
                    <div class="avatar-sm">
                      <img
                        src="assets/img/profile.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold"><?php echo $se['username'] ?></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                        <div class="user-box">
                          <div class="avatar-lg">
                            <img
                              src="assets/img/profile.jpg"
                              alt="image profile"
                              class="avatar-img rounded"
                            />
                          </div>
                          <div class="u-text">
                            <h4><?php echo $se['username'] ?></h4>
                            <p class="text-muted"><?php echo $se['email'] ?></p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                      </li>
                    </div>
                  </ul>
                  <?php }
                  }else{
                    ?>
                    <span class="fw-bold"><a href="login.php">Đăng nhập</a></span>
                  <?php } ?>
                </li>
              </ul>
            </div>
          </nav>
          <!-- End Navbar -->
        </div>
        <div class="container">
          <div class="page-inner">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Cập nhật sản phẩm</div>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id_pet'])) {
                        $id_pet = $_GET['id_pet'];
                        $select_pet_id = $get_data->select_pet($id_pet);
                        if ($select_pet_id) {
                            foreach ($select_pet_id as $pet) { ?>
                                <div class="row">
                                    <form id="petForm" method="post" enctype="multipart/form-data" novalidate>
                                    <input type="hidden" name="id_pet" value="<?php echo $pet['id_pet']; ?>">
                                    <div class="mb-3">
                                        <label for="name_pet" class="form-label">Tên thú cưng</label>
                                        <input type="text" class="form-control" id="name_pet" name="name_pet" placeholder="Nhập tên thú cưng" 
                                              value="<?php echo $pet['name_pet']; ?>" required>
                                        <div class="invalid-feedback">Vui lòng nhập tên thú cưng.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Danh mục</label>
                                        <select name="category" class="form-control" required>
                                            <option value="" disabled>Chọn danh mục</option>
                                            <?php
                                            $select_cats = $get_data->select_cats();
                                            foreach ($select_cats as $cats): ?>
                                                <option value="<?php echo $cats['name_cat']; ?>" 
                                                    <?php if ($cats['name_cat'] === $pet['category']) echo 'selected'; ?>>
                                                    <?php echo $cats['name_cat']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng nhập danh mục.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Số lượng</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Nhập số lượng" 
                                              value="<?php echo $pet['quantity']; ?>" required>
                                        <div class="invalid-feedback">Vui lòng nhập số lượng.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="gender" class="form-label">Giới tính</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="" disabled>Chọn giới tính</option>
                                            <option value="Male" <?php if ($pet['gender'] == 'Male') echo 'selected'; ?>>Đực</option>
                                            <option value="Female" <?php if ($pet['gender'] == 'Female') echo 'selected'; ?>>Cái</option>
                                        </select>
                                        <div class="invalid-feedback">Vui lòng chọn giới tính.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Giá</label>
                                        <input type="number" class="form-control" id="price" name="price" placeholder="Nhập giá (VNĐ)" 
                                              value="<?php echo $pet['price']; ?>" required>
                                        <div class="invalid-feedback">Vui lòng nhập giá.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="picture" class="form-label">Ảnh</label>
                                        <input type="file" class="form-control" id="picture" name="picture" accept=".jpg, .jpeg, .png">
                                        <div class="invalid-feedback">Vui lòng tải lên ảnh.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="images" class="form-label">Thư viện ảnh</label>
                                        <input type="file" class="form-control" id="images" name="albumImages[]" accept=".jpg, .jpeg, .png" multiple>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Nhập mô tả" required>
                                            <?php echo $pet['description']; ?>
                                        </textarea>
                                        <div class="invalid-feedback">Vui lòng nhập mô tả.</div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="submit" name="update_pet" class="btn btn-primary">Cập nhật</button>
                                    </div>
                                </form>
                                </div>
                            <?php }
                        } else {
                            echo "Product not found.";
                        }
                    } else {
                        echo "Product ID is not defined.";
                    }

                    if (isset($_POST['update_pet'])) {
                        $update = $get_data->update_pet(
                            $_GET['id_pet'],
                            $_POST['name_pet'],
                            $_POST['category'],
                            $_POST['quantity'],
                            $_POST['gender'],
                            $_POST['price'],
                            $_FILES['picture']['name'],
                            $_POST['description']
                            
                        );

                        if ($update) {
                            $mainImage = $_FILES['picture']['name'];

                            // Handle main product image upload
                            if (!move_uploaded_file($_FILES['picture']['tmp_name'], 'upload/' . $mainImage)) {
                                echo "Error uploading main image<br>";
                            }
                            $uploadDirectory = 'upload/';
                        $delete_img = $get_data->delete_image($_GET['id_pet']);
                            foreach ($_FILES['albumImages']['name'] as $key => $name) {
                                $tmpName = $_FILES['albumImages']['tmp_name'][$key];
                                $filePath = $uploadDirectory . basename($name);

                                // Insert image details into database with the correct product ID
                                $upload = $get_data->insert_image($_GET['id_pet'], $name);

                                if (!move_uploaded_file($tmpName, $filePath)) {
                                    echo "Error uploading $name<br>";
                                }
                            }

                            echo "<script>alert('Cập nhật sản phẩm thành công'); window.location=('Product.php');</script>";
                        } else {
                            echo "<script>alert('Cập nhật thất bại')</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    </div>
    </div>
    </div>
    </body>
</html>