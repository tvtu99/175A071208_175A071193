<?php
$mamh = $_POST['mamh'];
$tenmh = $_POST['tenmh'];
$stc = $_POST['stc'];
$hs = $_POST['hs'];
echo $mamh.$tenmh.$stc.$hs;
include("../../includes/conn.php");
if(!$dbcon)
{
    die('loi ket loi :' .mysqli_connect_error()); //bao loi
}
else {
    $query = "UPDATE `monh` SET `TenMH`='$tenmh',`STC`=$stc,`HS`=$hs WHERE MaMH = '$mamh'";
    mysqli_query($dbcon,$query);
    mysqli_close($dbcon);
}
//header('location:../qlmonhoc.php');
?>