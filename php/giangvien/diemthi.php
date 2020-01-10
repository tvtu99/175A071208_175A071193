<?php
  require_once("../includes/ss-gv.php");
  include("../includes/head.php");
  include("./import_dt.php");
?>
<script>
$(document).ready(function () {
  $("#nd_mh").change(function (e) { 
  e.preventDefault();
  var id = $(this).val();
  $.ajax({
    type: "POST",
    url: "load_dt.php",
    data: {mamh:id},
    success: function (data) {
      $('#tb_show_dt').html(data);
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
              <form class="frm row" action = "" method = "POST" enctype="multipart/form-data">
                  <div class="col-md-12">Thêm Bằng File Excel</div>
                  (Mã Sinh Viên,Mã Môn Học,Điểm Thi)
                  <div class="col-md-3"><input type="file" name="file" id="file" accept=".csv"></div>
                  <div class="btn col-md-3"><button name = "import" class = "btn btn-primary">Import</button></div>
              </form>  
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                <div class="daumuc"> <!--  -->
                    <a href="">
                      <h3 style="text-align: center;">Danh Sách Điểm</h3>
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
              <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF" id ="tb_show_dt">
                <?php
                  include("../includes/conn.php");
                  $output1 = '<tr class="row-first">
                  
                  <td width="150">Mã Sinh Viên</td>
                  <td width="150">Mã Môn Học</td>
                  <td width="150">Điểm Thi</td>
                  <td width="150">Tổng Kết</td>
                  <td></td>
                </tr>';
                  
                      $sql = "SELECT * FROM diem";
     
                  $kq = mysqli_query($dbcon, $sql);  
                  while($row1 = mysqli_fetch_array($kq))  
                  {  
                      $output1 .= '<tr>
                      <td>'.$row1[0].'</td>
                      <td>'.$row1[1].'</td>
                      <td>'.$row1[9].'</td>
                      <td>'.$row1[10].'</td>
                      <td><a href="delete_dt.php?masv='.$row1[0].'&mamh='.$row1[1].'">Xóa</a></td> <!-- gọi hàm xóa -->
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