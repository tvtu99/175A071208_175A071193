<?php
$man = $_POST['man'];
$tenn = $_POST['tenn'];
include("../../includes/conn.php");
if(!$dbcon)
{
    die('loi ket loi :' .mysqli_connect_error()); //bao loi
}
else
{
    $sql = "SELECT * FROM `nganh` WHERE man = '$man'";
    $sl = mysqli_query($dbcon,$sql);
    $query = "UPDATE `nganh` SET `TenN`='$tenn' WHERE Man = '$man'";
    mysqli_query($dbcon,$query); //truyen sql vao mysql
    if(mysqli_num_rows($sl) > 0)
    {
        echo "Cập Nhập Mã Ngành : ".$man." <br>Tên Ngành : ".$tenn." Thành Công";
    }
    else {
        echo 'Mã Ngành Không Tồn Tại';
    }
}
//dong kn
mysqli_close($dbcon);


?>