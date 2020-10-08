<?php
    // function showproduct(){
    //     $sql="SELECT * FROM product";
    //     return(pdo_query($sql));
    //     }
    function getAllProduct(){
        $sql="SELECT product.*, product_detail.price, product_detail.id as id_product_detail,product_detail.image as image_product_detail ,color_board.id as id_color, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN color_board ON product_detail.id_color=color_board.id
        INNER JOIN producer ON product.id_producer=producer.id WHERE 1";
        
        return pdo_query($sql);
    }
    function getNewpro(){
        $sql="SELECT product.*, product_detail.price, product_detail.id as id_product_detail,product_detail.image as image_product_detail ,color_board.id as id_color, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN color_board ON product_detail.id_color=color_board.id
        INNER JOIN producer ON product.id_producer=producer.id ORDER by date DESC LIMIT 8";
        return pdo_query($sql);
    }
    function getProbyIDCata($id){
        $sql="SELECT product.*, product_detail.price, product_detail.id as id_product_detail,product_detail.image as image_product_detail ,color_board.id as id_color, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN color_board ON product_detail.id_color=color_board.id
        INNER JOIN producer ON product.id_producer=producer.id WHERE product.id_catalog=$id";
        if(isset($_GET['idcatalog'])&&isset($_GET['idproducer'])&&$_GET['idcatalog']== $id){
            $idproducer=$_GET['idproducer'];
            $sql .= " AND product.id_producer=$idproducer";
        }
        return pdo_query($sql);
    }
    function getProductByProducer(){
        $sql="SELECT product.*, product_detail.*, producer.*, product_detail.id as id_product_detail,product_detail.image as image_product_detail , color_board.*,color_board.id as id_color, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN color_board ON product_detail.id_color=color_board.id
        INNER JOIN producer ON product.id_producer=producer.id";
        return pdo_query($sql);
    }
    function getProductlimit3($id){
        $sql="SELECT product.*, product_detail.price, product_detail.id as id_product_detail,product_detail.image as image_product_detail ,color_board.id as id_color, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN color_board ON product_detail.id_color=color_board.id
        INNER JOIN producer ON product.id_producer=producer.id WHERE product.id_catalog=$id limit 3";
        return pdo_query($sql);
    }
    function getproductbyid($id){
        $sql="SELECT product.*, product_detail.price, product_detail.id as id_product_detail,product_detail.image as image_product_detail ,color_board.id as id_color, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN color_board ON product_detail.id_color=color_board.id
        INNER JOIN producer ON product.id_producer=producer.id WHERE product.id=$id ";
        if(isset($_GET['idprodetail'])){
            $idprodetail=$_GET['idprodetail'];
            $sql .=" AND product_detail.id = $idprodetail";
        }
        return pdo_query_one($sql);
    }
    function getdetail($idpro){
        $sql ="SELECT product_detail.*, color_board.name_color, color_board.color_code FROM product_detail INNER JOIN color_board ON product_detail.id_color= color_board.id WHERE product_detail.id_product =$idpro";
        return pdo_query($sql);
    }
    function getproductsimilar($idcata,$idproducer){
        $sql="SELECT product.*, product_detail.price, product_detail.id as id_product_detail,product_detail.image as image_product_detail, producer.name as name_producer  FROM product
        INNER JOIN product_detail ON product.id=product_detail.id_product 
        INNER JOIN producer ON product.id_producer=producer.id WHERE product.id_catalog=$idcata and product.id_producer=$idproducer LIMIT 4";
        return pdo_query($sql);
    }
?>