<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
<div class="container">
    <div class="breadcrumb-content">
        <ul>
            <li><a href="index.html">Trang chủ</a></li>
            <li class="active">Checkout</li>
        </ul>
    </div>
</div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
<div class="container">
    <?php
    if(!isset($_SESSION['id'])){
        echo '
        <div class="row">
        <div class="col-12">
            <div class="coupon-accordion">
                <!--Accordion Start-->
                
                <div id="checkout-login">
                    <div class="coupon-info">
                        
                        <form method="post" action="index.php?act=loginandcheckout" name="login_form">
                            <p class="form-row-first">
                                <label>Tên đăng nhập hoặc email <span class="required">*</span></label>
                                <input type="text" name="user">
                            </p>
                            <p class="form-row-last">
                                <label>Mật khẩu  <span class="required">*</span></label>
                                <input type="password" name="password">
                            </p>
                            <p class="form-row">
                                <input value="Đăng nhập" type="submit" name="logincheckout">
                                <label>
                                    <input type="checkbox">
                                    Ghi nhớ
                                </label>
                            </p>
                            <!--<p class="lost-password"><a href="#">Lost your password?</a></p>-->';
                            if(isset($txt_err_login) && $txt_err_login!="")
                            echo"<h3>".$txt_err_login."</h3> ";
                        echo '</form>
                    </div>
                </div>
                <!--Accordion End-->
                <!--Accordion Start-->
                <!-- <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                <div id="checkout_coupon" class="coupon-checkout-content">
                    <div class="coupon-info">
                        <form action="#">
                            <p class="checkout-coupon">
                                <input placeholder="Coupon code" type="text">
                                <input value="Apply Coupon" type="submit">
                            </p>
                        </form>
                    </div>
                </div> -->
                <!--Accordion End-->
            </div>
        </div>
    </div>
        ';
    }
    ?>
    
    <!--  -->
    <form action="index.php?act=loginandcheckout" type="hidden" method="post" name="checkout">
        <div class="row" >
        <div class="col-lg-6 col-12 py-5">
            <form action="#">
                <div class="checkbox-form">
                    <h3>chi tiết đơn hàng</h3>
                    <div class="row">
                        <?php
                                // var_dump($_SESSION['id']);
                            if(isset($_SESSION['id'])&& ($_SESSION['id']>0)){
                                echo'
                                <!-- <div class="col-md-12">
                                <div class="country-select clearfix">
                                    <label>Country <span class="required">*</span></label>
                                    <select class="nice-select wide">
                                    <option data-display="Bangladesh">Bangladesh</option>
                                    <option value="uk">London</option>
                                    <option value="rou">Romania</option>
                                    <option value="fr">French</option>
                                    <option value="de">Germany</option>
                                    <option value="aus">Australia</option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Họ và tên <span class="required">*</span></label>
                                    <input type="hidden" value="'.$_SESSION['id'].'" name="idUser">
                                    <input placeholder="" type="text" value="'.$_SESSION['name'].'" name="nameUser" class="check">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input placeholder="Street address" class="check" type="text" value="'.$_SESSION['address'].'" name="addressUser" id="address">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ Email <span class="required">*</span></label>
                                    <input placeholder="" type="email" value="'.$_SESSION['email'].'" name="emailUser" class="check" id="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Số điện thoại  <span class="required">*</span></label>
                                    <input type="text"  class="check" value="'.$_SESSION['phone'].'" name="phoneUser">
                                </div>
                            </div>
                            </div>
                    <div class="different-address">
                        <div class="ship-different-title">
                            <h3>
                                <label>Gửi hàng đến một địa chỉ khác</label>
                                <input id="ship-box" type="checkbox">
                            </h3>
                        </div>
                        <div id="ship-box-info" class="row">
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Họ và tên <span class="required">*</span></label>
                                <input placeholder="" type="text">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Địa chỉ <span class="required">*</span></label>
                                <input placeholder="Street address" type="text" name="addressUser2" >
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Địa chỉ Email <span class="required">*</span></label>
                                <input placeholder="" type="email" name="emailUser2" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Số điện thoại  <span class="required">*</span></label>
                                <input type="text" name="phoneUser2" >
                            </div>
                        </div>
                        </div>
                        <div class="order-notes">
                            <div class="checkout-form-list">
                                <label>Ghi chú đơn hàng:</label>
                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Nội dung ghi chú..." name="note"></textarea>
                            </div>
                        </div>
                        ';
                    }
                    else{
                        echo '
                            <h2>Vui lòng đăng nhập trước khi đặt hàng</h2>
                        ';
                    }
                    ?>
                        
                        <!--  -->
                    </div>
                    
                </div>
            </form>
        </div>
        <div class="col-lg-6 col-12">
            <div class="your-order">
                <h3>Đơn hàng của bạn</h3>
                <div class="your-order-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="cart-product-name">Sản phẩm</th>
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
                            <td class="cart-product-name"> <?php echo $_SESSION['giohang'][$i][1]?> <strong class="product-quantity"> × <?php echo $_SESSION['giohang'][$i][4] ?></strong></td>
                            <input type="hidden" value="<?php echo $_SESSION['giohang'][$i][1]?> * <?php echo $_SESSION['giohang'][$i][4] ?>" name="product">
                            
                            <td class="cart-product-total"><span class="amount"><?php echo number_format($ttien)?></span></td>
                            </tr>
                            
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <th>Tổng đơn hàng</th>
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
                        <!-- <div class="card">
                            <div class="card-header" id="#payment-2">
                            <h5 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cheque Payment
                                </a>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="#payment-3">
                            <h5 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                PayPal
                                </a>
                            </h5>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </div>
                            </div>
                        </div>
                        </div> -->
                        <div class="order-button-payment">
                            <input value="Đặt hàng" type="submit" name="dathang" id="submit">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
<!--Checkout Area End-->


<script>
        var inputs = document.forms['checkout'].getElementsByClass['check'];
        var run_onchange = false;
        function valid(){
        var errors = false;
        var reg_mail = /^[A-Za-z0-9]+([_\.\-]?[A-Za-z0-9])*@[A-Za-z0-9]+([\.\-]?[A-Za-z0-9]+)*(\.[A-Za-z]+)+$/;
        for(var i=0; i<inputs.length; i++){
            var value = inputs[i].value;
            var id = inputs[i].getAttribute('id');
        
            // Tạo phần tử span lưu thông tin lỗi
            var span = document.createElement('span');
            // Nếu span đã tồn tại thì remove
            var p = inputs[i].parentNode;
            if(p.lastChild.nodeName == 'SPAN') {p.removeChild(p.lastChild);}
        
            // Kiểm tra rỗng
            if(value == ''){
            span.innerHTML ='Vui lòng nhập thông tin';
            }else{
            // Kiểm tra các trường hợp khác
            if(id == 'email'){
            if(reg_mail.test(value) == false){ span.innerHTML ='Email không hợp lệ (ví dụ: abc@gmail.com)';}
            var email =value;
            }
            if(id == 'confirm_email' && value != email){span.innerHTML ='Email nhập lại chưa đúng';}
            // Kiểm tra password
            if(id == 'password'){
            if(value.length <6){span.innerHTML ='Password phải từ 6 ký tự';}
            var pass =value;
            }
            // Kiểm tra password nhập lại
            if(id == 'confirm_pass' && value != pass){span.innerHTML ='Password nhập lại chưa đúng';}
            // Kiểm tra số điện thoại
            if(id == 'phone' && isNaN(value) == true){span.innerHTML ='Số điện thoại phải là kiểu số';}
            }
        
            // Nếu có lỗi thì chèn span vào hồ sơ, chạy onchange, submit return false, highlight border
            if(span.innerHTML != ''){
            inputs[i].parentNode.appendChild(span);
            errors = true;
            run_onchange = true;
            inputs[i].style.border = '1px solid #c6807b';
            inputs[i].style.background = '#fffcf9';
            span.style.color='red';
            }
        }// end for
        
        // if(errors == false){alert('Đăng ký thành công');}
        return !errors;
        }// end valid()
        
        // Chạy hàm kiểm tra valid()
        var register = document.getElementById('submit');
        register.onclick = function(){
        return valid();
        }
        
        // Kiểm tra lỗi với sự kiện onchange -> gọi lại hàm valid()
        for(var i=0; i<inputs.length; i++){
            var id = inputs[i].getAttribute('id');
            inputs[i].onchange = function(){
            if(run_onchange == true){
            this.style.border = '1px solid #999';
            this.style.background = '#fff';
            valid();
            }
            }
        }// end for
    </script>