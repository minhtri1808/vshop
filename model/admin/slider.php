<?php
require_once 'pdo.php';
function showslider()
{
    $sql = "SELECT * FROM slider ORDER BY id DESC";
    return pdo_query($sql);
}
function slider_delete($id)
{
    $sql = "DELETE FROM slider WHERE id=?";
    if (is_array($id)) {
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $id);
    }
}
/* phân trang */
function loadsliderpage($id, $page)
{

    global $soluongsp;
    if (!isset($page) || ($page == 0)) {
        $fr = 0;
    } else {
        $fr = ($page - 1) * $soluongsp;
    }
    $to = $soluongsp;
    $sql = " select * from slider where 1 ";
    if ($id > 0) {
        $sql .= " AND id=" . $id;
    }
    $sql .= " order by id desc";

    $sql .= " limit " . $fr . "," . $to;
    return pdo_query($sql);
}
function phantrangslider($id, $page)
{
    global $soluongsp;
    $tongsoluong = count(showslider($id));
    $sotrang = ceil($tongsoluong / $soluongsp);
    $phantrang = "";
    $linkpre = "admin.php?act=slider&id=" . $id . "&page=" . ($page - 1);
    $linknext = "admin.php?act=slider&sliderID=" . $id . "&page=" . ($page + 1);
    if ($page > 1) {
        $phantrang .= '  <li><a href="' . $linkpre . '">&lt;</a></li>';
    }
    for ($i = 1; $i <= $sotrang; $i++) {
        $linkpage = "admin.php?act=slider&id=" . $id . "&page=" . $i;
        if ($i == $page) {
            $phantrang .= '<li class="active"><span>' . $i . '</span></li>';
        } else {
            $phantrang .= '   <li><a href="' . $linkpage . '">' . $i . '</a></li>';
        }
    }
    $pagenext = $page + 1;
    if ($i >  $pagenext) {
        $phantrang .= '<li><a href="' . $linknext . '">&gt;</a></li>';
    }
    return $phantrang;
}