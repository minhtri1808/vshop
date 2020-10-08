<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Quản lý banner</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Hình ảnh</th>
                    <th>Thứ tự</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // var_dump($banners);
                    foreach ($banners as $banner){
                        echo '<tr>
                        <td>'.$banner['id'].'</td>
                        <td>'.$banner['name'].'</td>
                        <td><a href="#"><img src="view/admin/asset/images/'.$banner['image'].'" width="100px" alt=""></a></td>
                        <td>'.$banner['count'].'</td>
                        <td>
                            <a href="admin.php?act=banner&func=edit&id='.$banner['id'].'"><i class="fas fa-edit"></i></a>
                            <a href="admin.php?act=banner&func=delete&id='.$banner['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
        
    </section>
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
    <h4 class="mb-3">Thêm / chỉnh sửa banner</h4>
                <form action="admin.php?act=banner&func=add" method="GET" enctype="multipart/form-data">
                <input type="hidden" name="bannerid" value="<?php if(isset($banner)) echo $banner['id']; ?>">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                            <label for="tensp">Tên banner</label><span class="text-danger"> *</span>
                                <input type="text" name="bannername" class="form-control" value="<?php if(isset($b)){echo $b['name'];} echo $bannername; ?>">
                                    <?php
                                        foreach($banners as $banner): ?>
                                            <option value="<?php echo $banner['id'];?>"<?php
                                            if(isset($banner)){if($banner['name']==$banner['name']){
                                                echo 'selected';
                                            }}
                                            if(isset($bannername)){if($bannername==$banner['name']){
                                                echo 'selected';
                                            }}
                                            ?>><?php echo $banner['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <p>Hình ảnh <span class="text-danger">*</span></p>
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input" name="bannerImage">
                                <label class="custom-file-label" for="productImage">Upload</label>
                            </div>
                            <span class="text-danger"><?php if(isset($bannerImageErr)) echo $bannerImageErr; ?></span>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="price">Count</label>
                                <input type="number" name="count" class="form-control" value="<?php if(isset($banner)) echo $banner['count']; echo $countbanner ;?>">
                            </div>
                        </div>
                        
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                </form>
            </div>

        </div>

    </section>