<?php
function show_gift()
{
    $sql = "SELECT * FROM gift ";
    return pdo_query($sql);
}
?>