
 
    <article class="bg-light">
        <section class="row mb-3">
        <div class="col-md-12">   <h2 style="text-align: center;padding: 10px;">THỐNG KÊ</h2></div>
            <div class="col-md-3">
                <div class="p-1  border shadow-sm bg-white">
                    <p class="text-center">Sản phẩm</p>
                    <h4 class="text-center">
                    <?php 
                    $sp =ShowAllProduct();
                    $soluong = count($sp);
                    echo $soluong;
                    ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">Thương hiệu</p>
                    <h4 class="text-center">
                    <?php 
                    $th = ShowAllProducer();
                    $thsl = count($th);
                    echo $thsl;
                    ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">Khách hàng</p>
                    <h4 class="text-center">
                    <?php 
                    $user = ShowAllUser();
                    $usersl = count($user);
                    echo $usersl;
                    ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">Đơn hàng</p>
                    <h4 class="text-center">
                    <?php 
                    $cart = ShowAllcart();
                    $cartsl = count($cart);
                    echo $cartsl;
                    ?>
                    </h4>
                </div>
            </div>
      
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">Màu</p>
                    <h4 class="text-center">
                    <?php 
                    $color = ShowAllColor();
                    $colorsl = count($color);
                    echo $colorsl;
                    ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">Catalog</p>
                    <h4 class="text-center">
                    <?php 
                    $color = ShowAllcata();
                    $colorsl = count($color);
                    echo $colorsl;
                    ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">Banner</p>
                    <h4 class="text-center">
                    <?php 
                    $banner = ShowAllbanner();
                    $bannersl = count($banner);
                    echo $bannersl;
                    ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-1 border shadow-sm bg-white">
                    <p class="text-center">slider</p>
                    <h4 class="text-center">
                    <?php 
                    $slider = ShowAllSlider();
                    $slidersl = count($slider);
                    echo $slidersl;
                    ?>
                    </h4>
                </div>
            </div>
        </section>
        <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
            <h4 class="mb-3">Sản phẩm mới nhất</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    foreach ($sp as $sp_) {
                        echo 
                        '<tr>
                            <td>'.$i.'</td>
                            <td>'.$sp_['name'].'</td>
                            <td><a href="index.php?act=prodetail&idpro='.$sp_['id'].'"><img src="upload/'.$sp_['image'].'" width="100px" alt=""></a></td>
                        </tr>';
                        $i++;
                    }
                   
                    ?>
                    
                </tbody>
            </table>
            
        </section>
        
      