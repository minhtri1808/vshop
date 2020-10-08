            <div class="col-lg-12 col-12">
            <div class="your-order">
                <h3 class="text-center">Đơn hàng của bạn</h3>
                <div class="your-order-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="cart-product-name">Sản phẩm</th>
                                <th class="cart-product-name"> Số lượng</th>
                                <th class="cart-product-total">Đơn giá</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                
                                $tongtien = 0;
                                for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                                $price=$_SESSION['giohang'][$i][3];
                                $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
                                $tongtien += $ttien;
                                
                                // var_dump($_SESSION['giohang']) ;
                                ?>
                            <tr class="cart_item">
                            <td class="cart-product-name"> <?php echo $_SESSION['giohang'][$i][1]?> <strong class="product-quantity"></strong></td>
                            <input type="hidden" value="<?php echo $_SESSION['giohang'][$i][1]?> * <?php echo $_SESSION['giohang'][$i][4] ?>" name="product">
                            <td class="cart-product-name"><?php echo $_SESSION['giohang'][$i][4] ?></strong></td>
                            <td class="cart-product-total"><span class="amount"><?php echo number_format($ttien)?></span></td>
                            </tr>
                            
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <th>Tổng đơn hàng</th>
                                <td></td>
                                <td><strong><span class="amount"><?php echo number_format($tongtien)?></span></strong></td>
                                <input type="hidden" name="total" value="<?php echo $tongtien?>">

                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="payment-method">
                    <div class="payment-accordion">
                        <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="#payment-1">
                            <h5 class="panel-title">
                                <a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Thanh toán khi nhận hàng
                                </a>
                            </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <p>Được phép kiểm tra snar phẩm trước khi thanh toán và nhận hàng.</p>
                            </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Họ và tên <span class="required"></span></label>
                                <input placeholder="" type="text" value="<?php
                                if(isset($nameUser2)&&($nameUser2!="")){
                                    echo $nameUser2;
                                } else{
                                    echo $nameUser;
                                }
                                ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Địa chỉ <span class="required">*</span></label>
                                <input placeholder="Street address" type="text" name="addressUser2" value="
                                <?php
                                if(isset($addressUser2)&&($addressUser2!="")){
                                    echo $addressUser2;
                                } else{
                                    echo $addressUser;
                                }
                                ?>
                                ">
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Địa chỉ Email <span class="required"></span></label>
                                <input placeholder="" type="email" name="emailUser2" value="
                                <?php
                                if(isset($emailUser2)&&($emailUser2!="")){
                                    echo $emailUser2;
                                } else{
                                    echo $emailUser;
                                }
                                ?>
                                ">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Số điện thoại  <span class="required"></span></label>
                                <input type="text" name="phoneUser2" value="
                                <?php
                                if(isset($phoneUser2)&&($phoneUser2!="")){
                                    echo $phoneUser2;
                                } else{
                                    echo $phoneUser;
                                }
                                ?>
                                ">
                            </div>
                        </div>
                        </div>
                        <?php
                            if(isset($note)&&($note!="")){
                                echo '
                                <div class="order-notes">
                                    <div class="checkout-form-list">
                                        <label>Ghi chú đơn hàng:</label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Nội dung ghi chú..." name="note">'.$note.'</textarea>
                                    </div>
                                </div>
                                ';
                            }
                        ?>
                        <div class="order-button-payment">
                            <a href="index.php?act=cartconform">
                                <input value="Xác nhận" type="submit" name="dathang" id="submit">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>