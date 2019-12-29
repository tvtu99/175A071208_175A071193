<?php
  require_once("../includes/ss-qtw.php");
  include("../includes/head.php");
?>
    <!-- main -->
    <main>
      
        <div class="row" style="margin-top: 30px;">
            <!-- main-left -->
            <div class="main-l col-md-3">
                <div class="dm">
                  <h5 style="padding: 5px;">Danh Mục Chính</h5>
                  <ul class="menu">
                    <li><a href="qlkhoa.php" class="active"><span>QL KHOA</span></a></li>
                    <li><a href="quantri.php"><span>QL Ngành Học</span></a></li>
                    <li><a href="qlmonhoc.php" ><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php"  ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Khoa</h3>
                </div>
                <form class="frm" action="" method="post">
                <div class="row row-qlmh">  
                    <div class="col-md-12">
                        <div class="label">Mã Khoa</div>
                        <div class="value"><input type="text" name="magd" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Tên Khoa</div>
                        <div class="value"><input type="text" name="namh" size="20" maxlength="30" required></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="btn-n">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </div>
                </form>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                <form action="" method="post"> <!-- form update checkbox -->
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Khoa</h3>
                </div>
                <input type="submit" value="Cập Nhập">
                <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr class="row-first">
                        <td></td>
                        <td width="150">Mã Khoa</td>
                        <td width="300">Tên Khoa</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>CNTT</td>
                        <td>Công Nghệ Thông Tin</td>
                    </tr>
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                        <td>QTKD</td>
                        <td>Quản Trị Kinh Doanh</td>
                    </tr>
                    <tr>
                    <td><input type="checkbox" name="" id=""></td>
                        <td>ANQP</td>
                        <td>An Ninh Quốc Phòng</td>
                    </tr>
                    
                </table>
                
                </div>
            </div> 
                </form>
            
        </div>
    </main>
<?php
    include("../includes/footer.php");
?>