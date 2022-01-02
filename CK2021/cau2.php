<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="cau2db.php" method="POST">
        <p>
            <label for="tenkh">Tên khách hàng:</label>
            <select name="tenkh" id="customers">
                <?php
                //                 require_once('dbhelp.php');
                //                 $sql = 'SELECT * from khachhang';

                //                 $customerList = executeResult($sql);

                //                 foreach ($customerList as $cL) {
                //                     echo '<option value="' . $cL['HOTENKH'] . '">' . $cL['HOTENKH'] . '</option>';
                //                 }
                // //
                $conn = mysqli_connect('localhost', 'root', '', 'CK2021')
                    or die("<p> Không thể connect</p>");
                mysqli_set_charset($conn, "utf8");
                $sql = 'SELECT * from khachhang';
                //query
                $resultset = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($resultset)) {
                    echo '<option value="' . $row[0] . '">' . $row[1] . '</option>';
                }

                //dong connection
                mysqli_close($conn);
                ?>
            </select>
        </p>
        <p>
            <label for="soxe">Số xe:</label>
            <input type="text" name="soxe" />
        </p>
        <p>
            <label for="hangxe">Tên xe:</label>
            <select name="hangxe" id="cars">
                <?php
                require_once('dbhelp.php');
                $sql = 'select * from xe';

                $carList = executeResult($sql);
                foreach ($carList as $cL) {
                    echo '<option value="' . $cL['HANGXE'] . '">' . $cL['HANGXE'] . '</option>';
                }
                ?>
            </select>
        </p>
        <p>
            <label for="namsx">Năm sản xuất:</label>
            <input type="text" name="namsx" />
        </p>
        <p>
            <button type="submit" name="submit" value="submit">Thêm</button>
        </p>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>