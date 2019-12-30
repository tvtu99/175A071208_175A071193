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
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php"  class="active"><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Lớp Học Phần - Giảng Viên</h3>
                </div>
                <form class="frm" action="" method="post">
                <div class="row row-qlmh">
                    
                    <div class="col-md-12">
                        <div class="label">Mã Lớp HP</div>
                        <div class="value"><input type="text" name="malhp" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Giảng Viên</div>
                        <div class="value"><input type="text" name="magv" size="4" maxlength="1" required></div>
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
                
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Lớp Học Phần Và Giảng Viên</h3>
                </div>
                
                <div class="bangdulieu">
                    <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="label">Giai Đoạn</div>
                            <div class="value">
                                <select name="" id="">
                                    <option value="">2017</option>
                                    <option value="">2016</option>
                                    <option value="">2015</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="label">Môn Học</div>
                            <div class="value">
                                <select name="" id="">
                                    <option value="">Công Nghệ WEb</option>
                                    <option value="">A</option>
                                    <option value="">B</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Cập Nhâp">
                    <table class="table-data" bgcolor="#FFFFFF">
                        <tr class="row-first">
                            <td></td>
                            <td width="150">Mã Lớp HP</td>
                            <td width="120">Mã Giảng Viên</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>LHP01</td>
                            <td>GV01</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>LHP011</td>
                            <td>GV01</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>LHP012</td>
                            <td>GV01</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>LHP0112</td>
                            <td>GV01</td>
                        </tr>
                        
                    </table>
                    </form>
                    

                </div> 
            
        </div>
    </main>
<?php
include("../includes/footer.php")
?>