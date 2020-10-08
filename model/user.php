<?php
    function checkuser($user,$pass){
        $sql="SELECT * FROM `user` where user='" . $user . "' and password='" . $pass . "'";
        // echo $sql;
        return pdo_query_one($sql);
    }
    function adduser($fullname,$username, $pass, $email, $phone, $address){
        $sql="INSERT INTO `user` (`id`, `name`, `user`, `password`, `image`, `email`, `phone`, `address`, `role`) VALUES (NULL, '$fullname', '$username', '$pass', 'user1.png', '$email', '$phone', '$address', '0')";
        return pdo_execute($sql);
    }

?>