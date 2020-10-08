<?php
    function show__catalog(){
        $sql="SELECT * FROM catalog";
        return(pdo_query($sql));
        }
    function cataloghome($number){
        $sql = "SELECT * FROM catalog WHERE sethome=1 and count = $number";
        return pdo_query_one($sql);
    }
    function catalogProducer($id){
        $sql = "SELECT producer.*  FROM catalog_producer
        INNER JOIN producer ON id_producer=producer.id WHERE catalog_producer.id_catalog=$id";
        return(pdo_query($sql));
    }
?>