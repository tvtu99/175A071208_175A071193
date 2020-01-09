<?php
//xóa ngành theo mã ngành truyền vào
$malhp = $_GET['MaLHP'];
include("../../includes/conn.php");

$query = "DELETE FROM `lophp` WHERE MaLHP = '$malhp'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
header('location:../qllophocphan.php');
}
else {
    echo "Không thể xóa";
}
?>