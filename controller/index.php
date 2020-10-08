<?php
    ob_start();
    session_start();
    // session_destroy();
    if (!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
    // unset($_SESSION['giohang']);
    include '../model/pdo.php';
    include '../model/catalog.php';
    // include '../model/producer.php';
    include '../model/product.php';
    include '../model/slider.php';
    include '../model/banner.php';
    include '../model/user.php';
    include '../model/cart.php';
    // 

    include '../global.php';
    include '../model/admin/filter/producer.php';
    include '../model/admin/filter/productdetail.php';
    include '../model/admin/filter/gif.php';
    // home 
    $catalog=show__catalog();
    



    include '../view/header.php';
    // var_dump ($catalog);
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'shop':
                $prodetail = show_productdetail();
                $gift = show_gift();
                $producer =  show_producer();
                $catalog = show__catalog();
                include '../view/shop.php';
                break;
            case 'prodetail':
                if(isset($_GET['idpro'])){
                    $idpro=$_GET['idpro'];
                    $product = getproductbyid($idpro);
                }
                include '../view/productdetail.php';
                break;
            
            case 'quickview':
                if(isset($_GET['idpro'])){
                    $idpro=$_GET['idpro'];
                    $product = getproductbyid($idpro);
                }
                include '../view/home.php';
                break;
            
            case 'viewcart':
                    if (isset($_POST['submit']) && ($_POST['submit'])) {
                        $idpro = $_POST['idpro'];
                        $name = $_POST['name'];
                        $image = $_POST['image'];
                        $price = $_POST['price'];
                        $soluong = 1;
                        
                        $vitri = 0;
                        //kiem tra su ton tai
                        for ($i = 0; $i < sizeof($_SESSION['giohang']); $i++) {
                            if ($_SESSION['giohang'][$i][0] == $idpro) {
                                
                               // $vitri = $i + 1;
                                $vitri_soluong = $_SESSION['giohang'][$i][4];  
                                $soluong+= $vitri_soluong;
                                $_SESSION['giohang'][$i][4] = $soluong;                             
                                break;
                            }
                            
                        }
                        //update gio hang
                        
                            if($soluong==1) {
                            $item = [$idpro, $name, $image, $price, $soluong];
                            $_SESSION['giohang'][]= $item;
                            header("location: index.php?act=viewcart");

                        }
                    }
                    if (isset($_GET['del'])) {
                        $local=$_GET['del'];
                            unset($_SESSION['giohang'][$local]);
                        
                        // array_slice($_SESSION['giohang'],$_SESSION['giohang'][$local],1);
                        // header("location: index.php?act=viewcart");
                        echo '<script>window.location="index.php?act=viewcart" </script>';
                    
                    }
                    if (isset($_GET['delall'])){
                        unset($_SESSION['giohang']);
                        header("location: index.php");
                    }
                




                include '../view/cart.php'; 
                break;
            case 'checkout':
                include '../view/checkout.php';
                break;
            case 'loginandcheckout':
                if(isset($_POST['logincheckout'])&&($_POST['logincheckout'])){
                    $user=$_POST['user'];
                    $pass=$_POST['password'];
                    $user1=checkuser($user,$pass);
                    // var_dump($user1);
                    // echo $user;
                    if(is_array($user1)){
                            $kt=sizeof($user1);
                        if($kt>0){
                            $_SESSION['id']=$user1['id'];
                            $_SESSION['name']=$user1['name'];
                            $_SESSION['address']=$user1['address'];
                            $_SESSION['phone']=$user1['phone'];
                            $_SESSION['role']=$user1['role'];
                            $_SESSION['img']=$user1['image'];
                            $_SESSION['email']=$user1['email'];
                            // var_dump($_SESSION['img']);
                            if($_SESSION['role'] == 1){
                                header('location: ../admin.php');
                            }
                        } 
                    }else{
                        $txt_err_login="Tài khoản không tồn tại hoặc sai mật khẩu !!!";
                        // header('location: index.php&act=login');
                    }
                    include '../view/checkout.php'; 
                    header('location: index.php?act=checkout');
                }
                if(isset($_POST['dathang'])&&($_POST['dathang'])){
                    $idUser=$_POST['idUser'];
                    // var_dump($idUser);
                    if(isset($_POST['nameUser'])&&($_POST['nameUser']!=""))
                    $nameUser = $_POST['nameUser'];
                    if(isset($_POST['addressUser'])&&($_POST['addressUser']!=""))
                    $addressUser = $_POST['addressUser'];
                    if(isset($_POST['emailUser'])&&($_POST['emailUser']!=""))
                    $emailUser = $_POST['emailUser'];
                    if(isset($_POST['phoneUser'])&&($_POST['phoneUser']!=""))
                    $phoneUser = $_POST['phoneUser'];
                    if(isset($_POST['nameUser2'])&&($_POST['nameUser2']!="")){
                        $nameUser2 = $_POST['nameUser2'];
                    } else{$nameUser2="";};
                    if(isset($_POST['addressUser2'])&&($_POST['addressUser2']!="")){

                        $addressUser2 = $_POST['addressUser2'];
                    }else{$addressUser2="";};
                    if(isset($_POST['emailUser2'])&&($_POST['emailUser2']!="")){

                        $emailUser2 = $_POST['emailUser2'];
                    } else{
                        $emailUser2="";
                    }
                    if(isset($_POST['phoneUser2'])&&($_POST['phoneUser2']!="")){

                        $phoneUser2 = $_POST['phoneUser2'];
                    }else{$phoneUser2="";}
                    if(isset($_POST['product'])&&($_POST['product']!=""))
                    $product=$_POST['product'];
                    // var_dump($product);
                    // $quantity=$_POST['soluong'];
                    $total=$_POST['total'];
                    if(isset($_POST['note'])&&($_POST['note']!="")){

                        $note=$_POST['note'];
                    } else {
                        $note="";
                    }
                    // tao don hang
                    // $donhang=new donhang;
                    $iddonhang=adddonhang2($idUser, $nameUser, $emailUser, $addressUser, $phoneUser, $total,$nameUser2, $emailUser2, $addressUser2, $phoneUser2,$note);
                    // adddonhang($idUser, $nameUser, $emailUser, $addressUser, $phoneUser, $total,$nameUser2, $emailUser2, $addressUser2, $phoneUser2,$note,$product);
                    // echo $iddonhang;
                    for ($i=0; $i < sizeof($_SESSION['giohang']) ; $i++) { 
                        // $idpro, $name, $image, $price, $soluong
                        $idpro=$_SESSION['giohang'][$i][0];
                        $name=$_SESSION['giohang'][$i][1];
                        $image=$_SESSION['giohang'][$i][2];
                        $price=$_SESSION['giohang'][$i][3];
                        $soluong=$_SESSION['giohang'][$i][4];
                        adddonhangchitiet($iddonhang, $idpro, $name, $image, $price, $soluong);
                    }
                    include '../view/cartconform.php';

                }
                
                break;
            case 'cartconform':
                unset($_SESSION['giohang']);
                header('location: index.php');
            
            break;
            case 'login':
                if(isset($_POST['login'])&&($_POST['login'])){
                    $user=$_POST['user'];
                    $pass=$_POST['password'];
                    $user1=checkuser($user,$pass);
                    // var_dump($user1);
                    // echo $user;
                    if(is_array($user1)){
                            $kt=sizeof($user1);
                        if($kt>0){
                            $_SESSION['id']=$user1['id'];
                            $_SESSION['name']=$user1['name'];
                            $_SESSION['address']=$user1['address'];
                            $_SESSION['phone']=$user1['phone'];
                            $_SESSION['role']=$user1['role'];
                            $_SESSION['img']=$user1['image'];
                            $_SESSION['email']=$user1['email'];
                            // var_dump($_SESSION['img']);
                            if($_SESSION['role'] == 1){
                                header('location: ../admin.php');
                            }else{
                                header('location: index.php');
                            }
                        } 
                    }else{
                        $txt_err_login="Tài khoản không tồn tại hoặc sai mật khẩu !!!";
                        // header('location: index.php&act=login');
                    }
                }
                if(isset($_POST['register'])&&($_POST['register'])){
                    $fullname=$_POST['fullname'];
                    $username=$_POST['username'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $pass=$_POST['password'];
                    $address=$_POST['address'];
                    adduser($fullname,$username, $pass, $email, $phone,$address);
                    $err='Đăng ký thành công!';
                }
                
                include '../view/login.php'; 
                break;
            
            case 'register':
                
                include '../view/login.php';
            break;
            case 'profile':
                
                include '../view/profile.php';
                break;
                
            case 'about':
                
                include '../view/aboutus.php';
                break;
                
            case 'contact':
                // if (isset($_POST['send'])) {
                //     $subject = "my subject";
                //     $to = "mtmusic2015100@gmail.com";
                //     $message1 = 'Name:'.$_POST['name']."\n";
                //     $message1 .= "email:".$_POST['email']."\n";
                //     $message1 .= "Message:".$_POST['message']."\n";
                //      echo ' đã gửi: ';
                //      @mail($to,$subject,$message1);
                //   }
                include '../view/contact.php';
                break;
                
            case 'logout':
                session_destroy();
                header("location: index.php");
                break;
            
            default:
                include '../view/home.php';
                break;
        } 

    }
    else{
        include '../view/home.php';
    }

    
    include '../view/footer.php';

?>