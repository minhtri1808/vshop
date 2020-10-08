<?php
ob_start();
include "model/admin/pdo.php";
include "global.php";
include "model/admin/catalog.php";
include "model/admin/color_board.php";
include "model/admin/slider.php";
include "view/admin/header.php";
// model của long
include "model/admin/connect.php";
include "model/admin/sql.php";

if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            ShowAllProduct();
            include "view/admin/home.php";
            break;
        case 'catalog':
            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                catalog_delete($_GET['del']);
            }
            if (isset($_GET['id'])) {
                $idcat = $_GET['id'];
            } else {
                $idcat = 0;
            }
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $showcatalog = loadproductpage($idcat, $page);
            $phantrang = phantrang($idcat, $page);
            include "view/admin/catalog.php";
            break;
        case 'color_board':
            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                colorboard_delete($_GET['del']);
            }
            if (isset($_GET['id'])) {
                $color = $_GET['id'];
            } else {
                $color = 0;
            }
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $showcolorboard = loadColorpage($color, $page);
            $phantrang = phantrangColor($color, $page);
            include "view/admin/color_board.php";
            break;

        case 'slider':
            // function select()
            // {
            //     $target_file = "upload/" . basename($_FILES["files"]["name"]);
            //     move_uploaded_file($_FILES["files"]["tmp_name"], $target_file);
            // }
            // $img = '';
            // foreach ($_FILES['files']['tmp_name'] as $key => $image) {
            //     $imageName = $_FILES['files']['name'][$key];
            //     $imageTmpName = $_FILES['files']['tmp_name'][$key];
            //     $img .= $imageName . ',';
            //     $directory = "upload/";
            //     $result = move_uploaded_file($imageTmpName, $directory . $imageName);
            // }

            if (isset($_GET['del']) && ($_GET['del']) > 0) {
                slider_delete($_GET['del']);
            }
            if (isset($_GET['id'])) {
                $sliderID = $_GET['id'];
            } else {
                $sliderID = 0;
            }
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }
            $showslider = loadsliderpage($sliderID, $page);
            $phantrang = phantrangslider($sliderID, $page);
            include "view/admin/slider.php";
            break;
            // view của anh long
            case 'product':
                $name=$catalogID=$producerID=$productImage=$ngay_nhap=$note=$screen_size=$resolution=$os=$cpu=$ram=$rom=$battery=$rating=$type=$discount=$tra_gop=$hot=$motasp=$giftID="";
                $nameErr=$productImageErr="";
                if(isset($_GET['func'])){
                    $func = $_GET['func'];
                    if($_GET['func']=="add"){
                        if(empty($_POST['tensp'])){
                            $nameErr="Nhập tên sản phẩm";
                        }
                        else{
                            $name = $_POST['tensp'];
                        }
                        if(empty($_POST['catalogID'])){
                            $catalogID="";
                        }
                        else{
                            $catalogID = $_POST['catalogID'];
                        }
                        if(empty($_POST['producerID'])){
                            $producerID="";
                        }
                        else{
                            $producerID = $_POST['producerID'];
                        }
                        if(empty($_FILES['productImage']['name'])){
                            $productImageErr="Chọn hình sản phẩm";
                        }
                        else{
                            $productImage = $_FILES['productImage']['name'];
                        }
                        if(empty($_POST['ngay_nhap'])){
                            $ngay_nhap="";
                        }
                        else{
                            $ngay_nhap = $_POST['ngay_nhap'];
                        }
                        if(empty($_POST['note'])){
                            $note="";
                        }
                        else{
                            $note = $_POST['note'];
                        }
                        if(empty($_POST['screenSize'])){
                            $screen_size="";
                        }
                        else{
                            $screen_size = $_POST['screenSize'];
                        }
                        if(empty($_POST['resolution'])){
                            $resolution="";
                        }
                        else{
                            $resolution = $_POST['resolution'];
                        }
                        if(empty($_POST['os'])){
                            $os="";
                        }
                        else{
                            $os = $_POST['os'];
                        }
                        if(empty($_POST['cpu'])){
                            $cpu="";
                        }
                        else{
                            $cpu = $_POST['cpu'];
                        }
                        if(empty($_POST['ram'])){
                            $ram="";
                        }
                        else{
                            $ram = $_POST['ram'];
                        }
                        if(empty($_POST['rom'])){
                            $rom="";
                        }
                        else{
                            $rom = $_POST['rom'];
                        }
                        if(empty($_POST['battery'])){
                            $battery="";
                        }
                        else{
                            $battery = $_POST['battery'];
                        }
                        if(empty($_POST['rating'])){
                            $rating="";
                        }
                        else{
                            $rating = $_POST['rating'];
                        }
                        if(empty($_POST['type'])){
                            $type="";
                        }
                        else{
                            $type = $_POST['type'];
                        }
                        if(empty($_POST['discount'])){
                            $discount="";
                        }
                        else{
                            $discount = $_POST['discount'];
                        }
                        if(empty($_POST['tra_gop'])){
                            $tra_gop="";
                        }
                        else{
                            $tra_gop = $_POST['tra_gop'];
                        }
                        if(empty($_POST['hot'])){
                            $hot="";
                        }
                        else{
                            $hot = $_POST['hot'];
                        }
                        if(empty($_POST['motasp'])){
                            $motasp="";
                        }
                        else{
                            $motasp = $_POST['motasp'];
                        }
                        if(empty($_POST['giftID'])){
                            $giftID="";
                        }
                        else{
                            $giftID = $_POST['giftID'];
                        }
                        if(empty($_POST['productID']) && $_POST['tensp']!="" && $_FILES['productImage']['name']!=""){
                            addProduct($name,$catalogID,$producerID,$productImage,$ngay_nhap,$note,$screen_size,$resolution,$os,$cpu,$ram,$rom,$battery,$rating,$type,$discount,$tra_gop,$hot,$motasp,$giftID);
                            $path='view/admin/asset/images/'.$productImage;
                            move_uploaded_file($_FILES['productImage']['tmp_name'],$path);
                        }
                        else if($_POST['tensp']!="" && $_FILES['productImage']['name']!=""){
                            $id=$_POST['productID'];
                            updateProduct($id,$name,$productImage,$catalogID,$producerID,$note,$screen_size,$resolution,$os,$cpu,$ram,$rom,$battery,$hot,$tra_gop,$rating,$type,$discount,$giftID,$motasp);
                        }
                        if((empty($productImageErr)) && (empty($nameErr))){
                            header('location:admin.php?act=product');
                        }
                    }
                    else if($func=='delete'){
                        $id=$_GET['id'];
                        delProduct($id);
                        header('location:admin.php?act=product');
                    }
                    else if($func=='edit'){
                        $id=$_GET['id'];
                        $p=getProductByID($id);
                    }
                }
                $products = getAllProduct();
                $catalogs = getAllCatalog();
                $producers = getAllProducer();
                $gifts = getAllGift();
                include "view/admin/product.php";
                break;
            case 'productDetail':
                $productID=$colorID=$productImage=$price="";
                $productImageErr="";
                if(isset($_GET['func'])){
                    $func = $_GET['func'];
                    if($_GET['func']=="add"){
                        if(empty($_POST['productID'])){
                            $productID="";
                        }
                        else{
                            $productID = $_POST['productID'];
                        }
                        if(empty($_POST['colorID'])){
                            $colorID="";
                        }
                        else{
                            $colorID = $_POST['colorID'];
                        }
                        if(empty($_FILES['productImage']['name'])){
                            $productImageErr="Chọn hình sản phẩm";
                        }
                        else{
                            $productImage = $_FILES['productImage']['name'];
                        }
                        if(empty($_POST['price'])){
                            $price="";
                        }
                        else{
                            $price = $_POST['price'];
                        }
                        if(empty($_POST['p_detail_id']) && $_FILES['productImage']['name']!=""){
                            addProductDetail($productID,$colorID,$productImage,$price);
                            $path='view/admin/asset/images/'.$productImage;
                            move_uploaded_file($_FILES['productImage']['tmp_name'],$path);
                        }
                        else if($_FILES['productImage']['name']!=""){
                            $id=$_POST['p_detail_id'];
                            updateProductDetail($id,$productID,$productImage,$colorID,$price);
                        }
                        if(empty($productImageErr)){
                            header('location:admin.php?act=productDetail');
                        }
                        
                    }
                    else if($func=='delete'){
                        $id=$_GET['id'];
                        delProductDetail($id);
                        header('location:admin.php?act=productDetail');
                    }
                    else if($func=='edit'){
                        $id=$_GET['id'];
                        $product_detail=getProductDetailByID($id);
                    }
                }
                $p_details = getAllProductDetail();
                $products = getAllProduct();
                $colors = getAllColor();
                include "view/admin/productDetail.php";
                break;
                case 'producer':
                    $producerName=$producerImage="";
                    $producerNameErr="";
                    if(isset($_GET['func'])){
                        $func = $_GET['func'];
                        if($_GET['func']=="add"){
                            if(empty($_POST['producerName'])){
                                $producerNameErr="Nhập tên nhà sản xuất";
                            }
                            else{
                                $producerName = $_POST['producerName'];
                            }
                            if(empty($_FILES['producerImage']['name'])){
                                $producerImage="";
                            }
                            else{
                                $producerImage = $_FILES['producerImage']['name'];
                            }
                            if(empty($_POST['producerID']) && ($_POST['producerName']!="")){
                                addProducer($producerName,$producerImage);
                                $path='view/admin/asset/images/'.$producerImage;
                                move_uploaded_file($_FILES['producerImage']['tmp_name'],$path);
                            }
                            else if ($_POST['producerName']!=""){
                                $id=$_POST['producerID'];
                                updateProducer($id,$producerName,$producerImage);
                            }
                            if(empty($producerNameErr)){
                                header('location:admin.php?act=producer');
                            }
                            
                        }
                        else if($func=='delete'){
                            $id=$_GET['id'];
                            delProducer($id);
                            header('location:admin.php?act=producer');
                        }
                        else if($func=='edit'){
                            $id=$_GET['id'];
                            $nsx=getProducerByID($id);
                        }
                    }
                    $producers = getAllProducer();
                    include "view/admin/producer.php";
                    break;
                
            case 'user':
                $userName=$userTen=$password=$password1=$password2=$userImage=$email=$phone=$address=$role="";
                $userErr=$passwordErr=$password1Err=$password2Err=$emailErr="";
                if(isset($_GET['func'])){
                    $func = $_GET['func'];
                    if($_GET['func']=="add"){
                        if(empty($_POST['user'])){
                            $userErr="Nhập tên đăng nhập";
                        }
                        else{
                            $userTen = $_POST['user'];
                        }
                        if(empty($_POST['password1'])){
                            $password1Err="Nhập mật khẩu";
                        }
                        else{
                            $password1 = $_POST['password1'];
                        }
                        if(empty($_POST['password2'])){
                            $password2Err="Xác nhận mật khẩu";
                        }
                        else{
                            $password2 = $_POST['password2'];
                        }
                        if(empty($_POST['email'])){
                            $emailErr="Nhập địa chỉ email";
                        }
                        else{
                            $email= $_POST['email'];
                        }
                        if(empty($_POST['userName'])){
                            $userName="";
                        }
                        else{
                            $userName = $_POST['userName'];
                        }
                        if(empty($_POST['phone'])){
                            $phone="";
                        }
                        else{
                            $phone = $_POST['phone'];
                        }
                        if(empty($_POST['address'])){
                            $address="";
                        }
                        else{
                            $address = $_POST['address'];
                        }
                        if(empty($_POST['role'])){
                            $role="";
                        }
                        else{
                            $role = $_POST['role'];
                        }
                        if(empty($_FILES['userImage']['name'])){
                            $userImage="";
                        }
                        else{
                            $userImage = $_FILES['userImage']['name'];
                        }
                        if($password1==$password2){
                            $password=$password1;
                        }
                        else{
                            $passwordErr="Xác nhận không đúng";
                        }
                        if(empty($_POST['userID']) && ($_POST['user']!="") && ($_POST['email']!="")
                        && ($_POST['password1']==$_POST['password2']) && ($password!="")){
                            addToUser($userName,$userTen,$password,$userImage,$email,$phone,$address,$role);
                            $path='view/admin/asset/images/'.$userImage;
                            move_uploaded_file($_FILES['userImage']['tmp_name'],$path);
                        }
                        else if(($_POST['user']!="") && ($_POST['email']!="") && ($_POST['password1']==$_POST['password2']) && ($password!="")) {
                            $id=$_POST['userID'];
                            updateUser($id,$userName,$userTen,$password,$userImage,$email,$phone,$address,$role);
                        }
                        if((empty($userErr)) && (empty($passwordErr)) && (empty($password1Err)) && (empty($password2Err)) && (empty($emailErr))){
                            header('location:admin.php?act=user');
                        }
                        
                    }
                    else if($func=='delete'){
                        $id=$_GET['id'];
                        delUser($id);
                        header('location:admin.php?act=user');
                    }
                    else if($func=='edit'){
                        $id=$_GET['id'];
                        $u=getUserByID($id);
                    }
                }
                $users = getAllUser();
                include "view/admin/user.php";
                break;
            case 'comment':
                if(isset($_GET['func'])){
                    $func = $_GET['func'];
                    if($func=='delete'){
                        $id=$_GET['id'];
                        delComment($id);
                        header('location:admin.php?act=comment');
                    }
                }
                $comments = getAllComment();
                include "view/admin/comment.php";
            break;
            case 'logout':
                session_destroy();
                header("location: index.php?act=logout");
                include "index.php?act=logout";
                break;
            case 'order':
                $productID=$price=$quantity="";
                $priceErr=$quantityErr="";
                if(isset($_GET['func'])){
                    $func = $_GET['func'];
                    if($func=='delete'){
                        $id=$_GET['id'];
                        delOrder($id);
                        header('location:admin.php?act=order');
                    }
                }
                $orders = getAllOrder();
                $products = getAllProduct();
                include "view/admin/order.php";
                break;
            //banner
            case 'banner':
                $banners = getallbanner();
                $bannername=$bannerImage=$countbanner="";
                $bannerImageErr="";
                if(isset($_GET['func'])){
                    $func = $_GET['func'];
                    if($_GET['func']=="add"){
                        if(empty($_POST['bannername'])){
                            $bannername="";
                        }
                        else{
                            $bannername = $_POST['bannername'];
                        }
                        if(empty($_FILES['bannerImage']['name'])){
                            $productImageErr="Chọn hình banner";
                        }
                        else{
                            $bannerImage = $_FILES['bannerImage']['name'];
                        }
                        if(empty($_POST['count'])){
                            $countbanner="";
                        }
                        else{
                            $countbanner = $_POST['count'];
                        }
                        if(empty($_POST['bannerid']) && $_FILES['bannerImage']['name']!=""){
                            addbanner ($bannername,$bannerImage,$countbanner);
                            $path='view/admin/asset/images/'.$bannerImage;
                            move_uploaded_file($_FILES['bannerImage']['tmp_name'],$path);
                        }
                        else if($_FILES['bannerImage']['name']!=""){
                            $id=$_POST['id'];
                            updatebanner($id,$bannername,$bannerImage,$countbanner);
                        }
                        if(empty($bannerImageErr)){
                            header('location:admin.php?act=banner');
                        }
                        
                    }
                    else if($func=='delete'){
                        $id=$_GET['id'];
                        delbanner($id);
                        header('location:admin.php?act=banner');
                    }
                    else if($func=='edit'){
                        $id=$_GET['id'];
                        $b=getbannerByID($id);
                    }
                }
                
                include "view/admin/banner.php";
                break;
//ket thuc banner
    }
} else {
    include "view/admin/home.php";
}

include "view/admin/footer.php";