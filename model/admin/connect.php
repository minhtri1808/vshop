<?php
    function connect(){
        $DBH = new PDO('mysql:host=localhost;dbname=du_an1','root','');
        return $DBH;
    }
    
?>