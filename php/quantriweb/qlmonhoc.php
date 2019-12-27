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
                    <li><a href="qlmonhoc.php"  class="active"><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Môn Học</h3>
                </div>
                <form class="frm" action="" method="post">
                <div class="row row-qlmh">
                    <div class="col-md-12">
                        <div class="label">Mã Ngành</div>
                        <div class="value">
                            <select name="man" id="">
                                <option>CNTT</option>
                                <option>IT</option>
                                <option>QTKD</option>							
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Tên Môn</div>
                        <div class="value"><input type="text" name="man" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Môn Học</div>
                        <div class="value"><input type="text" name="mam" size="20" maxlength="30" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Số Tín Chỉ</div>
                        <div class="value"><input type="text" name="stc" size="4" maxlength="1" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Hệ Số</div>
                        <div class="value"><input type="text" name="hs" size="4" maxlength="3" required></div>
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
                    <h3 style="text-align: center;">Danh Sách Môn Học</h3>
                </div>
                
            <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr class="row-first">
                        <td width="150">Mã Ngành</td>
                        <td width="150">Mã Môn</td>
                        <td width="300">Tên Môn</td>
                        <td width="150">Số Tín Chỉ</td>
                        <td width="150">Hệ Số</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CNTT</td>
                        <td>CNW</td>
                        <td>Công Nghệ WEB</td>
                        <td>3</td>
                        <td>0.4</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>CNTT</td>
                        <td>CNW</td>
                        <td>Công Nghệ WEB</td>
                        <td>3</td>
                        <td>0.4</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>CNTT</td>
                        <td>CNW</td>
                        <td>Công Nghệ WEB</td>
                        <td>3</td>
                        <td>0.4</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>CNTT</td>
                        <td>CNW</td>
                        <td>Công Nghệ WEB</td>
                        <td>3</td>
                        <td>0.4</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>CNTT</td>
                        <td>CNW</td>
                        <td>Công Nghệ WEB</td>
                        <td>3</td>
                        <td>0.4</td>
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