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

                    <span onclick="location.href='login.php'">Đăng nhập</span>
                    
                </div>

                <div class="header-right-text">
                    <span onclick="location.href='fromnhap.php'">Đăng ký</span>
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
    
    <div class="box2">
        Nước Hoa Cho Nam
    </div>

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
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="lienhe.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Liên hệ</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>

            <div class="product">
                <div class="product-container">
                    <div class="product-items">
                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-nam-chanel-bleu-edp-100ml-620600b02a082-11022022132240.jpg"
                                width="250" height="250" alt="">
                            <div class="product-item-text">
                                <p><span>3.340.000 </span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Chanel Bleu EDP, 100ml
                                </h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-nam-narciso-rodriguez-for-him-bleu-noir-edp-100ml-620b1d2c2e719-15022022102532.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.880.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Narciso Rodriguez For Him Bleu Noir EDP 100ml </h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-nam-ghala-zayed-gold-luxury-edp-100ml-6206148f27b3f-11022022144727.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.450.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Ghala Zayed Gold Luxury EDP 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-nam-guerlain-homme-edp-100ml-620a168c27436-14022022154500.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.500.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Guerlain Homme EDP 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2021/09/nuo-c-hoa-nam-nautica-voyage-edt-100ml-61359a4222f30-06092021113410.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>880.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Nautica Voyage EDT 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-nam-guerlain-l-homme-ideal-l-intense-edp-100ml-620619e466865-11022022151012.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.950.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Guerlain L'Homme Ideal L'Intense EDP 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2021/12/nuo-c-hoa-nam-afnan-supremacy-in-heaven-edp-100ml-61b1cc544259b-09122021162852.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.140.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Afnan Supremacy In Heaven EDP 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/01/nuoc-hoa-jean-paul-gaultier-scandal-pour-homme-edt-100ml-61d2970166741-03012022132609.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2.350.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Jean Paul Gaultier Scandal Pour Homme EDT 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/xit-khu-mui-nuoc-hoa-nam-chanel-de-bleu-deodorant-100ml-621847e79c3b3-25022022100719.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.140.000</span><sup>đ</sup></p>
                                <h5>Xịt Khử Mùi Nước Hoa Nam Chanel De Bleu Deodorant 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/03/nuoc-hoa-nautica-blue-sail-eau-de-toilette-spray-vaporisateur-100ml-623d1ffc17d73-25032022085052.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>990.000 </span><sup>đ</sup></p>
                                <h5>Nước Hoa Nautica Blue Sail Eau De Toilette Spray Vaporisateur 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/04/nuoc-hoa-nam-ghala-zayed-luxury-rouge-edp-dai-bang-do-100ml-624a78773c0ed-04042022114751.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.450.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Ghala Zayed Luxury Rouge EDP Đại Bàng Đỏ 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2019/05/nuoc-hoa-armaf-club-de-nuit-intense-for-man-105ml-5cecf9ac49316-28052019160444.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.050.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Armaf Club De Nuit Intense For Man, 105ml
                                </h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000282067/product/afnan-supremacy-silver-men_f43685cbf4f04957989c68bc5f77bc81_master_e15d68b7d53e4f90ab808e0da6e606c9_1024x1024.png"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1,700,000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Supremacy Afnan EDP</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000282067/product/a_783320472503_1_2hiw-h6_249f0608f2e64fbbada58d2095e0170c_1024x1024.png"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2,500,000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Bvlgari Eau Parfumee Au The Blanc EDC</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000282067/product/lacoste_essential_edt_4529f8b5c7cb444a927b03470928d5cd_master_0ab5332826914a0f95416cc8fb2d62b1_1024x1024.png"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1,500,000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Nam Lacoste Essential Pour Homme EDT</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000282067/product/admin.vuahanghieu_af6222da2c284b398adb5f1b025eb739_1024x1024.png"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2,900,000</span><sup>đ</sup></p>
                                <h5>Nước hoa nam Polo Cologne By Ralph Lauren Eau De Toilette</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- **************************kết thúc sản phẩm**************************** -->


        <!-- **************************Bắt đầu giỏ hàng***************************** -->
        <div class="cart">
            <div id="an" class="close-icon" onclick="an()">
                <button><i class="close ti-close"></i></button>
            </div>
            <h1>GIỎ HÀNG</h5>
                <form action="">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Số Lượng</th>
                                <th>Chọn</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- <tr>
                            <td><img src="img/A01.jpg" alt=""> <br> <p class="title">Giống cải xoăn</p></td>
                            <td><span>15.000</span><sup>đ</sup></td>
                            <td><input type="number" value="1" min="0"></td>
                            <td class="choice"><span class="delete">Xoá</span></td>
                        </tr> -->
                        </tbody>
                    </table>

                    <div class="tongtien">
                        <p>Tổng tiền:<span>0</span><sup>đ</sup></p>
                    </div>

                    <button>Thanh Toán</button>
                </form>
        </div>
        <script src="js/cart.js"></script>
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