<?php
if($_POST["magd"] !='' && $_POST["namh"] != '' && $_POST['kyh']!='' && $_POST['gd']!='')
{
    $magd = $_POST['magd'];
    $nam = $_POST['namh'];
    $kyh = $_POST['kyh'];
    $gd = $_POST['gd'];
    include("../../includes/conn.php");
    if(!$dbcon)
    {
        die('loi ket loi :' .mysqli_connect_error()); //bao loi
    }
    else
    {
        $sql = "SELECT * FROM `giaidoan` WHERE MaGD = '$magd'";
        $sl = mysqli_query($dbcon,$sql);
        $query = "UPDATE `giaidoan` SET `Nam`='$nam',`KyH`='$kyh',`GD`='$gd' WHERE MaGD = '$magd'";
        mysqli_query($dbcon,$query); //truyen sql vao mysql
        if(mysqli_num_rows($sl) > 0)
        {
            echo "Cập Nhập : ".$magd." Thành Công";
        }
        else {
            echo 'Lỗi';
        }
    }
    //dong kn
    mysqli_close($dbcon);

}
else {
    echo "điền đầy đủ thông tin";
}

?>