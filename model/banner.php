<?php
    function showbanner($a){
        $sql="SELECT * FROM `banner` WHERE count= $a";
        return pdo_query_one($sql);

    }
?>