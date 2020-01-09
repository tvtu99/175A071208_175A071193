<?php  
if(isset($_POST["mamh"]))
{   include("../includes/conn.php");
    $output1 = '<tr class="row-first">
    
    <td width="150">Mã Sinh Viên</td>
    <td width="150">Mã Môn Học</td>
    <td width="150">Điểm Thi</td>
    <td width="150">Tổng Kết</td>
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
        <td>'.$row1[9].'</td>
        <td>'.$row1[10].'</td>
        <td><a href="delete_dt.php?masv='.$row1[0].'&mamh='.$row1[1].'">Xóa</a></td> <!-- gọi hàm xóa -->
    </tr>';
    }
    echo "$output1";
    mysqli_close($dbcon);
}


?>  