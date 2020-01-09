<?php
//import danh sách lớp
include("../includes/conn.php");
$out1 = "";
$out2 = "";
$out3 = "";
if (isset($_POST["import"])) {

    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        
        $file = fopen($fileName, "r");
        
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $sqlInsert = "INSERT INTO `diem`(`MaSV`, `MaMH`, `diem1`, `hs1`, `diem2`, `hs2`, `diem3`, `hs3`) values ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."','".$column[5]."','".$column[6]."','".$column[7]."')";
            $result = mysqli_query($dbcon, $sqlInsert);
            if($result)
            {
                $out1 .= " Đã Thêm <br> Mã Sinh Viên : ".$column[0]." Mã Môn Học : ".$column[1]."<br>";
            }
            else {
                $sqll = "UPDATE `diem` SET `diem1`='".$column[2]."',`hs1`='".$column[3]."',`diem2`='".$column[4]."',`hs2`='".$column[5]."',`diem3`='".$column[6]."',`hs3`='".$column[7]."' WHERE MaSV='".$column[0]."' and MaMH='".$column[1]."'";
            mysqli_query($dbcon, $sqll);
            
            $out2 .= " Update <br> MA SV : ".$column[0]."   Mã MH: ".$column[1]."<br>";
            }
        }
    }
}
else {
    $out3 .= "Thêm file .csv";
}
mysqli_close($dbcon);
?>