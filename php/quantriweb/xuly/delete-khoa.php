<?php
$makhoa = $_GET['makhoa'];
include("../../includes/conn.php");

$query = "DELETE FROM `khoa` WHERE MaKhoa = '$makhoa'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
    header('location:../qlkhoa.php');
}
else {
    echo "Không thể xóa";
}
?>