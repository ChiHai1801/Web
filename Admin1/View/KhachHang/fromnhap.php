<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet"  href="login.css">
        <link rel="stylesheet" href="css/sanpham.css">
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
                    <span onclick="location.href='fromnhap.php'">Đăng ký</span>
                </div>

                    <div class="header-right-text">
                        <a href="/Admin/View/admin">Đăng xuất</a>
                    </div>

            </div>
        </div>

        <div class="nav">
            <div class="nav-logo" >
                <a href="/Admin/View/KhachHang/trangchu.php">
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


        <main class="main" >
            <div class="table">
                <h1 class="form_title">Đăng Ký</h1>
                
                <form action="xuly.php" method="post" class="register">
                    <div class="form-row">
                        <lable for="name">Name:</lable>
                        <input type="text" id="name" name="name" placeholder="Họ tên. . ." required> 
                        <i class="tick fas fa-check"></i>
                    </div>
                    
                    <div class="form-row">
                        <lable>E-mail:</lable> 
                        <input type="text" name="email" placeholder="Nhập Email" required>
                        <i class="tick fas fa-check"></i>
                    </div>

                    <div class="form-row">
                        <lable>Password:</lable>
                        <input type="password" name="password" id="password" placeholder="Nhập mật khẩu" required>
                        <i class="tick fas fa-check"></i>
                    </div>

                    <div class="form-row">
                        <lable>Created At   :</lable>
                        <input type="date" name="created_at">
                        <i class="tick fas fa-check"></i>
                    </div>

                    <div class="form-row">
                        <label>Updated At   :</label>
                        <input type="date" name="updated_at">
                        <i class="tick fas fa-check"></i>
                    </div>

                    <div class="form__submit">
                    <input class="submit" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>
