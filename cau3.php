<html>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tên khách hàng</th>
            <th>Số lần thuê xe</th>
        </tr>
    </thead>
    <tbody>

</html>
<?php

require_once('dbhelp.php');
$sql = "
SELECT k.HOTEN,count(h.MAKH) AS Solanthuexe
FROM hopdong h INNER JOIN khachhang k ON h.MAKH=k.MAKH
GROUP BY k.HOTEN
HAVING COUNT(h.MAKH)>2";
$studentList = executeResult($sql);

$index = 1;
foreach ($studentList as $std) {
    echo '<tr>
			<td>' . $std['HOTEN'] . '</td>
			<td>' . $std['Solanthuexe'] . '</td>
		</tr>';
}
?>