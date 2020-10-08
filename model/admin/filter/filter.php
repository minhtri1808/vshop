<?php
function filterProduct()
{
    $sql = "SELECT DISTINCT(product_brand) FROM product WHERE product_status = '1' ORDER BY product_id DESC";
    return pdo_query($sql);
}
?>