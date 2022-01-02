<?php
require_once('dbhelp.php');
if (isset($_POST['submit'])) {
    if (isset($_POST['makh'])) {
        $makh = $_POST['makh'];
    }

    if (isset($_POST['tenkh'])) {
        $tenkh = $_POST['tenkh'];
    }

    if (isset($_POST['diachi'])) {
        $diachi = $_POST['diachi'];
    }

    if (isset($_POST['sdt'])) {
        $sdt = $_POST['sdt'];
    }
    $querystring = "INSERT INTO `khachhang`(`MAKH`, `HOTENKH`, `DIACHI`, `SDT`) 
    VALUES ('$makh','$tenkh','$diachi','$sdt')";

    //Viết duy nhất 1 dòng như này cũng dc
    $sql = "INSERT INTO `khachhang`(`MAKH`, `HOTENKH`, `DIACHI`, `SDT`) 
    VALUES ('$_POST[makh]','$_POST[tenkh]','$_POST[diachi]',$_POST[sdt])";
    execute($querystring);
    die();
}
