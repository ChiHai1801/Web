<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Chủ</title>
  <link rel="stylesheet" href="css/sanpham.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/themify-icons-font/themify-icons/themify-icons.css">
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
          <span onclick="location.href='login.php'">Đăng nhập</span>
        </div>

        <div class="header-right-text">
          <span onclick="location.href='formnhap.php'">Đăng ký</span>
        </div>
      </div>
    </div>
    <div class="info">
                        <a href="#" class="d-block">  
                            <?php 
	                        $cookie_name = "name";
	                        ECHO ' ' .$_COOKIE[$cookie_name];
	
	                        ?> 
                        </a> 
                    </div>

    <div class="nav">
      <div class="nav-logo">
        <img src="img/logo.png" alt="">
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
      <h1>Liên Hệ</h1>
      <img src="https://vuivekhongquau.com/wp-content/uploads/2021/06/lien-he.jpg" >
      <p><b>Địa Chỉ: Đường 3/2, Toà Nhà ABC, TP Cần Thơ</b>
        <br>
        Nếu bạn có góp ý, vui lòng liên hệ bằng thư điện tử hoặc sử dụng biểu mẫu bên dưới.
        <br>
        Xin cảm ơn.
      </p>
      <h1>Góp Ý</h1>
      <div id="lienhe">

        <div id="lienhe">
          <form method="POST" enctype="multipart/x-www-form-urlencoded">
            <table>
              <tr>
                <td><i class="fas fa-user-alt"></i></td>
                <td>

                  <input type="text" size="25" id="hoten" name="hoten" placeholder="Vui lòng nhập Họ tên của bạn">
                </td>
              </tr>
              <tr>
                <td> <i class="fas fa-envelope"></i> </td>
                <td><input type="text" size="25" id="email" name="email" placeholder="Vui lòng nhập địa chỉ Email">
                </td>
              </tr>
              <tr>
                <td> <i class="fas fa-list"></i></td>
                <td><select size="1">
                    <option>Về Sản Phẩm/Dịch Vụ</option>
                    <option>Về Ưu Đãi Thành Viên</option>
                    <option>Về Tin Tuyển Dụng</option>
                  </select></td>
              </tr>

              <tr>
                <td> <i class="fas fa-file"></i></td>
              </tr>
              <tr>
                <td colspan="2">
                  <textarea rows="7" cols="50" id="nd" placeholder="Nội dung cần liên hệ"> </textarea>
                </td>
                
              </tr>
              <tr>
                <td colspan="2"> <input type="submit" value="Gửi" onclick="checklh()"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </article>
  </main>
</body>

</html>