<?php
function show_producer()
{
    $sql = "SELECT * FROM producer";
    return pdo_query($sql);
}
function show_producerID($id)
{
    $sql = "SELECT * FROM producer where id=" . $id;
    return pdo_query($sql);
}

?>