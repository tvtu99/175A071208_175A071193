<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
if($_POST){
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    // posted email must not be empty
    if(empty($email)){
        echo "<div>Email cannot be empty.</div>";
    }
    // must be a valid email address
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<div>Your email address is not valid.</div>";
    }
    else
    {
        $con = new PDO('mysql:host=localhost;dbname=db_quanlydiem',"trinhtu","trinhtu15");
        // Check connection
        if(!$con){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        else
            {
                //Kiem tra ban ghi ton tai
            $query = "SELECT username FROM taikhoan WHERE email = ? and verified = '1'"; //? thay the gia tri
            $stmt = $con->prepare( $query );
            $stmt->bindParam(1, $email); //chen gia tri vao ? thu 1
            $stmt->execute(); //run
            $num = $stmt->rowCount(); //so hang
    
            if($num>0){
                echo "<div>Tai khoan cua ban da duoc kich hoat</div>";
            }
            else
            {
                // kiểm tra trước nếu có email chưa được xác minh liên quan
                $query = "SELECT username FROM taikhoan WHERE email = ? and verified = '0'";
                $stmt = $con->prepare( $query );
                $stmt->bindParam(1, $email);
                $stmt->execute();
                $num = $stmt->rowCount();
    
                if($num>0){
    
                    // bạn phải tạo một kịch bản xác minh gửi lại
                    echo "<div>Your email is already in the system but not yet verified. <a href='resend.php'>Resend verification?</a>.</div>";
                }
                //bay gio se xac minh
                else
                {
                    $verificationCode = md5(uniqid("TRINHTU165", true));// Tạo mã xác minh
                    // send the email verification
                    $verificationLink = "http://localhost:9999/project/php/activate.php?code=" . $verificationCode;// noi dung mail
                    $to = "$email";
                    $subject = "Send Email from Localhost";
                    $txt = "Vui Lòng Click vào link để xác nhận :" .$verificationLink;
                    $headers = "From: meocon160599@gmail.com";
                    $test = mail($to,$subject,$txt,$headers);
                    if($test){
                        echo "<div>A verification email were sent to <b>" . $email . "</b>, please open your email inbox and click the given link so you can login.</div>";
                        $query = "INSERT INTO 
                                    taikhoan 
                                SET 
                                    email = ?, 
                                    verification_code = ?, 
                                    verified = '0',
                                    username =?,
                                    password = ?";
    
                        $stmt = $con->prepare($query);
    
                        $stmt->bindParam(1, $email);
                        $stmt->bindParam(2, $verificationCode);
                        $stmt->bindParam(3, $user);
                        $stmt->bindParam(4, $pass);
    
                        // Execute the query
                        if($stmt->execute()){
                            echo "<div>Unverified email was saved to the database.</div>";
                        }else{
                            echo "<div>Unable to save your email to the database. <a href='taotaikhoan.php'>Quay Lại.</a></div>";
                            print_r($stmt->errorInfo());
                        }
                        
                    }
                    else
                    {
                        echo "email loi";
                    }
                
                }
            }
            
        }
}
}
?>