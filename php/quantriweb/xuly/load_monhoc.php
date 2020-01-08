<?php  
include("../../includes/conn.php");
$output = '<option value="">ALL</option>';
if(isset($_POST["makhoa"]))
{  
    if($_POST["makhoa"] != '')  
    {  
        $sql = "SELECT * FROM nganh WHERE makhoa = '".$_POST["makhoa"]."'";  
    }  
    else  
    {  
        $sql = "SELECT * FROM nganh";
    }  
    $kq = mysqli_query($dbcon, $sql);  
    while($row = mysqli_fetch_assoc($kq))  
    {  
        $output .= '<option value="'.$row['MaN'].'">'.$row['TenN'].'</option>';
    }  
    echo $output;  
}
$output1 = '<tr class="row-first">
<td width="150">Mã Môn</td>
<td width="300">Tên Môn</td>
<td width="150">Mã Ngành</td>
<td width="150">Số Tín Chỉ</td>
<td width="150">Hệ Số</td>
<td></td>
<td></td>                            
</tr>';
if(isset($_POST["manganh"]))
{  
    if($_POST["manganh"] != '')  
    {  
        $sql1 = "SELECT * FROM monh WHERE MaN = '".$_POST["manganh"]."'";  
    }  
    else  
    {  
        $sql1 = "SELECT * FROM monh";
    }  
    $kq1 = mysqli_query($dbcon, $sql1);  
    while($row1 = mysqli_fetch_assoc($kq1))  
    {  
        $output1 .= '<tr>
        <td>'.$row1['MaMH'].'</td>
        <td>'.$row1['TenMH'].'</td>
        <td>'.$row1['MaN'].'</td>
        <td>'.$row1['STC'].'</td>
        <td>'.$row1['HS'].'</td>
        <td><a href="./update-monhoc.php?MaMH='.$row1['MaMH'].'&TenMH='.$row1['TenMH'].'&MaN='.$row1['MaN'].'&STC='.$row1['STC'].'&HS='.$row1['HS'].'">Sửa</a></td>
        <td><a href="./xuly/delete-monhoc.php?MaMH='.$row1['MaMH'].'">Xóa</a></td>
    </tr>';
    }  
    echo $output1;  
}
mysqli_close($dbcon);  
?>  