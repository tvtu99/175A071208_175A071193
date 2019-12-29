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
                    <li><a href="nhapdiem.php"  class="active"><span>Nhập Điểm</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
              <div class="daumuc">
                <a href="">
                  <h3 style="text-align: center;">Nhập Điểm Danh Sách Lớp</h3>
                </a>
              </div>
              
              <div class="frm">
                <div class="row">
                    <div class="col-md-4">
                      <div class="label">Lớp Học Phần</div>
                        <div class="value">
                          <select name="kihoc" id="">
                            <option>LHP1</option>
                            <option>LHP2</option>
                            <option>LHP12</option>							
                          </select>
                        </div>
                    </div>
                    
                    <div class="col-md-2">
                      <div class="btn-n">
                        <button class="btn btn-primary">Hiển Thị</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="daumuc">
                    <a href="">
                        <h3 style="text-align: center;">Nhập</h3>
                    </a>
                </div>
                <form class = "frm" action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="label">Mã SV</div>
                            <div class="value"><input type="text" name="masv" size="10" required></div>
                        </div>
                        <div class="col-md-12">
                          <div class="label">Điểm Quá Trình</div>
                          <div class="value"><input type="text" name="dqt" size="10" required></div>
                        </div>
                        <div class="col-md-12">
                          <div class="label">Điểm Thi</div>
                          <div class="value"><input type="text" name="dt" size="10" required></div>
                        </div>
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
                <table class="table-data" bgcolor="#FFFFFF">
                  <tr class="row-first">
                    <td></td>
                    <td width="150">Mã Sinh Viên</td>
                    <td width="150">Điểm Quá Trình</td>
                    <td width="150">Điểm Thi</td>

                  </tr>
                  <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>175A1</td>
                    <td>7.0</td>
                    <td>8.0</td>

                 </tr>
                 <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>175A2</td>
                  <td>7.0</td>
                  <td>8.0</td>

                 </tr>
                 <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>175A3</td>
                  <td>7.0</td>
                  <td>8.0</td>

                 </tr>
                 <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>175A4</td>
                  <td>7.0</td>
                  <td>8.0</td>

                 </tr>
                 <tr>
                  <td><input type="checkbox" name="" id=""></td>
                  <td>175A5</td>
                  <td>7.0</td>
                  <td>8.0</td>

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