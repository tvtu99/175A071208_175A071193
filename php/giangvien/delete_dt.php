<?php
//XÓA ĐIỂM QUÁ TRINH nHƯNG KO XÓA ĐIỂM THI -> UPDATE LẠI DQT
$masv = $_GET['masv'];
$mamh = $_GET['mamh'];
include("../includes/conn.php");

$query = "UPDATE `diem` SET `DT`='' WHERE MaSV = '$masv' and MaMH = '$mamh'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
header('location:diemthi.php');
}
else {
    echo "Không thể xóa";
}
?>