<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Quản lý nhà sản xuất</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên hãng sản xuất</th>
                    <th>Logo hãng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($producers as $producer){
                        echo '<tr>
                        <td>'.$producer['id'].'</td>
                        <td>'.$producer['name'].'</td>
                        <td><a href="#"><img src="view/admin/asset/images/'.$producer['image'].'" width="100px" alt=""></a></td>
                        <td>
                            <a href="admin.php?act=producer&func=edit&id='.$producer['id'].'"><i class="fas fa-edit"></i></a>
                            <a href="admin.php?act=producer&func=delete&id='.$producer['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                ?>
            </tbody>
        </table>
        
    </section>
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
    <h4 class="mb-3">Thêm hãng sản xuất</h4>
                <form action="admin.php?act=producer&func=add" method="post" enctype="multipart/form-data">
                <input type="hidden" name="producerID" value="<?php if(isset($nsx)) echo $nsx['id']; ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="producerName">Tên nhà sản xuất <span class="text-danger">*</span></label>
                                <input type="text" name="producerName" class="form-control" value="<?php if(isset($nsx)) echo $nsx['name']; echo $producerName; ?>" >
                                <span class="text-danger"><?php if(isset($producerNameErr)) echo $producerNameErr; ?></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p">Logo nhà sản xuất</p>
                            <div class="form-group custom-file">
                                <input type="file" class="custom-file-input" name="producerImage">
                                <label class="custom-file-label" for="producerImage">Tải hình</label>
                            </div>
                            
                        </div>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
                </form>
            </div>

        </div>

    </section>