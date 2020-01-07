<?php  
include("../../includes/conn.php");
$output = '<tr class="row-first">
<td width="150">Mã Ngành Học</td>
<td width="300">Tên Ngành</td>
<td></td>
</tr>';
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
    while($row = mysqli_fetch_array($kq))  
    {  
        $output .= '<tr><td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td><a href="./xuly/delete-nganh.php?man='.$row[0].'">Xóa</a></td></tr>';
    }  
    echo $output;  
}
mysqli_close($dbcon);  
?>  