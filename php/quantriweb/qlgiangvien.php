<?php
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
                </div>
                </form>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Lớp Học Phần Và Giảng Viên</h3>
                </div>
                
            <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr class="row-first">
                        <td width="150">Mã Lớp HP</td>
                        <td width="120">Mã Giảng Viên</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>LHP01</td>
                      
                        <td>GV01</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>LHP01</td>
                        
                        <td>GV01</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>LHP01</td>
                        
                        <td>GV01</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>LHP01</td>
                        
                        <td>GV01</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>LHP01</td>
                        
                        <td>GV01</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    
                </table>
                
                </div>
            </div> 
            
        </div>
    </main>
<?php
include("../includes/footer.php")
?>