<?php
$makhoa = $_GET['makhoa'];
$dbcon = mysqli_connect("localhost","trinhtu","trinhtu15","db_quanlydiem"); //connect
mysqli_set_charset($dbcon, 'utf8');
$query = "DELETE FROM `khoa` WHERE MaKhoa = '$makhoa'";
mysqli_query($dbcon,$query);
mysqli_close($dbcon);
header('location:../qlkhoa.php');
?>