<?php
require_once('dbhelp.php');
if (isset($_POST['submit'])) {
    if (isset($_POST['tenkh'])) {
        $tenkh = $_POST['tenkh'];
    }

    if (isset($_POST['soxe'])) {
        $soxe = $_POST['soxe'];
    }

    if (isset($_POST['namsx'])) {
        $namsx = $_POST['namsx'];
    }

    if (isset($_POST['hangxe'])) {
        $hangxe = $_POST['hangxe'];
    }
    $sql = "SELECT `MAKH` FROM `khachhang` WHERE HOTENKH='$tenkh'";
    $result = executeResult($sql);
    foreach ($result as $row) {
        $makh = $row['MAKH'];
    }
    echo $makh;
    $querystring = "INSERT INTO `xe`(`SOXE`, `HANGXE`, `NAMSX`, `MAKH`) 
    VALUES ('$soxe','$hangxe','$namsx','$makh')";
    execute($querystring);
    die();
}

// $hangxe = $_POST["hangxe"];
// // var_dump($hangxe);
// foreach ($hangxe as $value) {
//     echo '1';
//     echo '<br>';
// }
