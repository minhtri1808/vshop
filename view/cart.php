<div class="Shopping-cart-area pt-60 pb-60">
<div class="container">
<?php
    if(isset($_SESSION['giohang'])&& (count($_SESSION['giohang'])>0)){ 
        ?>
        
        <div class="row">
            <div class="col-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="li-product-remove">Xóa</th>
                                    <th class="li-product-thumbnail">Ảnh sản phẩm</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="li-product-price">Giá tiền</th>
                                    <th class="li-product-quantity">Số lượng </th>
                                    <th class="li-product-subtotal">Tổng</th>
                                </tr>
                            </thead>
                            <tbody id="giohang">
                                <?php
                                
                                $tongtien = 0;
                                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                                $price=$_SESSION['giohang'][$i][3];
                                $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                                $tongtien += $ttien;
                                
                                // var_dump($_SESSION['giohang']) ;
                                ?>
                                <tr>
                                    <td class="li-product-remove"><a href="index.php?act=viewcart&del=<?php echo $i ?>"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail"><a href="#"><img src="../upload/<?php echo $_SESSION['giohang'][$i][2] ?>" alt="Li's Product Image" style="width: 100px;"></a></td>
                                    <td class="li-product-name"><a href="#"><?php echo $_SESSION['giohang'][$i][1]?></a></td>
                                    <td class="li-product-price"><span class="amount"><?php echo number_format($price)?></span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box soluong" onchange="gotoxuly(this,<?php echo $i ?>)" value="<?php echo $_SESSION['giohang'][$i][4] ?>" type="number" style="cursor: pointer;">
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount"><?php echo number_format($ttien)?></span></td>
                                </tr>
                                <?php }?>            
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <!-- <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div> -->
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Cập nhật giỏ hàng" type="submit">
                                    <a href="index.php?act=viewcart&delall" type="submit" class="button">Xóa tất cả</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <!-- <h2>Đơn giá</h2>
                                <ul>
                                    <li>Tổng cộng <span><?php echo number_format($tongtien)?></span></li>
                                    <li>Thanh toán <span><?php echo number_format($tongtien)?></span></li>
                                </ul> -->
                                <a href="index.php?act=checkout" style="background-color: #293A6C; font-weight:bold">Tiến hành đặt hàng</a>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            
            <?php }
                else {
                    echo '<h2>Hiện tại chưa mua hàng</h2>';
                }
            
            
            ?>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    function gotoxuly(soluong, vitri) {
        // alert(soluong.value + '-' + vitri);
        $.post("../controller/xuly.php", {
            soluong: soluong.value,
            vitri: vitri
        }, function(result) {
            $("#giohang").html(result);
        });
        
    }
    </script>
    