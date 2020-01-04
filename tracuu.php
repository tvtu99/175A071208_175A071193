<?php
$cmt = $_POST['cmt'];
$masv = $_POST['masv'];
$namhoc = $_POST['namhoc'];
$kihoc = $_POST['kihoc'];
$giaidoan = $_POST['giaidoan'];
$output = ''; //khai bao chuoi de echo xuat du lieu

$dbcon = mysqli_connect("localhost","trinhtu","trinhtu15","db_quanlydiem"); //connect
mysqli_set_charset($dbcon, 'utf8');
if(!$dbcon)
{
    die('loi ket loi :' .mysqli_connect_error()); //bao loi
}
else
{

    $query = "SELECT diem.MaSV,giaidoan.MaGD,monh.TenMH,diem.DQT,diem.DT,diem.diemtongket  FROM giaidoan,lophp,monh,diem,dsl WHERE giaidoan.MaGD = lophp.MaGD AND lophp.MaLHP = dsl.MaLHP AND lophp.MaMH = monh.MaMH AND diem.MaMH=monh.MaMH AND giaidoan.Nam = $namhoc AND giaidoan.KyH = $kihoc AND giaidoan.gd = $giaidoan AND diem.MaSV = (SELECT sv.MaSV FROM sv WHERE sv.MaSV = '$masv' AND sv.CMT = $cmt AND dsl.MaSV ='$masv')";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
    {
        $output .= '<tr><td>' .$row[0]. '</td><td>' .$row[1]. '</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td></tr>';
    }
}
//dong kn
mysqli_close($dbcon);





echo '<tr class="row-first">
<td width="150">Mã Sinh Viên</td>
<td width="100">Giai Đoạn</td>
<td width="150">Tên Môn Học</td>
<td width="150">Quá Trình</td>													
<td width="150">Điểm Thi</td>
<td width="70">Điểm</td>
</tr>'.$output;
?>