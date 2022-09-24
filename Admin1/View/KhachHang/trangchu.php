<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <div class="jumbotron text-center">
            <a href="trangchu.php">
                <img src="../../Public/client/img/01.png" alt=""></a>
            <h1>Group Seven</h1>
    
    <div id="menu">
        <div>
            <ul>        
                <li colspan="2"> 
                <marquee scrollamount="2">
                    Xin Chào !!!
                </marquee>
                </li>
                
                <li>
                    <a href="#">Thương Hiệu</a>
                </li>
                <li>
                    <a href="#">Post</a>
                </li>
                <li>
                    <a href="#">Pages</a>
                </li>
                <li>
                    <a href="post-style-1.html">Politics</a>
                </li>
                <li>
                    <a href="post-style-3.html">Giới Thiệu</a>
                </li>
                <li>
                    <a href="post-style-4.html">Fashion</a>
                </li>

                <li>
                    <a href="login.php">Đăng nhập</a>
                </li>
                <li>
                    <a href="fromnhap.php">Đăng ký</a>
                </li>
                <li type="button" data-toggle="modal">
                    <a href="/Admin/View/admin">Đăng xuất</a>
                </li>

                <div class="nav"> 
                <div class="nav-logo" >
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
            </ul>
        </div>
        </div>
    </div>
    </header>

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


<main>



        <div class="tong">
        <div class="danhmuc">

            <a href="trangchu.php">
                <img src="../../Public/client/img/01.png" alt=""></a> 
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
                        
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
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
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x900/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/04/nuoc-gucci-flora-emerald-gardenia-limited-edition-for-woman-100ml-624e5082c1ffc-07042022094626.jpg"
                                width="250" height="250" alt="">
                            <div class="product-item-text">
                                <p><span>2.600.000 </span><sup>đ</sup></p>
                                <h5>Nước Gucci Flora Emerald Gardenia Limited Edition For Woman 100ml </h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>
                    </marquee>
                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/04/nuoc-hoa-unisex-armaf-club-de-nuit-milestone-eau-de-parfum-vaporisateur-spray-105ml-624d5160c9fc0-06042022153752.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.000.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Unisex Armaf Club De Nuit Milestone 105ml </h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2019/05/nuoc-hoa-chanel-no-5-l-eau-edt-50ml-5cf0f7fab37eb-31052019164634.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2.590.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Chanel No 5 L’Eau EDT, 50ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/04/xit-thom-toc-maison-francis-kurkdjian-baccarat-rouge-540-hair-mist-70ml-624e9f4e38947-07042022152238.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1.990.000</span><sup>đ</sup></p>
                                <h5>Xịt Thơm Tóc Maison Francis Kurkdjian Baccarat Rouge 540 Hair Mist 70ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/03/nuoc-hoa-mini-christian-dior-rose-gipsy-7-5ml-6242ddc6282b8-29032022172158.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>480.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Mini Christian Dior Rose Gipsy 7.5ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2020/08/nuoc-hoa-unisex-louis-vuitton-cactus-garden-5f447624d86a7-25082020092332.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>7.880.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Unisex Louis Vuitton Cactus Garden EDP 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-unisex-louis-vuitton-california-dream-edp-100ml-6206305e465a0-11022022164606.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>8.500.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Unisex Louis Vuitton California Dream EDP 100ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-maison-margiela-replica-jazz-club-edt-100ml-cho-nam-621847658d743-25022022100509.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2.550.000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Maison Margiela Replica Jazz Club EDT 100ml Cho Nam</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://cdn.vuahanghieu.com/unsafe/0x500/left/top/smart/filters:quality(90)/https://admin.vuahanghieu.com/upload/product/2022/02/nuoc-hoa-chanel-chance-edt-cho-nu-50ml-6209cf0fce920-14022022103959.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2.380.000</span><sup>đ</sup></p>
                                <h5>Nước hoa Chanel Chance EDT Cho Nữ, 50ml</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000025647/product/gucci-bloom-100ml_086cb263df864e0dbb74a9e24f962b3d_1024x1024.png"
                                alt="">
                            <div class="product-item-text">
                                <p><span>2,450,000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Gucci Bloom EDP 100ML</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000025647/product/o-rabanne-pure-xs-for-her-80ml_1c31bd7b4b31412cbffd11fac59f7a9b_master_cd439a09896c4e54956b1d8fe3f0af8c_medium.jpg"
                                alt="">
                            <div class="product-item-text">
                                <p><span>1,999,000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Paco Rabanne Pure XS For Her EDP 80ML</h5>
                            </div>
                            <button>Thêm vào giỏ hàng</button>
                        </div>

                        <div class="product-item">
                            <img src="https://product.hstatic.net/1000282067/product/61aw694nm_l._sl1500__bb1eb8065ff7429c8a2ea785e46c950d_1024x1024.png"
                                alt="">
                            <div class="product-item-text">
                                <p><span>7,500,000</span><sup>đ</sup></p>
                                <h5>Nước Hoa Kilian Good Girl Gone Bad Limited Edition Dragon Clutch</h5>
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
    </main>

    <footer>
        <div class="jumbotron text-center">
            <a href="trangchu.php">
                <img src="../../Public/client/img/01.png" alt=""></a>
            <h1>Group Seven</h1>
        </div>

        <div class="container">
        <div class="row">
        <div class="col-sm-4" >
            <a href="trangchu.php">
            <img src="img/logo.png" alt=""></a>

            <div>
                <ul class="footer-social">
                    <div>
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
                    </div>

                    <div>
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
                    </div>
                </ul>    
            </div>       
        </div>

            <div class="col-sm-4">
            <div class="footer">
            <div class="information">
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
            </div>
            </div>


            <div class="col-sm-4">
            
                <div class="media">
                        <a href="#" title="twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                <div class="media-body">
                    <h3 class="title-medium-light size-md mb-10">
                        <a href="#">Basketball Stars Face Off in ate Playoff Beard Battle</a>
                    </h3>
                </div>
                </div>

                <div class="media">
                        <a href="#" title="twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                <div class="media-body">
                    <h3 class="title-medium-light size-md mb-10">
                        <a href="#">Basketball Stars Face Off in ate Playoff Beard Battle</a>
                    </h3>
                </div>
                </div>

                <div class="media">
                        <a href="#" title="twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                <div class="media-body">
                    <h3 class="title-medium-light size-md mb-10">
                        <a href="#">Basketball Stars Face Off in ate Playoff Beard Battle</a>
                    </h3>
                </div>
                </div>

                <div class="media">
                        <a href="#" title="twitter">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                <div class="media-body">
                    <h3 class="title-medium-light size-md mb-10">
                        <a href="#">Basketball Stars Face Off in ate Playoff Beard Battle</a>
                    </h3>
                </div>
                </div>
            </div>

        </div>
        </div>
    </footer>

</body>
</html>