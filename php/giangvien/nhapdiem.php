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
                    <li><a href="giangvien.html"><span>Nhập Danh Sách Lớp</span></a></li>
                    <li><a href=""  class="active"><span>Nhập Điểm</span></a></li>
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
                        <div class="col-md-10">
                            <div class="label">Mã SV</div>
                            <div class="value"><input type="text" name="masv" size="10" required></div>
                            <div class="label">Điểm Quá Trình</div>
                            <div class="value"><input type="text" name="dqt" size="10" required></div>
                            <div class="label">Điểm Thi</div>
                            <div class="value"><input type="text" name="dt" size="10" required></div>
                        </div>
                        <div class="col-md-2">
                            <div class="btn-n">
                                <button type="submit" class="btn btn-primary">Thêm</button>
                              </div>
                        </div>
                    </div>
                </form>  
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                <div class="daumuc"> <!--  -->
                    <a href="">
                      <h3 style="text-align: center;">Danh Sách Điểm</h3>
                    </a>
                  </div>
              <div class="list">
                <table class="list" bgcolor="#FFFFFF">
                  <tr class="row-first">
                    <td width="150">Mã Sinh Viên</td>
                    <td width="150">Điểm Quá Trình</td>
                    <td width="150">Điểm Thi</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>175A0</td>
                    <td>7.0</td>
                    <td>8.0</td>
                    <td width="50"><a href="">Xóa</a></td>
                    <td width="50"><a href="">Sửa</a></td>
                 </tr>
                 <tr>
                    <td>175A0</td>
                    <td>7.0</td>
                    <td>8.0</td>
                    <td width="50"><a href="">Xóa</a></td>
                    <td width="50"><a href="">Sửa</a></td>
                 </tr>
                 <tr>
                    <td>175A0</td>
                    <td>7.0</td>
                    <td>8.0</td>
                    <td width="50"><a href="">Xóa</a></td>
                    <td width="50"><a href="">Sửa</a></td>
                 </tr>
                 <tr>
                    <td>175A0</td>
                    <td>7.0</td>
                    <td>8.0</td>
                    <td width="50"><a href="">Xóa</a></td>
                    <td width="50"><a href="">Sửa</a></td>
                 </tr>
                 <tr>
                    <td>175A0</td>
                    <td>7.0</td>
                    <td>8.0</td>
                    <td width="50"><a href="">Xóa</a></td>
                    <td width="50"><a href="">Sửa</a></td>
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