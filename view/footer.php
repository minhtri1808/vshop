<!-- Begin Quick View | Modal Area -->

<div class="modal fade modal-wrapper" id="exampleModalCenter" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content" id="quickview">

                        </div>
                    </div>
                </div>   
            
            <!-- Quick View | Modal Area End Here -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $('.quick-view').click(function(){
                    var idpro= $(this).attr("id");
                    $.ajax({
                        url:"../quickview/quickview.php",
                        method:"POST",
                        data:{quickview:idpro},
                        success:function(data){
                            $('#quickview').html(data);
                            $('#exampleModalCenter').modal("show");
                        }
                    });

                })
            })
            </script>
<!-- Begin Footer Area -->
<div class="footer">
                <!-- Begin Footer Static Top Area -->
                <div class="footer-static-top">
                    <div class="container">
                        <!-- Begin Footer Shipping Area -->
                        <div class="footer-shipping pt-60 pb-25">
                            <div class="row">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="../view/images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Giao hàng nhanh chóng</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="../view/images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Thanh toán an toàn</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="../view/images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Uy tín chất lượng</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="../view/images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Hổ trợ 24/7h</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->
                <!-- Begin Footer Static Middle Area -->
                <div class="footer-static-middle">
                    <div class="container">
                        <div class="footer-logo-wrap pt-50 pb-35">
                            <div class="row">
                                <!-- Begin Footer Logo Area -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-logo">
                                        <img src="../view/images/menu/logo/logo.png" alt="Footer Logo">
                                        <p class="info">
                                            <!-- We are a team of designers and developers that create high quality HTML Template & Woocommerce, Shopify Theme. -->
                                        </p>
                                    </div>
                                    <ul class="des">
                                        <li>
                                            <span>Địa chỉ: </span>
                                            Toà nhà Innovation, lô 24, Công viên phần mềm Quang Trung, Quận 12, Thành phố Hồ Chí Minh
                                        </li>
                                        <li>
                                            <span>Phone: </span>
                                            <a href="#"> (08) 123 456 789</a>
                                        </li>
                                        <li>
                                            <span>Email: </span>
                                            <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Footer Logo Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Sản Phẩm</h3>
                                        <ul>
                                            <li><a href="#">Theo giá</a></li>
                                            <li><a href="#newproduct">Sản phẩm mới</a></li>
                                            <li><a href="#">Giảm giá</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-2 col-md-3 col-sm-6">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Cửa hàng</h3>
                                        <ul>
                                            
                                            <li><a href="index.php?act=about">Giới thiệu</a></li>
                                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Footer Block Area End Here -->
                                <!-- Begin Footer Block Area -->
                                <div class="col-lg-4">
                                    <div class="footer-block">
                                        <h3 class="footer-block-title">Theo dõi</h3>
                                        <ul class="social-link">
                                            
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google +">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://www.instagram.com/" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Begin Footer Newsletter Area -->
                                    <!-- <div class="footer-newsletter">
                                        <h4>Sign up to newsletter</h4>
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="footer-subscribe-form validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll">
                                                <div id="mc-form" class="mc-form subscribe-form form-group" >
                                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email" />
                                                    <button  class="btn" id="mc-submit">Subscribe</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> -->
                                    <!-- Footer Newsletter Area End Here -->
                                </div>
                                <!-- Footer Block Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Static Middle Area End Here -->
                
            </div>
            <!-- Footer Area End Here -->
            
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="../view/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="../view/js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="../view/js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="../view/js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="../view/js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="../view/js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="../view/js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="../view/js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="../view/js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="../view/js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="../view/js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="../view/js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="../view/js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="../view/js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="../view/js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="../view/js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="../view/js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="../view/js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="../view/js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="../view/js/scrollUp.min.js"></script>
        <!-- filter -->
        <script src="../view/js/isotope-docs.min.js"></script>
        <!-- Main/Activator js -->
        <!-- <script src="../view/js/jquery.3.4.1.js"></script> -->
        <script src="../view/js/vendor/isotope.min.js"></script>

        <script src="../view/js/main.js"></script>
    </body>

<!-- index-431:47-->
</html>