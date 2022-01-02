<?php
require_once('dbhelp.php');
if (isset($_POST['soxe'])) {
    $soxe = $_POST['soxe'];
    $sql = "SELECT k.HOTENKH
    FROM khachhang k INNER JOIN xe x ON k.MAKH=x.MAKH
    WHERE k.MAKH=(SELECT x.MAKH
                 from xe x
                 WHERE x.SOXE=$soxe)";
    $customer = executeResult($sql);
    foreach ($customer as $cus) {
        echo $cus[0];
    }
}

if (isset($_POST['submit'])) {
    echo $m = 5;
}
