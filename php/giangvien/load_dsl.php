<?php  
if(isset($_POST["malhp"]))
{   include("../includes/conn.php");
    $output1 = '<tr class="row-first">
    <td width="150">Mã LHP</td>
    <td width="150">Mã Sinh Viên</td>
    <td></td>
  </tr>';
    if($_POST["malhp"] != '')  
    {  
        $sql = "SELECT * FROM dsl WHERE MaLHP = '".$_POST["malhp"]."'";  
    }  
    else  
    {  
        $sql = "SELECT * FROM dsl";
    }  
    $kq = mysqli_query($dbcon, $sql);  
    while($row1 = mysqli_fetch_assoc($kq))  
    {  
        $output1 .= '<tr>
        <td>'.$row1['MaLHP'].'</td>
        <td>'.$row1['MaSV'].'</td>
        <td><a href="delete.php?malhp='.$row1['MaLHP'].'&masv='.$row1['MaSV'].'">Xóa</a></td> <!-- gọi hàm xóa -->
      </tr>';
    }
    echo "$output1";
    mysqli_close($dbcon);  
}


?>  