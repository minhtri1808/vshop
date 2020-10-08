<?php
session_start();
include "../global.php";
$soluong = $_POST['soluong'];
$vitri = $_POST['vitri'];
$kq = '';
if ($soluong > 0) {
for ($i = 0; $i < sizeof($_SESSION["giohang"]); $i++) {
    if ($i == $vitri) {
    array_splice($_SESSION["giohang"][$i], 4, 1, $soluong);
    break;
    }
}
}
$tongtien = 0;
for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
    $price=$_SESSION['giohang'][$i][3];
    $ttien = $_SESSION['giohang'][$i][3] * $_SESSION['giohang'][$i][4];
    $tongtien += $ttien;
$kq .= '
            <tr>
            <td class="li-product-remove"><a href="index.php?act=viewcart&del='.$i.'"><i class="fa fa-times"></i></a></td>
            <td class="li-product-thumbnail"><a href="#"><img src="../upload/'.$_SESSION['giohang'][$i][2].' " style="width: 100px;"></a></td>
            <td class="li-product-name"><a href="#">'.$_SESSION['giohang'][$i][1].'</a></td>
            <td class="li-product-price"><span class="amount">'.number_format($price).'</span></td>
            <td class="quantity">
                <label>Quantity</label>
                <div class="cart-plus-minus">
                    <input class="cart-plus-minus-box soluong" onchange="gotoxuly(this,'.$i.')" value="'.$_SESSION['giohang'][$i][4].'" type="number">
                </div>
            </td>
            <td class="product-subtotal"><span class="amount">'.number_format($ttien).'</span></td>
            </tr>
    
    ';
}

echo $kq;
?>
