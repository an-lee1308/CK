<?php
function executeResult($sql)
{
    //create connection toi database
    $conn = mysqli_connect('localhost', 'root', '', 'CK2020')
        or die("<p> Không thể connect</p>");
    mysqli_set_charset($conn, "utf8");
    //query
    $resultset = mysqli_query($conn, $sql);
    $list      = [];
    while ($row = mysqli_fetch_row($resultset)) {
        $list[] = $row;
    }

    //dong connection
    mysqli_close($conn);

    return $list;
}
$sql = "SELECT MAHD,TENHD FROM hopdong";
$result = executeResult($sql);
var_dump($result[0]);

?>
 <?php
// require_once('dbhelp.php');
// if (isset($_POST['submit'])) {
//     if (isset($_POST['makh'])) {
//         $makh = $_POST['makh'];
//     }

//     if (isset($_POST['tenkh'])) {
//         $tenkh = $_POST['tenkh'];
//     }

//     if (isset($_POST['sdt'])) {
//         $sdt = $_POST['sdt'];
//     }
//     $querystring = "insert into khachhang (MAKH, HOTEN, SDT) 
//     value ('$makh', '$tenkh', '$sdt')";
//     execute($querystring);
//     die();
// }
