<?php
//xóa ngành theo mã ngành truyền vào
$man = $_GET['man'];
include("../../includes/conn.php");

$query = "DELETE FROM `nganh` WHERE man = '$man'";
mysqli_query($dbcon,$query);
mysqli_close($dbcon);
header('location:../quantri.php');
?>