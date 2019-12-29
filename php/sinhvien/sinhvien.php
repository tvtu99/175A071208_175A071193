<?php
  require_once("../includes/ss-sv.php");
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
                    <li><a href="sinhvien.php" class="active"><span>Điểm Học Phần</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                                
                <div class="daumuc">
                    <h3 style="text-align: center;">Tra Cuu diem</h3>
                </div>
                <form class="frm" action="" method="post">
                    <div class="row row-qlmh">    
                        
                        <div class="col-md-12">
                            <div class="label">Năm Học</div>
                            <div class="value">
                                <select name="level" id="">
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>							
                                </select>
                            </div>
                    
                        </div>
                        <div class="col-md-12">
                            <div class="label">Học Kì</div>
                            <div class="value">
                                <select name="level" id="">
                                    <option>1</option>
                                    <option>2</option>							
                                </select>
                            </div>
                    
                        </div>
                        <div class="col-md-12">
                            <div class="label">Giai Đoạn</div>
                            <div class="value">
                                <select name="level" id="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>							
                                </select>
                            </div>
                    
                        </div>
                        <div class="col-md-4">
                            <div class="btn-n">
                                <button type="submit" class="btn btn-primary">Tra Cứu</button>
                            </div>
                        </div>
                    </div>
                </form>
                
            <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr class="row-first">
                        <td width="150">Mã Sinh Viên</td>
                        <td width="100">Giai Đoạn</td>
                        <td width="150">Mã Môn Học</td>
                        <td width="150">Quá Trình</td>													
                        <td width="150">Điểm Thi</td>
                        <td width="70">Điểm</td>
                    </tr>
                    <tr>
                    <td>175A0</td>
                          <td>GD12019</td>
                          <td>CNW</td>
                          <td>7.0</td>
                          <td>7.0</td>
                          <td>7.0</td>
                    </tr>
                    <tr>
                        <td>175A0</td>
                        <td>GD12019</td>
                        <td>CNW</td>
                        <td>7.0</td>
                        <td>7.0</td>
                        <td>7.0</td>
                    </tr>
                    <tr>
                        <td>175A0</td>
                        <td>GD12019</td>
                        <td>CNW</td>
                        <td>7.0</td>
                        <td>7.0</td>
                        <td>7.0</td>
                    </tr>
                    <tr>
                        <td>175A0</td>
                        <td>GD12019</td>
                        <td>CNW</td>
                        <td>7.0</td>
                        <td>7.0</td>
                        <td>7.0</td>
                    </tr>
                    
                </table>
                
                </div>
            </div> 
            
        </div>
    </main>
<?php
    include("../includes/footer.php");
?>