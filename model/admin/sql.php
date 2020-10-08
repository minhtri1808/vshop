<?php
// product
function getAllProduct()
{
    $DBH = connect();
    $query = "SELECT a.id, a.name AS productName, a.image, b.name AS catalogName, c.name AS producerName, a.note, a.screen_size, a.screen_resolution,
        a.operating_system, a.cpu, a.ram, a.rom, a.battery, a.hot, a.tra_gop, a.selling, a.rank_start, a.view, a.type,
        a.sale, d.name AS giftName, a.date
        FROM product a LEFT JOIN catalog b ON a.id_catalog = b.id
        LEFT JOIN producer c on a.id_producer = c.id
        LEFT JOIN gift d on a.id_gift = d.id";
    $STH = $DBH->query($query);
    return $STH;
}
function ShowAllProduct()
{
    $sql = "SELECT * FROM product ORDER BY id DESC limit 5";
    return pdo_query($sql);
}
function ShowAllColor()
{
    $sql = "SELECT * FROM color_board ";
    return pdo_query($sql);
}
function ShowAllComment()
{
    $sql = "SELECT * FROM comment ";
    return pdo_query($sql);
}
function ShowAllcata()
{
    $sql = "SELECT * FROM catalog ";
    return pdo_query($sql);
}
function ShowAllbanner()
{
    $sql = "SELECT * FROM banner";
    return pdo_query($sql);
}
function ShowAllSlider()
{
    $sql = "SELECT * FROM slider";
    return pdo_query($sql);
}
function getProductByID($id)
{
    $DBH = connect();
    $query = "SELECT * FROM product where id='$id'";
    $STH = $DBH->query($query);
    $row = $STH->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function addProduct($name, $catalogID, $producerID, $productImage, $ngay_nhap, $note, $screen_size, $resolution, $os, $cpu, $ram, $rom, $battery, $rating, $type, $discount, $tra_gop, $hot, $motasp, $giftID)
{
    $DBH = connect();
    $query = "INSERT INTO product(`name`,id_catalog,id_producer,`image`,`date`,note,screen_size,screen_resolution,operating_system,cpu,ram,rom,battery,rank_start,`type`,sale,tra_gop,hot,detail,id_gift)
        VALUES ('$name','$catalogID','$producerID','$productImage','$ngay_nhap','$note','$screen_size','$resolution','$os','$cpu','$ram','$rom','$battery','$rating','$type','$discount','$tra_gop','$hot','$motasp','$giftID')";
    $STH = $DBH->exec($query);
}
function delProduct($id)
{
    $DBH = connect();
    $query = "DELETE FROM product WHERE id='$id'";
    $STH = $DBH->exec($query);
}
function updateProduct($id, $name, $productImage, $catalogID, $producerID, $note, $screen_size, $resolution, $os, $cpu, $ram, $rom, $battery, $hot, $tra_gop, $rating, $type, $discount, $giftID, $motasp)
{
    $DBH = connect();
    $query = "UPDATE product SET `name`='$name', `image`='$productImage', id_catalog='$catalogID', id_producer='$producerID', note='$note', screen_size='$screen_size', screen_resolution='$resolution', operating_system='$os', cpu='$cpu', ram='$ram', rom='$rom', battery='$battery', hot='$hot', tra_gop='$tra_gop', rank_start='$rating', `type`='$type', sale='$discount', id_gift='$giftID', detail='$motasp'
        WHERE id='$id'";
    $STH = $DBH->exec($query);
}
// product detail
function getAllProductDetail()
{
    $DBH = connect();
    $query = "SELECT a.id, b.name AS productName, c.name_color AS colorName, a.image, a.price
        FROM product_detail a LEFT JOIN product b ON a.id_product = b.id
        LEFT JOIN color_board c on a.id_color = c.id";
    $STH = $DBH->query($query);
    return $STH;
}
function getProductDetailByID($id)
{
    $DBH = connect();
    $query = "SELECT * FROM product_detail where id='$id'";
    $STH = $DBH->query($query);
    $row = $STH->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function addProductDetail($productID, $colorID, $productImage, $price)
{
    $DBH = connect();
    $query = "INSERT INTO product_detail(id_product,id_color,`image`,price)
        VALUES ('$productID','$colorID','$productImage','$price')";
    $STH = $DBH->exec($query);
}
function delProductDetail($id)
{
    $DBH = connect();
    $query = "DELETE FROM product_detail WHERE id='$id'";
    $STH = $DBH->exec($query);
}
function updateProductDetail($id, $productID, $productImage, $colorID, $price)
{
    $DBH = connect();
    $query = "UPDATE product_detail SET `image`='$productImage', id_product='$productID', id_color='$colorID', price='$price'
        WHERE id='$id'";
    $STH = $DBH->exec($query);
}
// producer
function getAllProducer()
{
    $DBH = connect();
    $query = "select* from producer";
    $STH = $DBH->query($query);
    return $STH;
}
function ShowAllProducer()
{
    $sql = "SELECT * FROM producer ORDER BY id DESC ";
    return pdo_query($sql);
}
function getProducerByID($id)
{
    $DBH = connect();
    $query = "SELECT * FROM producer where id='$id'";
    $STH = $DBH->query($query);
    $row = $STH->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function addProducer($producerName, $producerImage)
{
    $DBH = connect();
    $query = "INSERT INTO producer(`name`,`image`)
        VALUES ('$producerName','$producerImage')";
    $STH = $DBH->exec($query);
}
function delProducer($id)
{
    $DBH = connect();
    $query = "DELETE FROM producer WHERE id='$id'";
    $STH = $DBH->exec($query);
}
function updateProducer($id, $producerName, $producerImage)
{
    $DBH = connect();
    $query = "UPDATE producer SET `image`='$producerImage', `name`='$producerName'
        WHERE id='$id'";
    $STH = $DBH->exec($query);
}
// gift
function getAllGift()
{
    $DBH = connect();
    $query = "select* from gift";
    $STH = $DBH->query($query);
    return $STH;
}
// color
function getAllColor()
{
    $DBH = connect();
    $query = "select * from color_board";
    $STH = $DBH->query($query);
    return $STH;
}
// catalog
function getAllCatalog()
{
    $DBH = connect();
    $query = "select* from catalog";
    $STH = $DBH->query($query);
    return $STH;
}
function addToCatalog($catalogName, $parentID, $setHome, $count)
{
    $DBH = connect();
    $query = "insert into catalog(name,parent_id,sethome,count) values('$catalogName','$parentID','$setHome','$count')";
    $STH = $DBH->exec($query);
}
function delCatalog($id)
{
    $DBH = connect();
    $query = "delete from catalog where id='$id'";
    $STH = $DBH->exec($query);
}
function getCatalogByID($id)
{
    $DBH = connect();
    $query = "SELECT * FROM catalog where id='$id'";
    $STH = $DBH->query($query);
    $row = $STH->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function updateCatalog($id, $catalogName, $parentID, $setHome, $count)
{
    $DBH = connect();
    $query = "update catalog set name='$catalogName', parent_id='$parentID',sethome='$setHome',count='$count' where id='$id'";
    $STH = $DBH->exec($query);
}
// user
function ShowAllUser()
{
    $sql = "SELECT * FROM user ORDER BY id DESC";
    return pdo_query($sql);
}
function ShowAllcart()
{
    $sql = "SELECT * FROM order_detail";
    return pdo_query($sql);
}
function getAllUser()
{
    $DBH = connect();
    $query = "select * from user";
    $STH = $DBH->query($query);
    return $STH;
}
function addToUser($userName, $userTen, $password, $userImage, $email, $phone, $address, $role)
{
    $DBH = connect();
    $query = "insert into user(name,user,password,image,email,phone,address,role) values('$userName','$userTen','$password','$userImage','$email','$phone','$address','$role')";
    $STH = $DBH->exec($query);
}
function delUser($id)
{
    $DBH = connect();
    $query = "delete from user where id='$id'";
    $STH = $DBH->exec($query);
}
function getUserByID($id)
{
    $DBH = connect();
    $query = "SELECT * FROM user where id='$id'";
    $STH = $DBH->query($query);
    $row = $STH->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function updateUser($id, $userName, $userTen, $password, $userImage, $email, $phone, $address, $role)
{
    $DBH = connect();
    $query = "update user set name='$userName', user='$userTen',password='$password',image='$userImage',email='$email',phone='$phone',address='$address',role='$role' where id='$id'";
    $STH = $DBH->exec($query);
}
// comment
function getAllComment()
{
    $DBH = connect();
    $query = "SELECT a.id, a.content, a.date, b.name AS productName, c.name AS userName
        FROM comment a LEFT JOIN product b ON a.id_product = b.id
        LEFT JOIN user c on a.id_user = c.id";
    $STH = $DBH->query($query);
    return $STH;
}
function delComment($id)
{
    $DBH = connect();
    $query = "DELETE FROM comment WHERE id='$id'";
    $STH = $DBH->exec($query);
}
// banner
function getallbanner(){
    $DBH = connect();
    $query="SELECT * from banner";
    $STH = $DBH->query($query);
    return $STH;
}
function getbannerByID($id){
    $DBH=connect();
    $query="SELECT * FROM banner where id='$id'";
    $STH = $DBH->query($query);
    $row=$STH->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function addbanner ($bannername,$bannerImage,$countbanner){
    $DBH=connect();
    $query="INSERT INTO banner( `name`, `image`, `count`)
    VALUES ('$bannername','$bannerImage','$countbanner')";
    $STH = $DBH->exec($query);
}
function delbanner($id){
    $DBH=connect();
    $query="DELETE FROM banner WHERE id='$id'";
    $STH = $DBH->exec($query);
}
function updatebanner($id,$bannername,$bannerImage,$countbanner){
    $DBH=connect();
    $query="UPDATE banner SET `image`='$bannerImage', name='$bannername', count='$countbanner'
    WHERE id='$id'";
    $STH = $DBH->exec($query);
}
//order
    function getAllOrder(){
        $DBH = connect();
        $query="SELECT a.id_order, a.price, a.quantity, b.name AS productName
        FROM order_detail a LEFT JOIN product b ON a.id_product = b.id";
        $STH = $DBH->query($query);
        return $STH;
    }
    function delOrder($id){
        $DBH=connect();
        $query="DELETE FROM order_detail WHERE id_order='$id'";
        $STH = $DBH->exec($query);
    }
