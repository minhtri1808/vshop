<!-- <div class="static-top-wrap">
                <div class="">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="static-top-content mt-sm-30">
                                Gift Special: Gift every single day on Weekends - New Coupon code "
                                <span>LimupaSaleoff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 -->

<div class="slider-with-banner">
    <div class="">
        <div class="slider-area pt-sm-30 pt-xs-30">
            <div class="slider-active owl-carousel">
                <!-- Begin Single Slide Area -->
                <?php
                    $sliders=slider_all();
                    $i=1;
                    // var_dump($sliders);
                    foreach ($sliders as $slider){
                        echo '
                        <div class="single-slide align-center-left animation-style-01 bg-'.$i.'"
                style="background-image: url(../upload/'.$slider['image'].');">
                    <div class="slider-progress"></div>
                    <div class="slider-content">
                        <!-- <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                        <h2>Chamcham Galaxy S9 | S9+</h2>
                        <h3>Starting at <span>$1209.00</span></h3> -->
                        <!-- <div class="default-btn slide-btn">
                            <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                        </div> -->
                    </div>
                </div>
                        ';
                        $i++;
                    }
                ?>
                
                
            </div>
        </div>
    </div>
    
</div>
<!-- Slider With Banner Area End Here -->
<!-- Begin Static Top Area -->

<!-- Static Top Area End Here -->
<!-- product-area start -->
<div class="product-area pt-55 pb-25 pt-xs-50">
    <div class="container">
        <div class="row" id="newproduct">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                        <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản phấm mới nhất</span></a></li>
                        <!-- <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a></li>
                                    <li><a data-toggle="tab" href="#li-featured-product"><span>Featured Products</span></a></li> -->
                    </ul>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                <div class="row" >
                    <div class="product-active owl-carousel">
                        <?php
                            $pronew=getNewpro();
                            foreach ($pronew as $pronew){
                                $idpro=$pronew['id'];
                                $name=$pronew['name'];
                                $img=$pronew['image'];
                                $price=$pronew['price'];
                                $star=$pronew['rank_start'];?>
                                <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <form action="index.php?act=viewcart" method="post">
                            <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                            <input type="hidden" name="name" value="<?php echo $name ?>">
                            <input type="hidden" name="price" value="<?php echo $price ?>">                               
                            <input type="hidden" name="image" value="<?php echo $img ?>">
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="index.php?act=prodetail&idpro=<?php echo $idpro?>">
                                        <img src="../upload/<?php echo $img ?>" alt="">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
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
                                        <h4><a class="product_name" href="index.php?act=prodetail&idpro=<?php echo $idpro?>"><?php echo $name ?></a></h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2"><?php echo number_format("$price",0,",",".")?> VND</span>
                                            <!-- <span class="old-price">$77.22</span>
                                            <span class="discount-percentage">-7%</span> -->
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#"><input type="submit" name="submit" value="Mua hàng" class="btn btn-primary"></a></li>
                                            <li><a class="links-details" href="index.php?act=prodetail&idpro=<?php echo $idpro?>"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" id="<?php echo $idpro ?>"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </form>

                        </div>
                            <?php } ?>
                            
                        




                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- product-area end -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner li-static-banner-4 text-center pt-20">
    <div class="row">
        <!-- Begin Single Banner Area -->
        <div class="col-lg-6">
            <div class="single-banner pb-sm-30 pb-xs-30">
            <?php
                $banner=showbanner(1);
            ?>
                <a href="#">
                    <img src="../upload/<?php echo $banner['image']?>" alt="Li's Static Banner">
                </a>
            </div>
        </div>
        <!-- Single Banner Area End Here -->
        <!-- Begin Single Banner Area -->
        <div class="col-lg-6">
            <div class="single-banner">
            <?php
                $banner=showbanner(2);
            ?>
                <a href="#">
                    <img src="../upload/<?php echo $banner['image']?>" alt="Li's Static Banner">
                </a>
            </div>
        </div>
        <!-- Single Banner Area End Here -->
    </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-60 pb-45 pt-sm-50 pt-xs-60">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <?php
                    

                    $namecatalog=cataloghome(2);
                    $id=$namecatalog['id'];
                    // echo $id;
                    $listproducercata=catalogProducer($id);
                    echo '
                    <h2>
                    <span>'.$namecatalog['name'].'</span>
                    </h2>
                    <ul class="li-sub-category-list">
                    <li><button type="button" class="active" id="btn1" data-filter="*">
                    All
                    </button></li>
                    ';
                    foreach ($listproducercata as $listproducercata){
                        $name=$listproducercata['name'];
                        echo '
                        <li class="active "><button type="button" data-filter=".'.$name.'">'.$name.'</button></li>
                        ';

                    }
                        
                    echo'
                    </ul>';
                    


                    ?>
                </div>
                <div class="row">
                    
                    <?php 
                            // echo $id;
                            if(isset($_GET['idcatalog'])&&isset($_GET['idproducer'])&&$_GET['idcatalog']== $id){
                                if($_GET['idcatalog']== $id){
                                    $productbycata=getProbyIDCata($id);
                                }
                            }
                            else{
                                $productbycata=getProbyIDCata($id);
                            }
                            // echo $productbycata;
                            $countpro= sizeof($productbycata);
                            if($countpro > 0){
                                
                            foreach ($productbycata as $productbycata){
                                $idpro=$productbycata['id'];
                                $name = $productbycata['name'];
                                $img=$productbycata['image'];
                                $price=$productbycata['price'];
                                $star=$productbycata['rank_start'];?>
                                
                                
                            <div class="product_item col-lg-3 col-md-3 col-sm-6 mt-40 ">
                            <div class="col-lg-12 <?php echo $productbycata['name_producer']?>">
                            <!-- single-product-wrap start -->
                                <form action="index.php?act=viewcart" method="post">
                                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                                <input type="hidden" name="name" value="<?php echo $name ?>">
                                <input type="hidden" name="price" value="<?php echo $price ?>">                               
                                <input type="hidden" name="image" value="<?php echo $img ?>">
                            <div class="single-product-wrap ">
                                <div class="product-image">
                                    <a href="index.php?act=prodetail&idpro=<?php echo $idpro?>">
                                        <img src="../upload/<?php echo $img ?>" alt="">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
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
                                        <h4><a class="product_name" href="index.php?act=prodetail&idpro=<?php echo $idpro?>"><?php echo $name ?></a></h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2"><?php echo number_format("$price",0,",",".")?> VND</span>
                                            <!-- <span class="old-price">$77.22</span>
                                            <span class="discount-percentage">-7%</span> -->
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a><input type="submit" name="submit" value="Mua hàng" class="btn btn-primary"></a></li>
                                            <li><a class="links-details" href="index.php?act=prodetail&idpro=<?php echo $idpro?>"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" id="<?php echo $idpro ?>" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div></form>
                        </div>
                            </div>
                            
                    <?php }
                            }

                        else{
                            echo '<h2> Hiện tại không có sản phẩm</h2>';
                        }
                    ?>
                        
                    </div>
                </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->
<!-- Begin Li's TV & Audio Product Area -->
<section class="product-area li-laptop-product li-tv-audio-product pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                <?php
                    $namecatalog2=cataloghome(1);
                    $id2=$namecatalog2['id'];
                    // echo $id2;
                    $listproducercata2=catalogProducer($id2);
                    echo '
                    <h2>
                    <span>'.$namecatalog2['name'].'</span>
                    </h2>
                    <ul class="li-sub-category-list button-group">
                    ';
                    foreach ($listproducercata2 as $listproducercata){
                        $name=$listproducercata['name'];
                        echo '
                        <li class="active '.$name.'" data-filter=".'.$name.'"><a href="index.php?idcatalog='.$namecatalog2['id'].'&idproducer='.$listproducercata['id'].'">'.$name.'</a></li>
                        ';

                    }
                        
                    echo'
                    </ul>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                    ';
                
                            if(isset($_GET['idcatalog'])&&isset($_GET['idproducer'])&&$_GET['idcatalog']== $id2){
                                    $productbycata2=getProbyIDCata($id2);
                            }
                            else{
                                $productbycata2=getProbyIDCata($id2);
                            }
                            // var_dump($productbycata2) ;
                            $countpro= sizeof($productbycata2);
                            if($countpro > 0){
                                
                            foreach ($productbycata2 as $productbycata2){
                                $idpro=$productbycata2['id'];
                                $name = $productbycata2['name'];
                                $img=$productbycata2['image'];
                                $price=$productbycata2['price'];
                                $star=$productbycata2['rank_start'];
                                $nameProducer=$productbycata2['name_producer'];
                                ?>
                                
                                <form action="index.php?act=viewcart" method="post">
                                <input type="hidden" name="idpro" value="<?php echo $idpro ?>">
                                <input type="hidden" name="name" value="<?php echo $name ?>">
                                <input type="hidden" name="price" value="<?php echo $price ?>">                               
                                <input type="hidden" name="image" value="<?php echo $img ?>">
                            <div class="col-lg-12 <?php echo $nameProducer ?>">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="index.php?act=prodetail&idpro=<?php echo $idpro?>">
                                        <img src="../upload/<?php echo $img ?>" alt="">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
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
                                        <h4><a class="product_name" href="index.php?act=prodetail&idpro=<?php echo $idpro?>"><?php echo $name ?></a></h4>
                                        <div class="price-box">
                                            <span class="new-price new-price-2"><?php echo number_format("$price",0,",",".")?> VND</span>
                                            <!-- <span class="old-price">$77.22</span>
                                            <span class="discount-percentage">-7%</span> -->
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="#"><input type="submit" name="submit" value="Mua hàng" class="btn btn-primary"></a></li>
                                            <li><a class="links-details" href="index.php?act=prodetail&idpro=<?php echo $idpro?>"><i class="fa fa-heart-o"></i></a></li>
                                            <li ><a class="quick-view" id="<?php echo $idpro ?>" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div></form>
                    <?php 
                        }
                        }
                        else{
                            echo '<h2> Hiện tại không có sản phẩm</h2>';
                        }
                            
                    ?>
                        
                        
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's TV & Audio Product Area End Here -->
<!-- Begin Li's Static Home Area -->
<div class="li-static-home">
    <div class="row">
        <div class="col-lg-12">
            <!-- Begin Li's Static Home Image Area -->
            <?php
                $banner3=showbanner(3);
            ?>
            <div class="li-static-home-image" style="background-image: url(../upload/<?php echo $banner3['image'] ?>);"></div>
            <!-- Li's Static Home Image Area End Here -->
            <!-- Begin Li's Static Home Content Area -->
            <!-- <div class="li-static-home-content">
                <p>Sale Offer<span>-20% Off</span>This Week</p>
                <h2>Featured Product</h2>
                <h2>Sanai Accessories 2018</h2>
                <p class="schedule">
                    Starting at
                    <span> $1209.00</span>
                </p>
                <div class="default-btn">
                    <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                </div> -->
            </div>
            <!-- Li's Static Home Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Static Home Area End Here -->
<!-- Begin Group Featured Product Area -->
<div class="group-featured-product pt-60 pb-40 pb-xs-25">
    <div class="container">
        <div class="row">
            <!-- Begin Featured Product Area -->
            <div class="col-lg-4">
                <?php
                    $namecatalog=cataloghome(2);
                    $id=$namecatalog['id'];
                    // echo $id;
                    $productbycata=getProductlimit3($id);
                    echo '
                    <div class="featured-product">
                    <div class="li-section-title">
                        <h2>
                            <span>'.$namecatalog['name'].'</span>
                        </h2>
                    </div>
                    <div class="featured-product-active-2 owl-carousel">
                    <div class="featured-product-bundle">';
                    // var_dump($productbycata);
                        foreach ($productbycata as $productbycata){
                            $idpro=$productbycata['id'];
                            $img=$productbycata['image_product_detail'];
                            $price=$productbycata['price'];
                            $name=$productbycata['name'];

                            echo'
                            
                            <div class="row">
                                <div class="group-featured-pro-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="../upload/'.$img.'">
                                        </a>
                                    </div>
                                    <div class="featured-pro-content">
                                        
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <h4><a class="featured-product-name" href="index.php?act=prodetail&idpro='.$idpro.'">'.$name.'</a></h4>
                                        <div class="featured-price-box">
                                            <span class="new-price">'.number_format("$price",0,",",".").' VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        ';}
                        
                        echo'
                        </div>
                    </div>
                </div>
                    ';
                ?>
                
            </div>
            <!-- Featured Product Area End Here -->
            <!-- Begin Featured Product Area -->
            <div class="col-lg-4">
            <?php
                    $namecatalog=cataloghome(1);
                    $id=$namecatalog['id'];
                    // echo $id;
                    $productbycata=getProductlimit3($id);
                    echo '
                    <div class="featured-product">
                    <div class="li-section-title">
                        <h2>
                            <span>'.$namecatalog['name'].'</span>
                        </h2>
                    </div>
                    <div class="featured-product-active-2 owl-carousel">
                    <div class="featured-product-bundle">';
                    // var_dump($productbycata);
                        foreach ($productbycata as $productbycata){
                            $idpro=$productbycata['id'];
                            $img=$productbycata['image_product_detail'];
                            $price=$productbycata['price'];
                            $name=$productbycata['name'];

                            echo'
                            
                            <div class="row">
                                <div class="group-featured-pro-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="../upload/'.$img.'">
                                        </a>
                                    </div>
                                    <div class="featured-pro-content">
                                        
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <h4><a class="featured-product-name" href="index.php?act=prodetail&idpro='.$idpro.'">'.$name.'</a></h4>
                                        <div class="featured-price-box">
                                            <span class="new-price">'.number_format("$price",0,",",".").' VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        ';}
                        
                        echo'
                        </div>
                    </div>
                </div>
                    ';
                ?>
            </div>
            <!-- Featured Product Area End Here -->
            <!-- Begin Featured Product Area -->
            <div class="col-lg-4">
            <?php
                    $namecatalog=cataloghome(3);
                    $id=$namecatalog['id'];
                    // echo $id;
                    $productbycata=getProductlimit3($id);
                    echo '
                    <div class="featured-product">
                    <div class="li-section-title">
                        <h2>
                            <span>'.$namecatalog['name'].'</span>
                        </h2>
                    </div>
                    <div class="featured-product-active-2 owl-carousel">
                    <div class="featured-product-bundle">';
                    // var_dump($productbycata);
                        foreach ($productbycata as $productbycata){
                            $idpro=$productbycata['id'];
                            $img=$productbycata['image_product_detail'];
                            $price=$productbycata['price'];
                            $name=$productbycata['name'];

                            echo'
                            
                            <div class="row">
                                <div class="group-featured-pro-wrapper">
                                    <div class="product-img">
                                        <a href="product-details.html">
                                            <img alt="" src="../upload/'.$img.'">
                                        </a>
                                    </div>
                                    <div class="featured-pro-content">
                                        
                                        <div class="rating-box">
                                            <ul class="rating">
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <h4><a class="featured-product-name" href="index.php?act=prodetail&idpro='.$idpro.'">'.$name.'</a></h4>
                                        <div class="featured-price-box">
                                            <span class="new-price">'.number_format("$price",0,",",".").' VND</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        ';}
                        
                        echo'
                        </div>
                    </div>
                </div>
                    ';
                ?>
            </div>
            <!-- Featured Product Area End Here -->
        </div>
    </div>
</div>
<!-- Group Featured Product Area End Here -->
