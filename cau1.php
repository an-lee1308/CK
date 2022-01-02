<?php
require_once('dbhelp.php');
if (isset($_POST['submit'])) {
    if (isset($_POST['makh'])) {
        $makh = $_POST['makh'];
    }

    if (isset($_POST['tenkh'])) {
        $tenkh = $_POST['tenkh'];
    }

    if (isset($_POST['sdt'])) {
        $sdt = $_POST['sdt'];
    }
    $querystring = "insert into khachhang (MAKH, HOTEN, SDT) 
    value ('$makh', '$tenkh', '$sdt')";
    execute($querystring);
    die();
}
