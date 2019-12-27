<?php
$code = $_GET['code'];
$con = new PDO('mysql:host=localhost;dbname=db_quanlydiem',"trinhtu","trinhtu15");
// Check connection
if(!$con){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
    // check first if record exists
    $query = "SELECT username FROM taikhoan WHERE verification_code = ? and verified = '0'";
    $stmt = $con->prepare( $query );
    $stmt->bindParam(1, $code);
    $stmt->execute();
    $num = $stmt->rowCount();
    
    if($num>0){
    
        // update the 'verified' field, from 0 to 1 (unverified to verified)
        $query = "UPDATE taikhoan 
                    set verified = '1'
                    where verification_code = :verification_code";
    
        $stmt = $con->prepare($query);
        $stmt->bindParam(':verification_code', $code);

        
        if($stmt->execute())
        {
            echo "<div>Kích Hoạt Thành Công. Bây giờ bạn có thể đăng nhập. <a href='dangnhap.php'>Đăng Nhập</a></div>" ;
        }
        else
        {
            echo "<div>Khong the cap nhap ma xac minh</div>";
            //print_r($stmt->errorInfo());
        }       
    
    }
    else{
        echo "<div>Tài Khoản k tồn tại. Mời bạn đăng ký lại <a href='taotaikhoan.php'>Đăng ký Lại</a></div>";       // tell the user he should not be in this page
    }
}
?>

