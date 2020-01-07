<?php
//Gửi dữ liệu đăng nhập đến trang ss_login để kiểm tra
session_start();
if(isset($_SESSION['level'])) //phân quyền để chuyển trang
{  
  if($_SESSION['verified'] == '1')
  {
    if($_SESSION['level']== '1' )
    {
      header('location:../php/sinhvien/sinhvien.php');
    }
    else if($_SESSION['level']== '2')
    {
      header('location:../php/giangvien/giangvien.php');
    }
    else if($_SESSION['level'] == '3')
    {
      header('location:../php/quantriweb/qlkhoa.php');
    }
    else if($_SESSION['level']== '4')
    {
      header('location:../php/qtv/qtv.php');
    }
  }  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" type ="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="../css/style.css">
    <link rel="stylesheet" type ="text/css" href="./style-php.css">

</head>
<body>
    <div class="header row">
        <div class="cm col-md-10">
            <div class="logo"><a href="../index.php"><img src="../img/logo.png" alt="" style="width : 80px;"></a></div>
            <a href="../index.php"><H2>Đại Học Thủy Lợi</H2></a></div>
        <div class="dndx col-md-2">Chào Mừng</div>
    </div>
    <div class="form-ac">
        <form action="ss_login.php" method="post">
            <div class="container">
              <label for="uname"><b>Tài Khoản</b></label>
              <input type="text" placeholder="Enter Username" name="user" required>
          
              <label for="psw"><b>Mật Khẩu</b></label>
              <input type="password" placeholder="Enter Password" name="pass" required>
                  
              <button type="submit">Đăng Nhập</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              <a href="taotaikhoan.php"><button type="button" class="create-ac">Tạo Tài Khoản</button></a>
            </div>
          </form>
    </div>
    <!-- footer -->
    <div class="row copyandmxh">
        <div class="col-md-9 copy">
          <p>@2017. Bản quyền thuộc về trường Đại học Thủy Lợi</p>
        </div>
      <div class="mxh col-md-3">
        <ul>
            <li><a href="#" class="fb">FB</a></li>
            <li><a href="#" class="tw">TW</a></li>
            <li><a href="#" class="gp">GB</a></li>
        </ul>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>