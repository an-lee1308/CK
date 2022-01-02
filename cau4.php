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
if (isset($_GET['soluong'])) {
    $soluong = $_GET['soluong'];

    require_once('dbhelp.php');
    $sql = "
SELECT x.TENXE,COUNT(c.MAXE) AS Solanthue
FROM xe x INNER JOIN cthd c on x.MAXE=c.MAXE
GROUP BY x.TENXE
ORDER BY Solanthue DESC
LIMIT $soluong";
    $studentList = executeResult($sql);

    foreach ($studentList as $std) {
        echo '<tr>
			<td>' . $std['TENXE'] . '</td>
			<td>' . $std['Solanthue'] . '</td>
		</tr>';
    }
}
?>