<?php
session_start();
if(!isset($_SESSION['level']))
{  
  header('location:../../login_logout_sub/dangnhap.php');
}
if($_SESSION['verified'] == '0')
{
header('location:../../login_logout_sub/dangnhap.php');
}
if(isset($_SESSION['level']))
{  
  if($_SESSION['verified'] == '1')
  {
    if($_SESSION['level']== '1' )
    {
      header('location:../../php/sinhvien/sinhvien.php');
    }
    else if($_SESSION['level']== '2')
    {
      header('location:../../php/giangvien/giangvien.php');
    }
    else if($_SESSION['level'] == '3')
    {
      header('location:../../php/quantriweb/qlkhoa.php');
    }
    else if($_SESSION['level']== '4')
    {
      //header('location:../../php/qtv/qtv.php');
    }
  }  
}  
?>