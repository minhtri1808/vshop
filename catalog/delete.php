<?php
//delete.php

include('../model/pdo.php');

if(isset($_POST["id"]))
{
  $query = "DELETE FROM catalog WHERE id = '".$_POST["id"]."'";
    pdo_execute($sql);
 }

