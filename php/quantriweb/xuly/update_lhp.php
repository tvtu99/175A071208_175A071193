<?php
$malhp = $_POST['malhp'];
$tenlhp = $_POST['tenlhp'];
$mamh = $_POST['mamh'];
$magv = $_POST['magv'];
$magd = $_POST['magd'];
include("../../includes/conn.php");
if(!$dbcon)
{
    die('loi ket loi :' .mysqli_connect_error()); //bao loi
}
else
{
    $sql = "SELECT * FROM `lophp` WHERE MaLHP = '$malhp'";
    $sl = mysqli_query($dbcon,$sql);
    $query = "UPDATE `lophp` SET `TenLHP`='$tenlhp',`MaMH`='$mamh',`MaGV`='$magv',`MaGD`='$magd' WHERE MaLHP = '$malhp'";
    mysqli_query($dbcon,$query); //truyen sql vao mysql
    if(mysqli_num_rows($sl) > 0)
    {
        echo "ok ? Sai Mã Ngành && GV && gd sẽ k update";
    }
    else {
        echo 'Mã LHP Không Tồn Tại';
    }
}
//dong kn
mysqli_close($dbcon);

?>