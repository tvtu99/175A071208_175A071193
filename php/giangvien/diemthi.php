<?php
  require_once("../includes/ss-gv.php");
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
                    <li><a href="giangvien.php"><span>Nhập Danh Sách Lớp</span></a></li>
                    <li><a href="nhapdiem.php"><span>Nhập Điểm Quá Trình</span></a></li>
                    <li><a href="diemthi.php"  class="active"><span>Nhập Điểm Thi</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
              <div class="daumuc">
                <a href="">
                  <h3 style="text-align: center;">Nhập Điểm Thi</h3>
                </a>
              </div>
              <form class = "frm" action="">
                  <div class="col-md-12">Thêm Bằng File Excel</div>
                  (A:Mã Sinh Viên,B:Mã Môn Học,C: Điểm Thi,D : Điểm Tổng Kết)
                  <div class="col-md-2"><input type="file" name="" id=""></div>
                  <div class="btn col-md-12"><button class = "btn btn-primary">Update</button></div>
              </form>  
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                <div class="daumuc"> <!--  -->
                    <a href="">
                      <h3 style="text-align: center;">Danh Sách Điểm</h3>
                    </a>
                </div>
                <div class="row">
                <div class="col-md-12">
                        <div class="label">Lớp Học Phần</div>
                        <div class="value">
                            <select name="" id="">
                                <option value="">LHP01</option>
                                <option value="">LHP02</option>
                                <option value="">LHP03</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
              <div class="bangdulieu">
                <input type="submit" value="Cập Nhập">
                <table class="table-data" bgcolor="#FFFFFF">
                  <tr class="row-first">
                    <td></td>
                    <td width="150">Mã Sinh Viên</td>
                    <td width="150">Mã Môn Học</td>
                    <td width="150">Điểm Thi</td>
                    <td width="150">Tổng Kết</td>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>175A1</td>
                    <td>CNW</td>
                    <td>8.0</td>
                    <td></td>
                 </tr>
                 <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>175A1</td>
                  <td>CNW</td>
                  <td>8.0</td>
                  <td></td>
                 </tr>
                 <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>175A1</td>
                  <td>CNW</td>
                  <td>8.0</td>
                  <td></td>
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