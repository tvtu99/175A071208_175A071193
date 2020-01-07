<?php
include("../includes/conn.php");
$out1 = "";
$out2 = "";
$out3 = "";
if (isset($_POST["import"])) {

    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO `nganh`(`MaN`, `TenN`, `MaKhoa`) values ('".$column[0]."','$column[1]','$column[2]')";
            $result = mysqli_query($dbcon, $sqlInsert);
            if($result)
            {
                $out1 .= " Đã Thêm Tên Ngành : ".$column[1]."<br>";
            }
            else {
                $out2 .= " Lỗi Thêm Tên Ngành : ".$column[1]."<br>";
            }
        }
    }
}
else {
    $out3 .= "File .csv";
}
mysqli_close($dbcon);
?>

