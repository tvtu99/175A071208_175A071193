<?php
$makhoa = $_POST['makhoa'];
$tenkhoa = $_POST['tenkhoa'];

$dbcon = mysqli_connect("localhost","trinhtu","trinhtu15","db_quanlydiem"); //connect
mysqli_set_charset($dbcon, 'utf8');
if(!$dbcon)
{
    die('loi ket loi :' .mysqli_connect_error()); //bao loi
}
else
{
    $query = "INSERT INTO `khoa`(`MaKhoa`, `TenKhoa`, `MaTruong`) VALUES ('$makhoa','$tenkhoa',N'TLU')";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if($kq)
    {
        echo "Thêm <br>Mã Khoa : ".$makhoa."<br>Tên Khoa : ".$tenkhoa."<br> Thành Công";
    }
    else {
        $query2 = "UPDATE `khoa` SET `TenKhoa`='$tenkhoa' WHERE MaKhoa = '$makhoa'";
        $kq2 = mysqli_query($dbcon,$query2); //truyen sql vao mysql
        if($kq2){
            echo "Đã Update thành công <br>Mã Khoa : ".$makhoa."<br>Tên Khoa : ".$tenkhoa."<br>";
        }
    }
}
//dong kn
mysqli_close($dbcon);


?>