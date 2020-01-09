<?php  
if(isset($_POST["mamh"]))
{   include("../includes/conn.php");
    $output1 = '<tr class="row-first">
    <td width="150">Mã Sinh Viên</td>
    <td width="150">Mã Môn Học</td>
    <td width="150">Điểm Thi Lần 1</td>
    <td width="150">Hệ Số Lần 1</td>
    <td width="150">Điểm Thi Lần 2</td>
    <td width="150">Hệ Số Lần 2</td>
    <td width="150">Điểm Chuyên Cần</td>
    <td width="150">Hệ Số Điểm Chuyên Cần</td>
    <td width="150">Điểm Quá Trình</td>
    <td></td>
  </tr>';
    if($_POST["mamh"] != '')  
    {  
        $sql = "SELECT * FROM diem WHERE MaMH = '".$_POST["mamh"]."'";  
    }  
    else  
    {  
        $sql = "SELECT * FROM diem";
    }  
    $kq = mysqli_query($dbcon, $sql);  
    while($row1 = mysqli_fetch_array($kq))  
    {  
        $output1 .= '<tr>
        <td>'.$row1[0].'</td>
        <td>'.$row1[1].'</td>
        <td>'.$row1[2].'</td>
        <td>'.$row1[3].'</td>
        <td>'.$row1[4].'</td>
        <td>'.$row1[5].'</td>
        <td>'.$row1[6].'</td>
        <td>'.$row1[7].'</td>
        <td>'.$row1[8].'</td>
        <td><a href="delete_dqt.php?masv='.$row1[0].'&masv='.$row1[1].'">Xóa</a></td> <!-- gọi hàm xóa -->
     </tr>';
    }
    echo "$output1";
    mysqli_close($dbcon);  
}


?>  