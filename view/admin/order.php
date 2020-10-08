<article class="bg-light" style="margin-top: 80px;">
    <section class="bg-white p-4 mb-3 rounded-lg shadow-sm">
        <h4 class="mb-3">Chi tiết đơn hàng</h4>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 $cart = ShowAllcart();
                 $cartsl = count($cart);
                

                    foreach ($orders as $order){
                        echo '<tr>
                        <td>'.$order['id_order'].'</td>
                        <td>'.$order['productName'].'</td>
                        <td>'.$order['price'].'</td>
                        <td>'.$order['quantity'].'</td>
                        <td>
                            <a href="admin.php?act=order&func=delete&id='.$order['id_order'].'"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>';
                    }
                    if ($cartsl==0){
                        echo '<tr>
                        <td colspan="5"><h4 class="text-center">Không có đơn hàng.</h4></td><tr>';
                    }
                    else{
                        echo "";
                    }
                ?>
            </tbody>
        </table>
        
    </section>
