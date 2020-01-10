<?php
  require_once("../includes/ss-gv.php");
  include("../includes/head.php");
  include("./import_dsl.php");
?>
<script>
$(document).ready(function () {
  $("#gv_show_lhp").change(function (e) { 
  e.preventDefault();
  var id = $(this).val();
  $.ajax({
    type: "POST",
    url: "load_dsl.php",
    data: {malhp:id},
    success: function (data) {
      $('#tb_show_dsl').html(data);
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
                    <li><a href="giangvien.php" class="active"><span>Nhập Danh Sách Lớp</span></a></li>
                    <li><a href="nhapdiem.php"><span>Nhập Điểm Quá Trình</span></a></li>
                    <li><a href="diemthi.php"><span>Nhập Điểm Thi</span></a></li>
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
              
              <form class="frm" action = "" method = "POST" enctype="multipart/form-data">
                <div class="row">
                  <!-- <div class="col-md-3">
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
                  </div> -->
                    <div class="col-md-12">Thêm Bằng File csv (`MaLHP`, `MaSV`)</div>
                    <div class="col-md-3"><input type="file" name="file" id="file" accept=".csv"></div>
                    <div class="btn col-md-12"><button name = "import" class = "btn btn-primary">Import</button></div>
                    
                </div>
              </form>
              <div class="">
                <?php
                echo $out1;
                echo $out2;
                echo $out3;
                ?>
              </div>
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Lớp</h3>
                </div>
              <div class="bangdulieu row">
                    <!-- seclect -->
                    <div class="label col-12">Mã LHP</div>
                    <div class="value col-2">
                        <select name="" id="gv_show_lhp">
                        <?php
                            $output ='<option value="">ALL</option>';
                            include("../includes/conn.php");
                            $sql = "select * from lophp";
                            $kq = mysqli_query($dbcon,$sql);
                            while($row = mysqli_fetch_assoc($kq))
                            {
                                $output .= '<option value="'.$row['MaLHP'].'">'.$row['TenLHP'].'</option>';
                            }
                            echo $output;
                        ?>
                        </select>
                    </div>
                    <!-- seclect -->
                <table class="table-data col-12" bgcolor="#FFFFFF" id = "tb_show_dsl">
                  <tr class="row-first">
                    <td width="150">Mã LHP</td>
                    <td width="150">Mã Sinh Viên</td>
                    <td></td>
                  </tr>
                  <?php
                  $output1 ="";
                      $sql = "SELECT * FROM dsl";
     
                  $kq = mysqli_query($dbcon, $sql);  
                  while($row1 = mysqli_fetch_assoc($kq))  
                  {  
                      $output1 .= '<tr>
                      <td>'.$row1['MaLHP'].'</td>
                      <td>'.$row1['MaSV'].'</td>
                      <td><a href="delete.php?malhp='.$row1['MaLHP'].'&masv='.$row1['MaSV'].'">Xóa</a></td> <!-- gọi hàm xóa -->
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