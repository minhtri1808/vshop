<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Quản lý tài khoản</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Tên đăng nhập</th>
                    <th>Ảnh đại diện</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $user = ShowAllUser();
                    $usersl = count($user);
                    echo $usersl;
                
                    foreach ($users as $user){
                        echo '<tr>
                        <td>'.$user['id'].'</td>
                        <td>'.$user['name'].'</td>
                        <td>'.$user['user'].'</td>
                        <td><a href="#"><img src="view/admin/asset/images/'.$user['image'].'" width="100px" alt=""></a></td>
                        <td>'.$user['email'].'</td>
                        <td>'.$user['phone'].'</td>
                        <td>'.$user['address'].'</td>
                        <td>'.$user['role'].'</td>
                        <td>
                            <a href="admin.php?act=user&func=edit&id='.$user['id'].'"><i class="fas fa-edit"></i></a>
                            <a href="admin.php?act=user&func=delete&id='.$user['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
        
    </section>
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Thêm tài khoản</h4>
                <form action="admin.php?act=user&func=add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="userID" value="<?php if(isset($u)) echo $u['id']; ?>">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="userName">Tên người dùng</label>
                                <input type="text" name="userName" class="form-control" value="<?php if(isset($u)) echo $u['name']; echo $userName;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="user">Tên đăng nhập <span class="text-danger">*</span></label>
                                <input type="text" name="user" class="form-control" value="<?php if(isset($u)) echo $u['user']; echo $userTen?>">
                                <span class="text-danger"><?php if(isset($userErr)) echo $userErr; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="password1">Mật khẩu <span class="text-danger">*</span></label>
                                <input type="password" name="password1" class="form-control" value="<?php if(isset($u)) echo $u['password']; echo $password1;?>">
                                <span class="text-danger"><?php if(isset($password1Err)) echo $password1Err; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="password2">Xác nhận mật khẩu <span class="text-danger">*</span></label>
                                <input type="password" name="password2" class="form-control" value="<?php if(isset($u)) echo $u['password']; echo $password2;?>">
                                <span class="text-danger"><?php if(isset($password2Err)) echo $password2Err; ?></span>
                                <span class="text-danger"><?php if(isset($passwordErr)) echo $passwordErr; ?></span>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md-3">
                            <p>Hình đại diện</p>
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input" name="userImage">
                                <label class="custom-file-label" for="userImage">Tải hình</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" value="<?php if(isset($u)) echo $u['email']; echo $email;?>">
                                <span class="text-danger"><?php if(isset($emailErr)) echo $emailErr; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" pattern="[0-9]{10}" name="phone" placeholder="Số điện thoại 10 số" class="form-control" value="<?php if(isset($u)) echo $u['phone']; echo $phone;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <input type="text" name="address" class="form-control" value="<?php if(isset($u)) echo $u['address']; echo $address;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="role">Vai trò</label>
                                <input type="number" name="role" class="form-control" value="<?php if(isset($u)) echo $u['role']; echo $role;?>">
                            </div>
                        </div>
                    </div>   
                    
                    <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                </form>
    

    </section>