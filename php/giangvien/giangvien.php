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
                    <li><a href="giangvien.php" class="active"><span>Nhập Danh Sách Lớp</span></a></li>
                    <li><a href="nhapdiem.php"><span>Nhập Điểm</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
              <div class="daumuc">
                <a href="">
                  <h3 style="text-align: center;">Nhập Danh Sách Lớp</h3>
                </a>
              </div>
              <form class="frm" action="" method="post">
                <div class="row">
                  <div class="col-md-3">
                    <div class="label">Lớp Học Phần</div>
                      <div class="value">
                        <select name="kihoc" id="">
                          <option>LHP1</option>
                          <option>LHP2</option>
                          <option>LHP12</option>							
                        </select>
                      </div>
                  </div>
                  <div class="col-md-4">
                    <div class="label">Mã SV</div>
                    <div class="value"><input type="text" name="masv" size="20" required></div>
                  </div>
                  <div class="col-md-5">
                    <div class="btn-n">
                      <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                  </div>
                </div>
              </form>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
              <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                  <tr class="row-first">
                    <td width="150">Mã LHP</td>
                    <td width="150">Mã Sinh Viên</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>LHP1</td>
                    <td>175A0</td>
                    <td><a href="">Xóa</a></td> <!-- gọi hàm xóa -->
                  </tr>
                  <tr>
                    <td>LHP1</td>
                    <td>175A0</td>
                    <td><a href="">Xóa</a></td> <!-- gọi hàm xóa -->
                  </tr>
                  <tr>
                    <td>LHP1</td>
                    <td>175A0</td>
                    <td><a href="">Xóa</a></td> <!-- gọi hàm xóa -->
                  </tr>
                  <tr>
                    <td>LHP1</td>
                    <td>175A0</td>
                    <td><a href="">Xóa</a></td> <!-- gọi hàm xóa -->
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