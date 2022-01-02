<?php

require("dbhelp.php");


$id1 = $_POST['id1'];
$id2 = $_POST['id2'];
echo $id1, $id2;
$sql = "DELETE FROM ctbd WHERE MACV=$id1 and MABD=$id2";
execute($sql);
echo "Thành Công";
