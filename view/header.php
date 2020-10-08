
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index-431:41-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vshop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../upload/fclogo.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="../view/css/material-design-iconic-font.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,200;1,300;1,400;1,600;1,800&display=swap" rel="stylesheet">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <link rel="stylesheet" href="../view/css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="../view/css/fontawesome-stars.css">

        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="../view/css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="../view/css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="../view/css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="../view/css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="../view/css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="../view/css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="../view/css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="../view/css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="../view/css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="../view/css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="../view/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="../view/css/responsive.css">
        <!-- Modernizr js -->
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
        <style>
    .list {
        z-index: 999;
        width: 100%;
    }

    #data-container {
        list-style: none;
        background-color: white;
    }

    #data-container li a {
        color: black;
    }

    #data-container li a:hover {
        color: white;
    }

    #data-container li:hover {
        background-color: #16aaba;
    }

    #data-container li::before {
        display: inline-block;
        margin-right: 0.2rem;
    }
    </style>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../view/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header class="li-header-4">
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="../view/images/menu/logo/logo2.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox" method="POST" id="form" class="form-inline"
                                role="form">
                                <div class="list">
                                    <input type="text" id="search_query" class="form-control search_query dropbtn"
                                        placeholder="Bạn muốn tìm gì ...">
                                        
                                    <ul id="data-container"></ul>
                                    <div class="selected_data_containter" id="selected_data_containter">
                                    </div>
                                </div>
                                <!-- <input style="width: 5px;color: red;font-size: 24px;font-size:bold" class="form-control"
                                    type="reset" id="reset" value="↺"> -->
                            </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            
                                            <?php
                                                if(isset($_SESSION['id'])&& ($_SESSION['id']>0)){
                                                    echo '
                                                    <a href="#">
                                                    <img src="../upload/'.$_SESSION['img'].'" alt="image-user">
                                                        </a>
                                                        
                                                        <ul class="box__user">
                                                            <li><a href="#">Chỉnh sửa thông tin</a></li>
                                                            <li><a href="index.php?act=logout">Đăng xuất</a></li>
                                                        </ul>
                                                    ';
                                                }
                                                else{
                                                    echo '
                                                    <a href="index.php?act=login">
                                                        <i class="fas fa-user icon-user"></i>
                                                    </a>
                                                    ';
                                                }
                                            ?>
                                            
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <?php 
                                                if(isset($_SESSION['giohang'])&& (count($_SESSION['giohang'])>0)){ 
                                                
                                            ?>
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">
                                                    <span class="cart-item-count"><?php echo count($_SESSION['giohang']) ?></span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                <?php
                                
                                                    $tongtien = 0;
                                                    for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                                                    $price=$_SESSION['giohang'][$i][3];
                                                    $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                                                    $tongtien += $ttien;
                                                    
                                                    // var_dump($_SESSION['giohang']) ;
                                                    ?>
                                                    <li>
                                                        <a href="../view/single-product.html" class="minicart-product-image">
                                                            <img src="../upload/<?php echo $_SESSION['giohang'][$i][2] ?>" alt="cart products" class="img-fluid">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="#"><?php echo $_SESSION['giohang'][$i][1]?></a></h6>
                                                            <span><?php echo number_format($price)?> x <?php echo $_SESSION['giohang'][$i][4] ?></span>
                                                        </div>
                                                        
                                                    </li>
                                                    <?php }?>
                                                    
                                                </ul>
                                                <p class="minicart-total">Tổng tiền: <span><?php echo number_format($ttien)?></span></p>
                                                <div class="minicart-button">
                                                    <a href="index.php?act=viewcart" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>Chi tiết giỏ hàng</span>
                                                    </a>
                                                    <a href="index.php?act=checkout" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Đặt hàng</span>
                                                    </a>
                                                </div>
                                            </div>
                                                <?php }
                                                    else{
                                                        echo '
                                                        <div class="hm-minicart-trigger">
                                                            <span class="item-icon"></span>
                                                            <span class="item-text">
                                                        <span class="cart-item-count">0</span>
                                                        </span>
                                                        </div>
                                                        <div class="minicart">
                                                        <h6 style="text-align:center">Giỏ hàng trống</h6>
                                                        </div>
                                                        ';
                                                    }
                                                ?>
                                        </li>
                                        
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                        <li><a href="index.php">Trang chủ</a></li>
                                            <li class="megamenu-holder"><a href="index.php?act=shop">Shop</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="../view/shop-left-sidebar.html">Danh mục</a>
                                                        <ul>
                                                            <?php
                                                                $sql="SELECT * FROM catalog";
                                                                $result= pdo_query($sql);
                                                                foreach ($result as $row){?>
                                                                        <li><a href="index.php?act=shop&idCatalog=<?php echo $row['id']?>"><?php echo $row['name'] ?></a></li>
                                                                    
                                                                <?php }?>
                                                            
                                                        </ul>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            
                                            <li><a href="index.php?act=about">Giới thiệu</a></li>
                                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <script src="../Search/js/jquery-3.5.1.min.js"></script>
        <script src="../Search/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        $('#search_query').keyup(function() {
            var search_query = $(this).val();
            var form_data = {
                search_query: search_query
            }
            var resp_data_format = "";
            $.ajax({
                url: "../Search/find-response.php",
                data: form_data,
                method: "post",
                dataType: "json",
                success: function(response) {

                    $("#data-container").html(response);
                }
            });
        });

        $(document).on("click", ".select_country", function() {
            var selected_country = $(this).html();
            $('#search_query').val(selected_country);
            $('#data-container').html('');
        });
        </script>