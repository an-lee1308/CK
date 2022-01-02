<?php
require_once('dbhelp.php');
$ngaynhanxe = $_POST['ngaynhanxe'];



$conn = mysqli_connect('localhost', 'root', '', 'CK2021')
    or die("<p> Không thể connect</p>");
mysqli_set_charset($conn, "utf8");
$sql = "SELECT b.SOXE
from baoduong b
WHERE b.NGAYNHAN='$ngaynhanxe'";
//query
$resultset = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($resultset)) {
    echo '<option value="' . $row['SOXE'] . '">' . $row['SOXE'] . '</option>';
}

//dong connection
mysqli_close($conn);
