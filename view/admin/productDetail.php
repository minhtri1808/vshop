<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Quản lý Chi tiết Sản phẩm</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Màu sắc</th>
                    <th>Hình ảnh sản phẩm</th>
                    <th>Giá</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($p_details as $p_detail){
                        echo '<tr>
                        <td>'.$p_detail['id'].'</td>
                        <td>'.$p_detail['productName'].'</td>
                        <td>'.$p_detail['colorName'].'</td>
                        <td><a href="#"><img src="view/admin/asset/images/'.$p_detail['image'].'" width="100px" alt=""></a></td>
                        <td>'.$p_detail['price'].'</td>
                        <td>
                            <a href="admin.php?act=productDetail&func=edit&id='.$p_detail['id'].'"><i class="fas fa-edit"></i></a>
                            <a href="admin.php?act=productDetail&func=delete&id='.$p_detail['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
        
    </section>
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
    <h4 class="mb-3">Thêm chi tiết sản phẩm</h4>
                <form action="admin.php?act=productDetail&func=add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="p_detail_id" value="<?php if(isset($product_detail)) echo $product_detail['id']; ?>">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="productID">Tên Sản Phẩm</label>
                                <select name="productID" id="" class="form-control">
                                    <?php
                                        foreach($products as $product): ?>
                                            <option value="<?php echo $product['id'];?>"<?php
                                            if(isset($product_detail)){if($product_detail['id_product']==$product['id']){
                                                echo 'selected';
                                            }}
                                            if(isset($productID)){if($productID==$product['id']){
                                                echo 'selected';
                                            }}
                                            ?>><?php echo $product['productName']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="colorID">Màu sắc</label>
                                <select name="colorID" id="" class="form-control">
                                    
                                    <?php
                                        foreach($colors as $color): ?>
                                            <option value="<?php echo $color['id'];?>"<?php
                                            if(isset($product_detail)){if($product_detail['id_color']==$color['id']){
                                                echo 'selected';
                                            }}
                                            if(isset($colorID)){if($colorID==$color['id']){
                                                echo 'selected';
                                            }}
                                            ?>><?php echo $color['name_color']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <p>Hình ảnh <span class="text-danger">*</span></p>
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input" name="productImage">
                                <label class="custom-file-label" for="productImage">Tải hình</label>
                            </div>
                            <span class="text-danger"><?php if(isset($productImageErr)) echo $productImageErr; ?></span>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="price">Giá</label>
                                <input type="number" name="price" class="form-control" value="<?php if(isset($product_detail)) echo $product_detail['price']; echo $price;?>">
                            </div>
                        </div>
                        
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                </form>
            </div>

        </div>

    </section>