<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

$dbcon = mysqli_connect("localhost","trinhtu","trinhtu15","db_quanlydiem"); //connect
mysqli_set_charset($dbcon, 'utf8');
if(!$dbcon)
{
    die('loi ket loi :' .mysqli_connect_error()); //bao loi
}
else
{
    //$hashed_pass = password_hash(''.$pass.'',PASSWORD_DEFAULT);
    $query = "SELECT * from taikhoan where username = '$user' ";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    if(mysqli_num_rows($kq) > 0)  //kiem tra dong in ra > 0
    {
        while($row = mysqli_fetch_assoc($kq) ) //ham tra ve tat ca ket qua
        {
            if(password_verify($pass,$row['password'])){
                session_start();
                $_SESSION['level'] = $row['level'];
                $_SESSION['verified'] = $row['verified'];
                $_SESSION['username'] = $row['hoten'];
                header("location:dangnhap.php");
                }                             
            else{
                header("location:dangnhap.php");
            }
        }
    }
    else
    {
        header('location:dangnhap.php');
    }
}
//dong kn
mysqli_close($dbcon);

?>