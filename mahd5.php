<?php
require_once('dbhelp.php');
if (isset($_POST['option'])) {
    $option = $_POST['option'];
    $sql = "SELECT h.MAHD
FROM hopdong h
WHERE h.MAKH=(
select k.MAKH
from khachhang k
where k.HOTEN='$option')";

    $carList = executeResult($sql);
    echo '  <p>
            <label for="mahd">Mã hợp đồng:</label>
                <select name="mahd" id="mahd" onchange="fetch_select1(this.value)">';
    foreach ($carList as $cL) {
        echo '<option value="' . $cL['MAHD'] . '">' . $cL['MAHD'] . '</option>';
    }
    echo '</select>
    </p>';
}
