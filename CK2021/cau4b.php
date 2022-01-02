<?php
require_once('dbhelp.php');
$option = $_POST['option'];
echo $option;


echo '<html>
<table>
    <thead>
        <tr>
            <th>Tên công việc</th>
            <th>Đơn giá</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>

</html>';


$conn = mysqli_connect('localhost', 'root', '', 'CK2021')
    or die("<p> Không thể connect</p>");
mysqli_set_charset($conn, "utf8");

$sql = "SELECT cv.TENCV,cv.DONGIA,cv.MACV,b.MABD
FROM congviec cv INNER JOIN ctbd c ON cv.MACV=c.MACV INNER JOIN baoduong b ON b.MABD=c.MABD
WHERE b.SOXE=$option";
$resultset = mysqli_query($conn, $sql);
$i = 0;
while ($row = mysqli_fetch_array($resultset)) {
    echo '<tr>
    <td>' . $row[0] . '</td>
    <td>' . $row[1] . '</td>
    <td><button type="button" id="' . $i++ . '" value="' . $row[3] . '" onclick="deleteCV(' . $row[2] . ',' . $row[3] . ')">Delete</button></td>
</tr>';
}
