<?php
    // function adddonhang($idUser, $nameUser, $emailUser, $addressUser, $phoneUser, $total, $nameUser2, $emailUser2, $addressUser2, $phoneUser2,$note,$product)
    // {
    //     $sql = "INSERT INTO `cart_order` (`id`, `id_user`, `name_user`, `phone`, `note`, `email`, `address`, `total`, `product`, `paymentmethod`, `nameuser2`, `addressuser2`, `emailuser2`, `phoneuser2`) VALUES (NULL, '$idUser', '$nameUser', '$phoneUser', '$note', '$emailUser', '$addressUser', '$total', '$product', '1', '$nameUser2', '$addressUser2', '$emailUser2', '$phoneUser2')";
    //     return  pdo_execute($sql);
    // }
    
    function adddonhang2($idUser, $nameUser, $emailUser, $addressUser, $phoneUser, $total, $nameUser2, $emailUser2, $addressUser2, $phoneUser2,$note)
    {
        $conn = pdo_get_connection();
        // set the PDO error mode to exception
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO `cart_order` (`id`, `id_user`, `name_user`, `phone`, `note`, `email`, `address`, `total`, `paymentmethod`, `nameuser2`, `addressuser2`, `emailuser2`, `phoneuser2`) VALUES (NULL, '$idUser', '$nameUser', '$phoneUser', '$note', '$emailUser', '$addressUser', '$total', '1', '$nameUser2', '$addressUser2', '$emailUser2', '$phoneUser2')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        return $last_id;
    }

    function adddonhangchitiet($iddonhang, $idpro, $name, $image, $price, $soluong)
    {
        $sql = "INSERT INTO `order_detail` (`id_order`, `id_product`, `name_product`, `image`, `price`, `quantity`) VALUES ('$iddonhang', '$idpro', '$name', '$image', '$price', '$soluong')";
        return  pdo_execute($sql);
    }

?>