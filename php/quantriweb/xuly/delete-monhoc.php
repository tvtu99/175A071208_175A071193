<?php
//xóa ngành theo mã ngành truyền vào
$mamh = $_GET['MaMH'];
include("../../includes/conn.php");

$query = "DELETE FROM `monh` WHERE MaMH = '$mamh'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
header('location:../qlmonhoc.php');
}
else {
    echo "Không thể xóa";
}
?>