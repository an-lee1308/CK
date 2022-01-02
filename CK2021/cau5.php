<?php
require_once('dbhelp.php');
echo '<html>
<table>
    <thead>
        <tr>
            <th>Tên khách hàng</th>
            <th>Số xe</th>
            <th>Số lần bảo dưỡng</th>
        </tr>
    </thead>
    <tbody>

</html>';
if (isset($_GET['solan'])) {
    $solan = $_GET['solan'];
    $sql = "SELECT k.HOTENKH,x.SOXE,COUNT(b.MABD) AS Solanbaoduong
FROM khachhang k INNER JOIN xe x ON k.MAKH=x.MAKH INNER JOIN baoduong b ON b.SOXE=x.SOXE
GROUP BY x.SOXE
HAVING COUNT(b.MABD)>$solan";
    $studentList = executeResult($sql);

    foreach ($studentList as $std) {
        echo '<tr>
			<td>' . $std[0] . '</td>
			<td>' . $std[1] . '</td>
            <td>' . $std[2] . '</td>
		</tr>';
    }
}
