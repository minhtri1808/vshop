<?php
function show_productdetail()
{
    $sql = "SELECT * FROM product_detail";
    return pdo_query($sql);
}
?>