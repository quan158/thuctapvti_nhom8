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
    <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
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
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Sản phẩm</h4>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        Thêm sản phẩm
                      </button>
                    </div>
                  </div>
                 <div class="card-body">
<!-- Modal -->
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">
                        <span class="fw-mediumbold"> Thêm</span>
                        <span class="fw-light"> Thú Cưng </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Tên thú cưng</label>
                                    <input name="txtname" type="text" class="form-control" placeholder="name" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Giới tính</label>
                                    <select class="form-control" name="txtgender" required>
                                        <option value="Đực">Đực</option>
                                        <option value="Cái">Cái</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="txtselect" required>
                                        <?php
                                        $select_cat = $get_data->select_cats();
                                        foreach ($select_cat as $cat) { ?>
                                            <option value="<?php echo $cat['name_cat'] ?>"><?php echo $cat['name_cat'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Số lượng</label>
                                    <input name="txtnum" type="number" class="form-control" required />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Ảnh</label>
                                    <input name="txtpic" type="file" class="form-control" accept=".jpg, .jpeg, .png" required />
                                </div>
                            </div>
                            <div class="col-sm-12 pe-0">
                                <div class="form-group form-group-default">
                                    <label>Thư viện ảnh</label>
                                    <input type="file" id="images" name="albumImages[]" accept=".jpg, .jpeg, .png" multiple>
                                </div>
                            </div>
                            <div class="col-md-6 pe-0">
                                <div class="form-group form-group-default">
                                    <label>Giá</label>
                                    <input class="form-control" type="number" name="txtprice" placeholder="VNĐ" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Mô tả</label>
                                    <textarea class="form-control" rows="3" name="txtdes" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="submit" name="txtsub" class="btn btn-primary" id = "btnSub">Thêm</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="closeButton">Đóng</button>
                        </div>
                    </form>
                </div>
                <?php
                if (isset($_POST['txtsub'])) {
                    $insert = $get_data->insert_pet(
                        $_POST['txtname'],
                        $_POST['txtselect'],
                        $_POST['txtnum'],
                        $_POST['txtgender'],
                        $_POST['txtprice'],
                        $_FILES['txtpic']['name'],
                        $_POST['txtdes']
                    );

                    if ($insert) {
                        // Get the last inserted ID
                        $productID = $insert;
                        $mainImage = $_FILES['txtpic']['name'];

                        // Handle main product image upload
                        if (!move_uploaded_file($_FILES['txtpic']['tmp_name'], 'upload/' . $mainImage)) {
                            echo "Error uploading main image<br>";
                        }

                        // Handle multiple additional images upload
                        $uploadDirectory = 'upload/';
                        foreach ($_FILES['albumImages']['name'] as $key => $name) {
                            $tmpName = $_FILES['albumImages']['tmp_name'][$key];
                            $filePath = $uploadDirectory . basename($name);

                            // Insert image details into database with the correct product ID
                            $upload = $get_data->insert_image($productID, $name);

                            if (!move_uploaded_file($tmpName, $filePath)) {
                                echo "Error uploading $name<br>";
                            }
                        }

                        echo "<script>alert('Thêm sản phẩm thành công');
                              </script>";
                    } else {
                        echo "<script>alert('Đã thêm thất bại')</script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
                    <div class="table-responsive">
              <table id="add-row" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Tên thú cưng</th>
                    <th>Danh mục</th>
                    <th>Ảnh</th>
                    <th>Số lượng</th>
                    <th>Giới tính</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th style="width: 10%">Hành động</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  // Lấy danh sách thú cưng từ cơ sở dữ liệu
                  $select_pet = $get_data->select_all_pets(); 
                  foreach ($select_pet as $se_pet) {
                  ?>
                  <tr>
                    <td><?php echo $se_pet['name_pet']; ?></td>
                    <td><?php echo $se_pet['category']; ?></td>
                    <td><img width="70px" height="70px" src="upload/<?php echo $se_pet['picture']; ?>" alt="<?php echo $se_pet['name_pet']; ?>"></td>
                    <td><?php echo $se_pet['quantity']; ?></td>
                    <td><?php echo $se_pet['gender']; ?></td>
                    <td><?php 
                        // Định dạng giá
                        $price = $se_pet['price'];
                        $formatted_price = number_format($price, 0, ',', '.');
                        echo $formatted_price . ' ₫'; 
                    ?></td>
                    <td><?php echo $se_pet['description']; ?></td>
                    <td>
                      <div class="form-button-action">
                        <!-- Sửa thông tin thú cưng -->
                        <button type="button" data-bs-toggle="modal" data-bs-target="#updateRowModal" class="btn btn-link btn-primary btn-lg">
                          <a href="updateProduct.php?id_pet=<?php echo $se_pet['id_pet']; ?>" class="fa fa-edit"></a>
                        </button>
                        <!-- Xoá thú cưng -->
                        <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                          <a href="Product.php?del=<?php echo $se_pet['id_pet']; ?>" onClick="if(confirm('Bạn có chắc chắn muốn xoá?')) return true; else return false;" class="fa fa-times"></a>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>

<?php
// deletePet.php xử lý xóa thú cưng
if (isset($_GET['del'])) {
    $id_pet = $_GET['del'];
    $get_data->delete_pet($id_pet); // Gọi phương thức xóa thú cưng
    echo "<script>window.location=('Product.php');</script>"; // Chuyển hướng về trang chính
    exit();
}

?>

    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo2.js"></script>
      
    <script>
      $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });

        // Add Row
        $("#add-row").DataTable({
          pageLength: 5,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
          $("#add-row")
            .dataTable()
            .fnAddData([
              $("#addName").val(),
              $("#addPosition").val(),
              $("#addOffice").val(),
              action,
            ]);
          $("#addRowModal").modal("hide");
        });
      });
    </script>
  </body>
</html>
