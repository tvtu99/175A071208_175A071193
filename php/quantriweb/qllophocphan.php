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
                    <li><a href="qlkhoa.php"><span>QL KHOA</span></a></li>
                    <li><a href="quantri.php"><span>QL Ngành Học</span></a></li>
                    <li><a href="qlmonhoc.php" ><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php" class="active"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Lớp Học Phần</h3>
                </div>
                <form class="frm" action="" method="post">
                <div class="row row-qlmh">
                    
                    <div class="col-md-12">
                        <div class="label">Mã Lớp HP</div>
                        <div class="value"><input type="text" name="malhp" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Tên Lớp HP</div>
                        <div class="value"><input type="text" name="namh" size="20" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Môn Học</div>
                        <div class="value"><input type="text" name="mamh" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Giai Đoạn</div>
                        <div class="value"><input type="text" name="mamh" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Giảng Viên</div>
                        <div class="value"><input type="text" name="magv" size="4" maxlength="8" required></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div class="btn-n">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                    <div class="col-md-12">Thêm Bằng File</div>
                    <div class="col-md-2"><input type="file" name="" id=""></div>
                    <div class="btn col-md-12"><button class = "btn btn-primary">Update</button></div>
                </div>
                </form>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                <form action="" method="post">
                    <div class="daumuc">
                        <h3 style="text-align: center;">Danh Sách Lớp Học Phần</h3>
                    </div>
                    <input type="submit" value="Cập Nhập">
                    <div class="bangdulieu">
                        <table class="table-data" bgcolor="#FFFFFF">
                            <tr class="row-first">
                                <td></td>
                                <td width="150">Mã Lớp HP</td>
                                <td width="200">Tên Lớp HP</td>
                                <td width="120">Mã Môn Học</td>
                                <td width="120">Mã Giai Đoạn</td>
                                <td width="120">Mã Giảng Viên</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>LHP01</td>
                                <td>QT01</td>
                                <td>CNW</td>
                                <td>GD22019</td>
                                <td>GV01</td>
                                <td><a href="">Xóa</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>LHP02</td>
                                <td>QT01</td>
                                <td>CNW</td>
                                <td>GD22019</td>
                                <td>GV01</td>
                                <td><a href="">Xóa</a></td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>LHP03</td>
                                <td>QT01</td>
                                <td>CNW</td>
                                <td>GD22019</td>
                                <td>GV01</td>
                                <td><a href="">Xóa</a></td>
                            </tr>
                            
                        </table>
                        
                    </div>
                </form>
            </div> 
            
        </div>
    </main>
    <!-- footer -->
    <?php
    include("../includes/footer.php");
?>