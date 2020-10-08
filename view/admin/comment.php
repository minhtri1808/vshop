<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Quản lý bình luận</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>Ngày đăng comment</th>
                    <th>Sản phẩm comment</th>
                    <th>Người comment</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $binhluan = ShowAllComment();
                    $sl_bl=count($binhluan);
                    foreach ($comments as $comment){
                        echo '<tr>
                        <td>'.$comment['id'].'</td>
                        <td>'.$comment['content'].'</td>
                        <td>'.$comment['date'].'</td>
                        <td>'.$comment['productName'].'</td>
                        <td>'.$comment['userName'].'</td>
                        <td>
                            <a href="admin.php?act=comment&func=delete&id='.$comment['id'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                    if ($sl_bl==0){
                        echo '<tr>
                        <td colspan="5"><h4 class="text-center">Không có binh luận.</h4></td><tr>';
                    }
                    else{
                        echo "";
                    }
                ?>
            </tbody>
        </table>
        
    </section>