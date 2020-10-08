<?php
include 'config.php';
$resp = [];
$search_query = mysqli_real_escape_string($conn, $_POST['search_query']);
$sql = "SELECT *,product.id as id FROM product INNER JOIN product_detail 
ON product.id=product_detail.id_product WHERE name LIKE '$search_query%'";
$query = mysqli_query($conn, $sql);
if ($_POST['search_query']) {
    while ($data = mysqli_fetch_array($query)) {
        $price= $data['price'];
        $resp[] = "<li class='select_country'><a href='index.php?act=prodetail&idpro=".$data['id']."'>
        <table>
            <tr>
                <td><img width='60px' src='../upload/" . $data['image'] . "' ></td>
                <td>" . $data['name'] . "</td>
                <td></td>
                <td>Giá: </td>
                <td>" . number_format("$price",0,",",".") . " VND</td>
            </tr>
            
        </table></a></li>";
    }
}
echo json_encode($resp);