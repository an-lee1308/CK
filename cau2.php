<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="cau2.php" method="POST">
        <p>
            <label for="mahd">Mã hợp đồng:</label>
            <input type="text" name="mahd" />
        </p>
        <p>
            <label for="tenhd">Tên hợp đồng:</label>
            <input type="text" name="tenhd" />
        </p>
        <p>
            <label for="tenkh">Tên khách hàng:</label>
            <select name="tenkh" id="customers">
                <?php
                require_once('dbhelp.php');
                $sql = 'select * from khachhang';

                $customerList = executeResult($sql);

                $index = 1;
                foreach ($customerList as $cL) {
                    echo '<option value="' . $cL['HOTEN'] . '">' . $cL['HOTEN'] . '</option>';
                }
                ?>
            </select>
        </p>
        <p>
            <label for="tenxe">Tên xe:</label>
            <select name="tenxe[]" id="cars" multiple="multiple">
                <?php
                require_once('dbhelp.php');
                $sql = 'select * from xe';

                $carList = executeResult($sql);

                $index = 1;
                foreach ($carList as $cL) {
                    echo '<option value="' . $cL['TENXE'] . '">' . $cL['TENXE'] . '</option>';
                }
                ?>
            </select>
            Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.
        </p>
        <p>
            <label for="sotien">Số tiền:</label>
            <input type="text" name="sotien" />
        </p>
        <p>
            <button type="submit" name="submit" value="submit">Thuê xe</button>
        </p>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
<?php
require_once('dbhelp.php');

$values = $_POST['tenxe'];

foreach ($values as $a) {
    echo $a;
}


$startdate1 = date("d-m-y");
echo "$startdate1";

if (isset($_POST['submit'])) {
    if (isset($_POST['mahd'])) {
        $mahd = $_POST['mahd'];
    }

    if (isset($_POST['tenhd'])) {
        $tenhd = $_POST['tenhd'];
    }

    if (isset($_POST['tenkh'])) {
        $tenkh = $_POST['tenkh'];
    }
    if (isset($_POST['tenxe'])) {
        $tenxe = $_POST['tenxe'];
    }
    if (isset($_POST['sotien'])) {
        $sotien = $_POST['sotien'];
    }
    $date = date("d-m-y");
    $querystring = "insert into khachhang (MAKH, HOTEN, SDT) 
    value ('$makh', '$tenkh', '$sdt')";
    execute($querystring);
    die();
}

?>

</html>