<?php
//xóa ngành theo mã ngành truyền vào
if(isset($_GET['MaMH'])){
    $mamh = $_GET['MaMH'];
    $tenmh = $_GET['TenMH'];
    $man = $_GET['MaN'];
    $stc = $_GET['STC'];
    $hs = $_GET['HS'];
}
else {
    $mamh ='';
$tenmh ='';
$man ='';
$stc = '';
$hs ='';
}

?>
<?php
require_once("../includes/ss-qtw.php");
include("../includes/head.php");
include("./xuly/import-monhoc.php"); //import môn học bang file
include("../includes/conn.php");


?>
<!-- main -->
<main>
    <div class="row" style="margin-top: 30px;">
        <!-- main-left -->
        <div class="main-l col-md-3">
            <div class="dm">
                <h5 style="padding: 5px;">Danh Mục Chính</h5>
                <ul class="menu">
                <li><a href="qlkhoa.php"><span>QL KHOA</span></a></li>
                <li><a href="quantri.php"><span>QL Ngành Học</span></a></li>
                <li><a href="qlmonhoc.php"  class="active"><span>QL Môn Học</span></a></li>
                <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                <!-- <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li> -->
                </ul>	   
            </div>
            
        </div>
        <!-- main-right -->
        <div class="main-r col-md-9">
            
            <div class="bangdulieu">
                <?php
                echo '<form action="./xuly/update-mh.php" method="post">
                <div class="row row-qlmh">  
                <div class="col-md-12 " style="display : none">
                    <div class="label">Mã Môn Học : Không Sửa </div>
                    <div class="value" ><input type="text" name="mamh" value ="'.$mamh.'"size="20" maxlength="8" required></div>
                </div>
                <div class="col-md-12">
                    <div class="label">Tên Môn Học</div>
                    <div class="value"><input type="text" name="tenmh" value ="'.$tenmh.'"size="20" maxlength="30" required></div>
                </div>
                <div class="col-md-12">
                    <div class="label">Mã Ngành : '.$man.'</div>
                </div>
                <div class="col-md-12">
                    <div class="label">Tín Chỉ Học</div>
                    <div class="value"><input type="text" name="stc"value ="'.$stc.'" size="4" maxlength="1" required></div>
                </div>
                <div class="col-md-12">
                    <div class="label">Hệ Số Quá Trình</div>
                    <div class="value"><input type="text" name="hs"value ="'.$hs.'" size="4" maxlength="3" required></div>
                </div>
                <div class="col-md-12">
                    <div class="btn-n">
                        <button id = "bt-update-mh" type="submit" class="btn btn-primary">Cập Nhập</button>
                    </div>
                </div>
            </div>
                
                </form>';
                ?>
            </div>
        </div> 
            
        
    </div>
</main>
<!-- footer -->
<?php
include("../includes/footer.php");
?>