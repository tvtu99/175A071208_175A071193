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
                    <li><a href="quantri.php" class="active"><span>QL Ngành Học</span></a></li>
                    <li><a href="qlmonhoc.php"  ><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Ngành Học</h3>
                </div>
                <form class="frm" action="" method="post">
                <div class="row">
                <div class="col-md-12">
                        <div class="label">Mã Khoa</div>
                        <div class="value">
                            <select>
                                <option value="$makhoa">Công Nghệ Thông Tin</option>
                                <option value="$makhoa">Hệ Thống Thông Tin</option>
                                <option value="$makhoa">Phần Mềm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Ngành Học</div>
                        <div class="value"><input type="text" name="man" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Tên Ngành Học</div>
                        <div class="value"><input type="text" name="tenn" size="20" maxlength="30" required></div>
                    </div>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12">
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
                    <h3 style="text-align: center;">Ngành Học Đại Học Thủy Lợi</h3>
                </div>
                <div class="row">
                <div class="col-md-12">
                        <div class="label">Xem Theo Khoa</div>
                        <div class="value">
                            <select name="" id="">
                                <option value="">Cong nghe thong tin</option>
                                <option value="">quan tri</option>
                                <option value="">abc</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr class="row-first">
                        <td width="150">Mã Ngành Học</td>
                        <td width="300">Tên Ngành</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CNTT</td>
                        <td>Công Nghệ Thông Tin</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>QTKD</td>
                        <td>Quản Trị Kinh Doanh</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>DT</td>
                        <td>Điện Tử</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>IT</td>
                        <td>Công Nghệ Thông Tin</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                </table>
                
                </div>
            </div> 
            
        </div>
    </main>
    <!-- footer -->
    <?php
    include("../includes/footer.php");
?>