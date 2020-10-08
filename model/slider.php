<?php
function slider_all(){
    $sql="SELECT * FROM slider";
    return(pdo_query($sql));
    }
?>