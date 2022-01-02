<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<h1>Thanh toán</h1>
<form action=".php" method="POST">
    <p>
        <label for="soxe">Số xe</label>
        <select name="tenxe" id="soxe"> </select>
    </p>
    <p>
        <label for="ngaynhanxe">Ngày nhận xe:</label>
        <input type="text" name="ngaynhanxe" id="ngaynhanxe" onchange="fetch_select(this.value)" ; />
    </p>
    <p>
        <label for="thanhtien">Thành tiền</label>
        <input type="text" name="thanhtien" id="thanhtien" />
    </p>
</form>
<div id="res"></div>
<p>
    <button id="submit">Thanh toán</button>
</p>

<script>
    function fetch_select(val) {
        $.ajax({
            type: "post",
            url: "cau4a.php",
            datatype: "json",
            data: {
                ngaynhanxe: val,
            },
            success: function(response) {
                $("#soxe").html(response); //This will print you result
            },
        });
    }

    $('#soxe').on('blur', function() {
        var selectVal = $("#soxe option:selected").val();
        $.ajax({
            type: "post",
            url: "cau4b.php",
            datatype: "json",
            data: {
                option: selectVal,
            },
            success: function(response) {
                $("#res").html(response); //This will print you result
            },
        });
    });

    function deleteCV(id1, id2) {
        $.ajax({
            type: "post",
            url: "delete.php",
            datatype: "json",
            data: {
                id1: id1,
                id2: id2
            },
            success: function(response) {
                console.log(response);
                location.reload() //This will print you result
            },
        });
    }

    $('#submit').on('click', function() {
        var mabd = $('#0').val();
        console.log(mabd);
        $.ajax({
            type: "post",
            url: "cau4c.php",
            datatype: "json",
            data: {
                mabd: mabd,
            },
            success: function(response) {
                $("#thanhtien").val(response); //This will print you result
            },
        });
    });
</script>


</html>