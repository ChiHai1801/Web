<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liên Hệ</title>
  <link rel="stylesheet" href="css/sanpham.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/lienhe.css">
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
<div>
      <a href="#" class="d-block">  
                            <?php 
                            $cookie_name = "name";
	                        ECHO ' ' .$_COOKIE[$cookie_name];
	
	                        ?> 
                        </a> 
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
          <span onclick="location.href='login.php'">Đăng nhập</span>
        </div>

        <div class="header-right-text">
          <span onclick="location.href='fromnhap.php'">Đăng ký</span>
        </div>

        <div class="header-right-text">
            <a href="/Admin/View/admin">Đăng xuất</a>
        </div>

      </div>
    </div>


    <div class="nav">
      <div class="nav-logo">
        <img src="img/logo.png" alt="">
      </div>

      <div class="nav-search">
        <input type="text" placeholder="Tìm kiếm ...">
        <button> <a class="fas fa-search"></a>Tìm kiếm</button>
        <script src="js/test.js"></script>
      </div>

      <div class="nav-cart">
        <span class="cart-shopping">
          <i class="ti-shopping-cart" onclick="hien()"></i>
        </span>
      </div>
    </div>
  </header>



  <nav>
        <div class="main">
            <ul class="main-menu">
                <li><a href="trangchu.php">TRANG CHỦ</a></li>
                <li><a href="#">SẢN PHẨM<i class="arrow-down fas fa-caret-down"></i></a>
                    <ul class="main-menusecond">
                        <li><a href="nuochoanam.php">Nước hoa nam</a></li>
                        <li><a href="nuochoanu.php">Nước hoa nữ</a></li>
                    </ul>
                </li>
                <li><a href="lienhe.php">LIÊN HỆ</a></li>
            </ul>
        </div>
    </nav>


  <main>
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
  </main>

</body>

</html>