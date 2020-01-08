<?php  

if(isset($_POST["namhoc"]))
{   include("../../includes/conn.php");
    $output1 = '<tr class="row-first">
    <td width="150">Mã Giai Đoạn</td>
    <td width="150">Năm Học</td>
    <td width="300">Kì Học</td>
    <td width="150">Giai Đoạn</td>
    <td></td> 
    </tr>';
    if($_POST["namhoc"] != '')  
    {  
        $sql = "SELECT * FROM giaidoan WHERE Nam = '".$_POST["namhoc"]."'";  
    }  
    else  
    {  
        $sql = "SELECT * FROM giaidoan";
    }  
    $kq = mysqli_query($dbcon, $sql);  
    while($row1 = mysqli_fetch_assoc($kq))  
    {  
        $output1 .= '<tr>
        <td>'.$row1['MaGD'].'</td>
        <td>'.$row1['Nam'].'</td>
        <td>'.$row1['KyH'].'</td>
        <td>'.$row1['GD'].'</td>
        <td><a href="./xuly/delete-giaidoan.php?MaGD='.$row1['MaGD'].'">Xóa</a></td>';
    }
    echo "$output1";
    mysqli_close($dbcon);  
}


?>  