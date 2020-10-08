<div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Login Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                            <!-- Login Form s-->
                            <form method="post" action="index.php?act=login" name="login_form">
                                <div class="login-form">
                                    <h4 class="login-title">Đăng nhập</h4>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Tên đăng nhập hoặc email</label>
                                            <input class="mb-0" type="text" placeholder="Email Address" name="user">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Mật khẩu</label>
                                            <input class="mb-0" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                            <a href="#"> Forgotten pasward?</a>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0" type="submit" value="login" name="login">Login</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                // var_dump($user1);
                                    if(isset($txt_err_login) && $txt_err_login!="")
                                    echo"<h3>".$txt_err_login."</h3> ";
                                ?>
                            </form>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="index.php?act=login" method="POST" name="register">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <?php
                                        if(isset($_POST['register'])&&($_POST['register'])){
                                            echo '<h3>'.$err.'</h3>';
                                        }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Họ và tên</label>
                                            <input class="mb-0" type="text" placeholder="" name="fullname" id="fullname" >
                                        </div>
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Tên đăng nhập</label>
                                            <input class="mb-0" type="text" placeholder="" name="username" id="username">
                                        </div>
                                        <div class="col-md-12 col-12 mb-20">
                                            <label>Địa chỉ( Địa chỉ dùng để nhận hàng)</label>
                                            <input class="mb-0" type="text" placeholder="" name="address">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Số điện thoại</label>
                                            <input class="mb-0" type="text" placeholder="" name="phone" id="phone">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email *</label>
                                            <input class="mb-0" type="email" placeholder="Email Address" name="email" id="email" >
                                            
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Mật khẩu</label>
                                            <input class="mb-0" type="password" placeholder="Password" name="password" id="password">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Nhập lại mật khẩu</label>
                                            <input class="mb-0" type="password" placeholder="Confirm Password" id="confirm_pass" >
                                            

                                        </div>
                                        <div class="col-12">
                                            <button class="register-button mt-0" type="submit" value="register" name="register" id="submit">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
    <script>
        var inputs = document.forms['register'].getElementsByTagName('input');
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