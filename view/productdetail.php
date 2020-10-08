<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Chi tiết sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            
                        <?php
                        
                        // var_dump($product);
                        $idpro=$product['id'];
                        $img=$product['image_product_detail'];
                        $name=$product['name'];
                        $price=$product['price'];
                        $idproducer=$product['id_producer'];
                        $idcata=$product['id_catalog'];
                        $idprodetail=$product['id_product_detail'];

                        
                    ?>
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                            <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <a class="popup-img venobox vbox-item" href="#" data-gall="myGallery">
                                            <img src="../upload/<?php echo $img ?>" alt="product image">
                                        </a>
                                    </div>
                                    
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">                                        
                                    <div class="sm-image"><img src="../upload/<?php echo $img ?>" alt="product image thumb"></div>
                                    
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content pt-60">
                                <div class="product-info">
                                    <h2><?php echo $name?></h2>
                                    
                                    <div class="rating-box pt-20">
                                        <ul class="rating rating-with-review-item">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="price-box pt-20">
                                        <span class="new-price new-price-2"><?php echo number_format("$price",0,",",".")?> VND</span>
                                    </div>
                                    <!-- <div class="product-desc">
                                        <p>
                                            <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                            </span>
                                        </p>
                                    </div> -->
                                    <div class="product-variants">
                                        <div class="produt-variants-size">
                                            <label>Màu:</label>
                                            <ul class="color_list">
                                                <li>
                                                    <?php
                                                        $productdetail=getdetail($idpro);
                                                        foreach ($productdetail as $productdetail) {
                                                            echo '
                                                            <a style="background-color:'.$productdetail['color_code'].'; cursor: pointer; padding: 4px" href="index.php?act=prodetail&idpro='.$productdetail['id_product'].'&idprodetail='.$productdetail['id'].'">'.$productdetail['name_color'].'</a>
                                                            ';
                                                        }
                                                    ?>
                                                </li>
                                        </div>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="index.php?act=viewcart" method="post" class="cart-quantity">
                                        <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                                        <input type="hidden" name="name" value="<?php echo $name ?>">
                                        <input type="hidden" name="price" value="<?php echo $price ?>">                               
                                        <input type="hidden" name="image" value="<?php echo $img ?>">

                                            <div class="quantity">
                                                <!-- <label>Quantity</label>
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="1" type="text">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div> -->
                                            </div>
                                            
                                            <button class="add-to-cart" type="submit"><input style="background: transparent;
                                                                                            border: none;
                                                                                            font-size: 1.5rem;
                                            " type="submit" name="submit" value="Mua hàng"></button>
                                        </form>
                                    </div>
                                    <div class="product-additional-info pt-25">
                                       
                                        <div class="product-social-sharing pt-25">
                                            <ul>
                                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- <div class="block-reassurance">
                                        <ul>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-check-square-o"></i>
                                                    </div>
                                                    <p>Security policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-truck"></i>
                                                    </div>
                                                    <p>Delivery policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="reassurance-item">
                                                    <div class="reassurance-icon">
                                                        <i class="fa fa-exchange"></i>
                                                    </div>
                                                    <p> Return policy (edit with Customer reassurance module)</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-35">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                    
                                    <li><a data-toggle="tab" href="#product-details"><span>Thông số</span></a></li>
                                    <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        
                        <div id="product-details" class="tab-pane active" role="tabpanel">
                        <table class="table">
                                <tbody>
                                    <h4 class="py-5 text-center">Thông số kỹ thuật</h4>
                                    <tr>
                                        <th scope="row">Màn hình:</th>
                                        <td>
                                            <p><?php echo $product['screen_size']?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Độ phân giải màn hình:</th>
                                        <td>
                                            <p><?php echo $product['screen_resolution']?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hệ điều hành:</th>
                                        <td>
                                            <p><?php echo $product['operating_system']?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CPU:</th>
                                        <td>
                                            <p><?php echo $product['cpu']?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">RAM:</th>
                                        <td>
                                            <p><?php echo $product['ram']?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ROM:</th>
                                        <td>
                                            <p><?php echo $product['rom'] ?></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dung lượng pin:</th>
                                        <td>
                                            <p><?php echo $product['battery']?></p>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <th scope="row">Hệ điều hành:</th>
                                        <td>
                                            <a href="#"><img src="../view/img/master-card.png" alt=""></a>
                                            <p>Any international shipping and import charges are paid in part to Pitney Bowes Inc.</p>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div id="reviews" class="tab-pane" role="tabpanel">
                            <div class="product-reviews">
                                <div class="product-details-comment-block">
                                    <div class="comment-review">
                                        <span>Grade</span>
                                        <ul class="rating">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                    <div class="comment-author-infos pt-25">
                                        <span>HTML 5</span>
                                        <em>01-12-18</em>
                                    </div>
                                    <div class="comment-details">
                                        <h4 class="title-block">Demo</h4>
                                        <p>Plaza</p>
                                    </div>
                                    <div class="review-btn">
                                        <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Write Your Review!</a>
                                    </div>
                                    <!-- Begin Quick View | Modal Area -->
                                    <div class="modal fade modal-wrapper" id="mymodal" >
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <h3 class="review-page-title">Write Your Review</h3>
                                                    <div class="modal-inner-area row">
                                                        <div class="col-lg-6">
                                                           <div class="li-review-product">
                                                               <img src="images/product/large-size/3.jpg" alt="Li's Product">
                                                               <div class="li-review-product-desc">
                                                                   <p class="li-product-name">Today is a good day Framed poster</p>
                                                                   <p>
                                                                       <span>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Design </span>
                                                                   </p>
                                                               </div>
                                                           </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="li-review-content">
                                                                <!-- Begin Feedback Area -->
                                                                <div class="feedback-area">
                                                                    <div class="feedback">
                                                                        <h3 class="feedback-title">Our Feedback</h3>
                                                                        <form action="#">
                                                                            <p class="your-opinion">
                                                                                <label>Your Rating</label>
                                                                                <span>
                                                                                    <select class="star-rating">
                                                                                      <option value="1">1</option>
                                                                                      <option value="2">2</option>
                                                                                      <option value="3">3</option>
                                                                                      <option value="4">4</option>
                                                                                      <option value="5">5</option>
                                                                                    </select>
                                                                                </span>
                                                                            </p>
                                                                            <p class="feedback-form">
                                                                                <label for="feedback">Your Review</label>
                                                                                <textarea id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                            </p>
                                                                            <div class="feedback-input">
                                                                                <p class="feedback-form-author">
                                                                                    <label for="author">Name<span class="required">*</span>
                                                                                    </label>
                                                                                    <input id="author" name="author" value="" size="30" aria-required="true" type="text">
                                                                                </p>
                                                                                <p class="feedback-form-author feedback-form-email">
                                                                                    <label for="email">Email<span class="required">*</span>
                                                                                    </label>
                                                                                    <input id="email" name="email" value="" size="30" aria-required="true" type="text">
                                                                                    <span class="required"><sub>*</sub> Required fields</span>
                                                                                </p>
                                                                                <div class="feedback-btn pb-15">
                                                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">Close</a>
                                                                                    <a href="#">Submit</a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- Feedback Area End Here -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <!-- Quick View | Modal Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-30 pb-50">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span style="opacity: 0;">Sản phẩm tương tự</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <?php
                                        $product=getproductsimilar($idcata,$idproducer);
                                        foreach($product as $product){
                                            $idpro=$product['id'];
                                            $img=$product['image_product_detail'];
                                            $name=$product['name'];
                                            $price=$product['price'];
                                            $idprodetail2=$product['id_product_detail'];

                                            echo '
                                            <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="index.php?act=prodetail&idpro='.$idpro.'">
                                                    <img src="../upload/'.$img.'">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="index.php?act=prodetail&idpro='.$idpro.'">'.$name.'';
                                                    if($idprodetail2==$idprodetail){
                                                        echo '<span style="padding:5px; font-size:14px; color: gray;">( Đang xem )</span>';
                                                    }
                                                    echo '</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">'.number_format("$price",0,",",".").' VND</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                    <li style="opacity: 0;"></li>
                                                    <li class="add-cart active"><a href="index.php?act=prodetail&idpro='.$idpro.'">Xem chi tiết</a></li>
                                                        <li style="opacity: 0;"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                            ';
                                        }
                                    ?>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->