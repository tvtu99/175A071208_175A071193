<?php
$magd = $_GET['MaGD'];
include("../../includes/conn.php");

$query = "DELETE FROM `giaidoan` WHERE MaGD = '$magd'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
    header('location:../qlgiaidoan.php');
}
else {
    echo "Không thể xóa";
}
?>