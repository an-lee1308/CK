<?php

/**
 * insert, update, delete -> su dung function
 */
function execute($sql)
{
    //create connection toi database
    $conn = mysqli_connect('localhost', 'root', '', 'CK2021')
        or die("<p> Không thể connect</p>");
    mysqli_set_charset($conn, "utf8");
    //query
    mysqli_query($conn, $sql);

    //dong connection
    mysqli_close($conn);
}

/**
 * su dung cho lenh select => tra ve ket qua
 */
function executeResult($sql)
{
    //create connection toi database
    $conn = mysqli_connect('localhost', 'root', '', 'CK2021')
        or die("<p> Không thể connect</p>");
    mysqli_set_charset($conn, "utf8");
    //query
    $resultset = mysqli_query($conn, $sql);
    $list      = [];
    while ($row = mysqli_fetch_array($resultset)) {
        $list[] = $row;
    }

    //dong connection
    mysqli_close($conn);

    return $list;
}
