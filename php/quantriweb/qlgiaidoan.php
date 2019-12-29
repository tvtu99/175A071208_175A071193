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
                    <li><a href="qlgiaidoan.php"  class="active"><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Giai Đoạn Học</h3>
                </div>
                <form class="frm" action="" method="post">
                <div class="row row-qlmh">
                    
                    <div class="col-md-12">
                        <div class="label">Mã Giai Đoạn</div>
                        <div class="value"><input type="text" name="magd" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Năm Học</div>
                        <div class="value"><input type="text" name="namh" size="4" maxlength="4" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Kì Học</div>
                        <div class="value"><input type="text" name="kih" size="4" maxlength="1" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Giai Đoạn</div>
                        <div class="value"><input type="text" name="gdh" size="4" maxlength="1" required></div>
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
                    <h3 style="text-align: center;">Danh Sách Giai Đoạn</h3>
                </div>
                
                <form action="" method="post" class = "row">
                <div class="col-md-12">
                <div class="label">Hiển Thị Theo Năm</div>
                <div class="value">
                    <select name="" id="">
                        <option value="">2017</option>
                        <option value="">2016</option>
                        <option value="">2015</option>
                    </select>
                </div>
                </div>
                
                <div class="col-md-12">
                    <input type="submit" value="Cập Nhập">
                </div>
                
                <div class="bangdulieu">
                    <table class="table-data" bgcolor="#FFFFFF">
                        <tr class="row-first">
                            <td></td>
                            <td width="150">Mã Giai Đoạn</td>
                            <td width="150">Năm Học</td>
                            <td width="300">Kì Học</td>
                            <td width="150">Giai Đoạn</td>
                            <td></td>
                            
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>GD12019</td>
                            <td>2019</td>
                            <td>1</td>
                            <td>1</td>
                            <td><a href="">Xóa</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>GD22019</td>
                            <td>2019</td>
                            <td>1</td>
                            <td>2</td>
                            <td><a href="">Xóa</a></td>
                  
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>GD32019</td>
                            <td>2019</td>
                            <td>2</td>
                            <td>3</td>
                            <td><a href="">Xóa</a></td>
                         
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