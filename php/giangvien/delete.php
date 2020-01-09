<?php
//xóa ngành theo mã ngành truyền vào
$malhp = $_GET['malhp'];
$masv = $_GET['masv'];
include("../includes/conn.php");

$query = "DELETE FROM `dsl` WHERE MaLHP = '$malhp' and MaSV = '$masv'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
header('location:giangvien.php');
}
else {
    echo "Không thể xóa";
}
?>