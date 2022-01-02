<?php
require_once('dbhelp.php');
if (isset($_POST['soxe'])) {
    $soxe = $_POST['soxe'];
}
if (isset($_POST['mabd'])) {
    $mabd = $_POST['mabd'];
}
if (isset($_POST['sokm'])) {
    $sokm = $_POST['sokm'];
}
if (isset($_POST['noidung'])) {
    $noidung = $_POST['noidung'];
}
$date = date("d/m/Y");                    // 03.10.01
echo $date;

$sql = "INSERT INTO `baoduong`(`MABD`, `NGAYNHAN`, `NGAYTRA`, `SOKM`, `NOIDUNG`, `SOXE`, `THANHTIEN`) VALUES 
('$mabd','$date',NULL,'$sokm','$noidung','$soxe',NULL)";
execute($sql);
die();
