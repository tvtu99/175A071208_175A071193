<?php
include("../includes/conn.php");
$out1 = "";
$out2 = "";
$out3 = "";
if (isset($_POST["import_gd"])) {

    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO `giaidoan`(`MaGD`, `Nam`, `KyH`, `GD`) values ('".$column[0]."','$column[1]','$column[2]','$column[3]')";
            $result = mysqli_query($dbcon, $sqlInsert);
            if($result)
            {
                $out1 .= " Đã Thêm Giai Đoạn : ".$column[0]."<br>";
            }
            else {
                $out2 .= " Lỗi Thêm Giai Đoạn : ".$column[0]."<br>";
            }
        }
    }
}
else {
    $out3 .= "Thêm file .csv";
}
mysqli_close($dbcon);
?>

