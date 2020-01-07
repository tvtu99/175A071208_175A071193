<?php
$makhoa = $_GET['makhoa'];
include("../../includes/conn.php");

$query = "DELETE FROM `khoa` WHERE MaKhoa = '$makhoa'";
mysqli_query($dbcon,$query);
mysqli_close($dbcon);
header('location:../qlkhoa.php');
?>