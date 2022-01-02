<?php
require_once('dbhelp.php');
$mabd = $_POST['mabd'];
$date = date("d/m/Y");


$conn = mysqli_connect('localhost', 'root', '', 'CK2021')
    or die("<p> Không thể connect</p>");
mysqli_set_charset($conn, "utf8");

$sql = "SELECT SUM(cv.DONGIA) as thanhtien
FROM congviec cv INNER JOIN ctbd c ON cv.MACV=c.MACV  
WHERE c.MABD=$mabd";
$resultset = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($resultset)) {
    $tien = $row[0];
    echo $row[0];
}
$sqlu = "UPDATE `baoduong` SET `NGAYTRA`='$date',`THANHTIEN`='$tien' WHERE MABD=$mabd";
mysqli_query($conn, $sqlu);
