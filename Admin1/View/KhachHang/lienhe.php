<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/sanpham.css">
    <link rel="stylesheet" href="css/adminlte.min1.css">
    <link rel="stylesheet" href="css/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="css/lienhe.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../../Public/client/style.css">
    <!--icon trên web themify-->
    <script src="https://kit.fontawesome.com/9d3d21350b.js" crossorigin="anonymous"></script>
    <!--icon fontawesome-->



</head>

<body>
    <header>
        <div class="header">
            <div class="header-left">
                <div class="header-left-text">
                    <span>Kênh youtube</span>
                </div>

                <div class="header-left-text">
                    <span>Tải ứng dụng</span>
                </div>

                <div class="header-left-social">
                    <span>Kết nối</span>
                    <span class="social">
                        <a href="https://vi-vn.facebook.com/"><i class="fab fa-facebook-square"></i></a>
                        <a href="https://www.google.gg/"><i class="fab fa-google"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </span>
                </div>
            </div>

            <div class="header-right">
                <div class="header-right-text">
                    <span>
                        <i class="far fa-bell"></i>
                        Thông báo
                    </span>
                </div>

                <div class="header-right-text">
                    <span>
                        <i class="fas fa-question-circle"><a href=""></a></i>
                        Hổ trợ
                    </span>
                </div>

                <div class="header-right-text">

                    <span onclick="location.href='/Admin/View/KhachHang/login.php'">Đăng nhập</span>
                    
                </div>

                <div class="header-right-text">
                    <span onclick="location.href='.../../fromnhap.php'">Đăng ký</span>
                </div>

                    <div class="header-right-text">
                        <a href="../../View/admin">Đăng xuất</a>
                    </div>

            </div>
        </div>

        <div class="nav">
        <div class="nav-logo" >
                <a href="trangchu.php">
                <img src="img/logo.png" alt=""></a>
            </div>

            <div class="nav-search">
                <input type="text" placeholder="Tìm kiếm ...">
                <button> <i class="fas fa-search"></i>Tìm kiếm</button>
                <script src="js/test.js"></script>
            </div>

            <div class="nav-cart">
                <span class="cart-shopping">
                    <i class="ti-shopping-cart" onclick="hien()"></i>
                </span>
            </div>
        </div>
    </header>



    <main>

        <div class="tong">
            <div class="danhmuc">
            <!-- Main Sidebar Container -->
            <aside>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../Public/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div>
                <a href="#" class="d-block">  
                    <?php 
                    $cookie_name = "name";
                  ECHO ' Tên: ' .$_COOKIE[$cookie_name];

                  ?> 
                </a> 
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
   with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="trangchu.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Trang chủ
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Sản phẩm
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="nuochoanam.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nước hoa nam</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="nuochoanu.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nước hoa nữ</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="nuochoanam.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            nam
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="nuochoanu.php" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            nữ
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="lienhe.php" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Liên hệ
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>


                    
  <article>
  <h1> LIÊN HỆ</h1>

          <div class="table">
          <iframe class="contact__map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4740.172856141843!2d105.76948759674536!3d10.029452193403076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d76b0035f6d53d0!2zxJDhuqFpIGjhu41jIEPhuqduIFRoxqE!5e0!3m2!1svi!2s!4v1639472453305!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <div class="support__title">
            <h1> GÓP Ý</h1>
              <p><b>Địa Chỉ: Đường 3/2, Toà Nhà ABC, TP Cần Thơ</b></p>
              <p>Nếu bạn có góp ý, vui lòng liên hệ bằng thư điện tử hoặc sử dụng biểu mẫu bên dưới.</p>
              <p>Xin cảm ơn.</p>
            </p>
        </div>
          
        
        <form method="POST" enctype="multipart/x-www-form-urlencoded" class="register">
            <div class="form-row">
            <i class="fas fa-user-alt"></i>
            <input type="text" id="hoten" name="hoten" placeholder="Vui lòng nhập họ tên ..." required>
            </div>

            <div class="form-row">
            <i class="fas fa-list"></i>
            <input type="email" id="email" placeholder="Vui lòng nhập Email..." required>
            </div>

            <div class="form-row">
            <i class="fas fa-file"></i>
            <select size="1">
                    <option>Về Sản Phẩm/Dịch Vụ</option>
                    <option>Về Ưu Đãi Thành Viên</option>
                    <option>Về Tin Tuyển Dụng</option>
                  </select>
            </div>

            <div class="form-row">
            <i class="fas fa-file"></i>
            <textarea id="feedback__content" name="feedback" placeholder="Nội dung cần liên hệ....... " required> </textarea>
            </div>

            <div class="form__submit">
                <input type="submit" value="Gửi">
            </div>
        </form>
        </div>

      </article>
        </div>

  </main>


  <footer>
    <div class="footer-area-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="index.html" class="footer-logo img-fluid">
                                    <img src="/Admin/Public/client/img/logo.png" alt="logo" class="img-fluid">
                                </a>
                                <ul class="footer-social">
                                    <li>
                                        <a href="#" title="facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="google-plus">
                                            <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="linkedin">
                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="pinterest">
                                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="rss">
                                            <i class="fa fa-rss" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="vimeo">
                                            <i class="fa fa-vimeo" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                                <p>© 2017 newsedge Designed by RadiusTheme. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                

            <div class="footer">
            <div class="information">
                <h5>Group Seven</h5>
                <div class="information_text">
                    <i class="fas fa-map-marker-alt"></i>
                    Địa chỉ:Đường 3/2, Phường Xuân Khánh, Quận Ninh Kiều, TP.Cần Thơ
                </div>
                <div class="information_text">
                    <i class="far fa-envelope"></i>
                    shopgroupseven123@gmail.com
                </div>
                <div class="information_text">
                    <h5>Thời gian mở cửa</h5>
                    10h - 20h từ Thứ Hai - Chủ Nhật
                </div>
            </div>

            <div class="information--web">

            </div>

            <div class="contact">

            </div>

        </div>
        </div>
    </footer>

</body>
</html>