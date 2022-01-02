<?php
$server = "localhost";
$username = "root";
$password = "";
$DBName = "qlsv";
$conn = mysqli_connect($server, $username, $password, $DBName)
    or die("<p> Không thể connect</p>");
mysqli_set_charset($conn, "utf8");
$strSQL = "select * from User";
$result = mysqli_query($conn, $strSQL)
    or die("<p>Không thể thực thi câu truy vấn.</p>");
echo "<table border =1 >";
echo "<tr><th>Username</th><th>Password</th></tr>";
while ($row = mysqli_fetch_row($result)) {
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "</tr>";
};
echo "</table>";
//Đóng kết nối
mysqli_close($conn);
