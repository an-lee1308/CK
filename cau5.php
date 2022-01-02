<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <p>
        <label for="tenkhach">Tên khách:</label>
        <select name="tenkhach" id="khach" onchange="fetch_select(this.value);">
            <?php
            require_once('dbhelp.php');
            $sql = 'select * from khachhang';

            $carList = executeResult($sql);

            foreach ($carList as $cL) {
                echo '<option value="' . $cL['HOTEN'] . '">' . $cL['HOTEN'] . '</option>';
            }
            ?>
        </select>
    </p>
    <div id="res"></div>
    <div id="res1"></div>
    <script type="text/javascript">
        function fetch_select(val) {
            $.ajax({
                type: 'post',
                url: 'mahd5.php',
                datatype: 'json',
                data: {
                    option: val
                },
                success: function(response) {
                    $('div#res').html(response); //This will print you result
                }
            });
        }

        function fetch_select1(val) {
            $.ajax({
                type: 'post',
                url: 'mahd6.php',
                datatype: 'json',
                data: {
                    option1: val
                },
                success: function(response) {
                    $('div#res1').html(response); //This will print you result
                }
            });
        }

        function deleteStudent(id) {
            $.post('delete.php', {
                'id': id
            }, function(data) {
                alert(data)
                location.reload()
            })
        }
    </script>
</body>

</html>