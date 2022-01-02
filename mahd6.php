<?php
require_once('dbhelp.php');
if (isset($_POST['option1'])) {
    $option1 = $_POST['option1'];

    echo '<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tên xe</th>
            <th>Chức năng</th>
        </tr>
    </thead>
    <tbody>
    </table>';

    $sql = "SELECT x.TENXE,x.MAXE
    from xe x
    WHERE x.MAXE IN (SELECT c.MAXE
    FROM cthd c INNER JOIN hopdong h ON c.MAHD=h.MAHD
    where h.MAHD=$option1)";


    $carList = executeResult($sql);

    foreach ($carList as $cL) {
        echo '<tr>
                <td>' . $cL['TENXE'] . '</td>
                <td><button onclick="deleteStudent(' . $cL['MAXE'] . ')">Delete</button></td>
            </tr>';
    }
}
