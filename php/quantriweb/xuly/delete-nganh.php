<?php
//xóa ngành theo mã ngành truyền vào
$man = $_GET['man'];
include("../../includes/conn.php");

$query = "DELETE FROM `nganh` WHERE man = '$man'";
$kq = mysqli_query($dbcon,$query);
if($kq)
{
    mysqli_close($dbcon);
header('location:../quantri.php');
}
else {
    echo "Không thể xóa";
}
?>