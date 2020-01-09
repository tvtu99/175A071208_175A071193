<?php  
include("../../includes/conn.php");
$output = '<tr class="row-first">
<td width="150">Mã Lớp Học Phần</td>
<td width="200">Tên Lớp</td>
<td width="120">Mã Môn Học</td>
<td width="120">Mã Giảng Viên</td>
<td width="120">Mã Giai Đoạn</td>
<td></td>
</tr>';
if(isset($_POST["magd"]))
{  
    if($_POST["magd"] != '')  
    {  
        $sql = "SELECT * FROM `lophp` WHERE MaGD = '".$_POST["magd"]."'"; 
    }  
    else  
    {  
        $sql = "SELECT * FROM lophp";
    } 
      
    
    $kq = mysqli_query($dbcon, $sql);  
    while($row =mysqli_fetch_array($kq))  
    {  
        $output .= '<tr>
        <td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td><a href="./xuly/delete-lophp.php?MaLHP='.$row[0].'">Xóa</a></td>
    </tr>';
    }  
    echo $output;  
}

mysqli_close($dbcon);  
?>  