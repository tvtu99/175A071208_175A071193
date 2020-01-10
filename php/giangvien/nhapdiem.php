<?php
  require_once("../includes/ss-gv.php");
  include("../includes/head.php");
  include("./import_dqt.php");
?>
<script>
$(document).ready(function () {
  $("#nd_mh").change(function (e) { 
  e.preventDefault();
  var id = $(this).val();
  $.ajax({
    type: "POST",
    url: "load_dqt.php",
    data: {mamh:id},
    success: function (data) {
      $('#tb_show_dqt').html(data);
    }
  });
});
});
</script>
    <!-- main -->
    <main>
        <div class="row" style="margin-top: 30px;">
            <!-- main-left -->
            <div class="main-l col-md-3">
                <div class="dm">
                  <h5 style="padding: 5px;">Danh Mục Chính</h5>
                  <ul class="menu">
                    <li><a href="giangvien.php"><span>Nhập Danh Sách Lớp</span></a></li>
                    <li><a href="nhapdiem.php"  class="active"><span>Nhập Điểm Quá Trình</span></a></li>
                    <li><a href="diemthi.php"><span>Nhập Điểm Thi</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
              <div class="daumuc">
                <a href="">
                  <h3 style="text-align: center;">Nhập Điểm Quá Trình</h3>
                </a>
              </div>
              <form class="frm" action = "" method = "POST" enctype="multipart/form-data">
                  <div class="col-md-12">Thêm Bằng File .csv (Nếu Đã Có Mã sinh viên và mã điểm thì sẽ update dữ liệu mới <br> (Mã Sinh Viên,Mã Môn Học,Điểm Thi Lần 1, Hệ Số Điểm Lần 1, Điểm Thi Lần 2,Hệ Số Điểm Lần 2,Điểm Chuyên Cần,Hệ Số Điểm Chuyên Cần)<br><br></div>
                  
                  <div class="col-md-3"><input type="file" name="file" id="file" accept=".csv"></div>
                  <div class="btn col-md-3"><button name = "import" class = "btn btn-primary">Import</button></div>
              </form>
              <div class="">
                <?php
                echo $out1;
                echo $out2;
                echo $out3;
                ?>
              </div>  
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                <div class="daumuc"> <!--  -->
                    <a href="">
                      <h3 style="text-align: center;">Danh Sách Điểm Quá Trình</h3>
                    </a>
                </div>
                <div class="row">
                <!-- seclect -->
                <div class="label col-12">Môn Học</div>
                  <div class="value col-2">
                      <select name="" id="nd_mh">
                      <?php
                          $output ='<option value="">ALL</option>';
                          include("../includes/conn.php");
                          $sql = "select * from diem group by mamh";
                          $kq = mysqli_query($dbcon,$sql);
                          while($row = mysqli_fetch_assoc($kq))
                          {
                              $output .= '<option value="'.$row['MaMH'].'">'.$row['MaMH'].'</option>';
                          }
                          echo $output;
                      ?>
                      </select>
                  </div>
                  <!-- seclect -->
                    
                </div>
              <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF" id = "tb_show_dqt">
                  <?php
                  include("../includes/conn.php");
                  $output1 = '<tr class="row-first">
                  <td width="150">Mã Sinh Viên</td>
                  <td width="150">Mã Môn Học</td>
                  <td width="150">Điểm Thi Lần 1</td>
                  <td width="150">Hệ Số Lần 1</td>
                  <td width="150">Điểm Thi Lần 2</td>
                  <td width="150">Hệ Số Lần 2</td>
                  <td width="150">Điểm Chuyên Cần</td>
                  <td width="150">Hệ Số Điểm Chuyên Cần</td>
                  <td width="150">Điểm Quá Trình</td>
                  <td></td>
                </tr>';
                  
                      $sql = "SELECT * FROM diem";
     
                  $kq = mysqli_query($dbcon, $sql);  
                  while($row1 = mysqli_fetch_array($kq))  
                  {  
                      $output1 .= '<tr>
                      <td>'.$row1[0].'</td>
                      <td>'.$row1[1].'</td>
                      <td>'.$row1[2].'</td>
                      <td>'.$row1[3].'</td>
                      <td>'.$row1[4].'</td>
                      <td>'.$row1[5].'</td>
                      <td>'.$row1[6].'</td>
                      <td>'.$row1[7].'</td>
                      <td>'.$row1[8].'</td>
                      <td><a href="delete_dqt.php?masv='.$row1[0].'&mamh='.$row1[1].'">Xóa</a></td> <!-- gọi hàm xóa -->
                   </tr>';
                  }
                  echo "$output1";
                  mysqli_close($dbcon);  
                  ?>
                 
                </table>
              </div>
          </div> 
            
        </div>
    </main>
    <!-- footer -->
<?php
  include("../includes/footer.php");
?>