<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Quản lý sản phẩm</h4>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Loại</th>
                    <th>Thương hiệu</th>
                    <th>Màn hình</th>
                    <th>Độ phân giải</th>
                    <th>OS</th>
                    <th>CPU</th>
                    <th>Ram</th>
                    <th>Rom</th>
                    <th>Pin</th>
                    <th>Số lượng bán</th>
                    <th>Đánh giá</th>
                    <th>Lượt xem</th>
                    <th>Giảm giá</th>
                    <th>Gift</th>
                    <th>Ngày nhập</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($products as $product){
                        echo '<tr>
                        <td>'.$product['id'].'</td>
                        <td>'.$product['productName'].'</td>
                        <td><a href="#"><img src="view/admin/asset/images/'.$product['image'].'" width="100px" alt=""></a></td>
                        <td>'.$product['catalogName'].'</td>
                        <td>'.$product['producerName'].'</td>
                        <td>'.$product['screen_size'].'</td>
                        <td>'.$product['screen_resolution'].'</td>
                        <td>'.$product['operating_system'].'</td>
                        <td>'.$product['cpu'].'</td>
                        <td>'.$product['ram'].'</td>
                        <td>'.$product['rom'].'</td>
                        <td>'.$product['battery'].'</td>
                        <td>'.$product['selling'].'</td>
                        <td>'.$product['rank_start'].'</td>
                        <td>'.$product['view'].'</td>
                        <td>'.$product['sale'].'</td>
                        <td>'.$product['giftName'].'</td>
                        <td>'.$product['date'].'</td>
                        <td>
                            <a href="admin.php?act=product&func=edit&id='.$product['id'].'"><i class="fas fa-edit"></i></a>
                            <a href="admin.php?act=product&func=delete&id='.$product['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
    </section>
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
    <h4 class="mb-3">Thêm sản phẩm</h4>
                <form action="admin.php?act=product&func=add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="productID" value="<?php if(isset($p)) echo $p['id']; ?>">
                <input type="hidden" name="ngay_nhap" value="<?php echo date("y/m/d");?>">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tensp">Tên sản phẩm</label><span class="text-danger"> *</span>
                                <input type="text" name="tensp" class="form-control" value="<?php if(isset($p)){echo $p['name'];} echo $name; ?>">
                                <span class="text-danger"><?php if(isset($nameErr)) echo $nameErr; ?></span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="note">Ghi chú</label>
                                <input type="text" name="note" class="form-control" value="<?php if(isset($p)) echo $p['note']; echo $note; ?>" >
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="screenSize">Kích thước màn hình</label>
                                <input type="text" name="screenSize" class="form-control" value="<?php if(isset($p)) echo $p['screen_size']; echo $screen_size; ?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="resolution">Độ phân giải</label>
                                <input type="text" name="resolution" class="form-control" value="<?php if(isset($p)) echo $p['screen_resolution']; echo $resolution;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="os">Hệ điều hành</label>
                                <input type="text" name="os" class="form-control" value="<?php if(isset($p)) echo $p['operating_system']; echo $os;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cpu">CPU</label>
                                <input type="text" name="cpu" class="form-control" value="<?php if(isset($p)) echo $p['cpu']; echo $cpu;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="ram">Ram</label>
                                <input type="text" name="ram" class="form-control" value="<?php if(isset($p)) echo $p['ram']; echo $ram;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rom">Rom</label>
                                <input type="text" name="rom" class="form-control" value="<?php if(isset($p)) echo $p['rom']; echo $rom;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="battery">Dung lượng pin</label>
                                <input type="text" name="battery" class="form-control" value="<?php if(isset($p)) echo $p['battery']; echo $battery;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="rating">Đánh giá</label>
                                <input type="number" name="rating" class="form-control" value="<?php if(isset($p)) echo $p['rank_start']; echo $rating;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="number" name="type" class="form-control" value="<?php if(isset($p)) echo $p['type']; echo $type;?>"> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="discount">Giảm giá</label>
                                <input type="number" name="discount" class="form-control" value="<?php if(isset($p)) echo $p['sale']; echo $discount;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <label for="hot">Sản phẩm hot</label>
                                <select name="hot" id="" class="form-control">
                                    <option value="0" <?php if(isset($p)){if($p['hot']==0)echo 'selected="selected"';} if(isset($hot)){if($hot==0) echo 'selected="selected"';} ?>>Không</option>
                                    <option value="1" <?php if(isset($p)){if($p['hot']==1)echo 'selected="selected"';} if(isset($hot)){if($hot==1) echo 'selected="selected"';}?>>Có</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tra_gop">Trả góp</label>
                                <select name="tra_gop" id="" class="form-control">
                                    <option value="0" <?php if(isset($p)){if($p['tra_gop']==0)echo 'selected="selected"';} if(isset($tra_gop)){if($tra_gop==0) echo 'selected="selected"';}?>>Không</option>
                                    <option value="1" <?php if(isset($p)){if($p['tra_gop']==1)echo 'selected="selected"';} if(isset($tra_gop)){if($tra_gop==1) echo 'selected="selected"';}?>>Có</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="catalogID">Loại</label>
                                <select name="catalogID" id="" class="form-control">
                                    
                                    <?php
                                        foreach($catalogs as $catalog): ?>
                                            <option value="<?php echo $catalog['id'];?>"<?php
                                            if(isset($p)){if($p['id_catalog']==$catalog['id']){
                                                echo 'selected';
                                            }}
                                            if(isset($catalogID)){if($catalogID==$catalog['id']){
                                                echo 'selected';
                                            }}
                                            ?>><?php echo $catalog['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="producerID">Thương hiệu</label>
                                <select name="producerID" id="producerID" class="form-control">
                                    <?php
                                        foreach($producers as $producer): ?>
                                            <option value="<?php echo $producer['id'];?>"<?php
                                            if(isset($p)){if($p['id_producer']==$producer['id']){
                                                echo 'selected';
                                            }}
                                            if(isset($producerID)){if($producerID==$producer['id']){
                                                echo 'selected';
                                            }}
                                            ?>><?php echo $producer['name']; ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="giftID">Quà tặng</label>
                                <select name="giftID" id="giftID" class="form-control">
                                    <?php
                                        foreach($gifts as $gift): ?>
                                            <option value="<?php echo $gift['id'];?>"<?php
                                            if(isset($p)){if($p['id_gift']==$gift['id']){
                                                echo 'selected';
                                            }}
                                            if(isset($giftID)){if($giftID==$gift['id']){
                                                echo 'selected';
                                            }}
                                            ?>><?php echo $gift['name']; ?></option>
                                    <?php endforeach;
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <p>Hình ảnh <span class="text-danger">*</span></p>
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input" name="productImage">
                                <label class="custom-file-label" for="productImage">Tải hình</label>
                            </div>
                            <span class="text-danger"><?php if(isset($productImageErr)) echo $productImageErr; ?></span>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="motasp">Mô tả</label>
                                <textarea name="motasp" class="form-control">
                                    <?php if(isset($p)){
                                        echo $p['detail'];
                                    }?>
                                </textarea>
                            </div>

                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                </form>
            </div>

        </div>

    </section>