<?php
require_once("../includes/ss-qtw.php");
include("../includes/head.php");
include("./xuly/import-monhoc.php"); //import môn học bang file
include("../includes/conn.php");

function khoa($dbcon){
    include("../includes/conn.php");
    $output = '<option value=""></option>';  
    $sql = "SELECT * FROM `khoa` WHERE 1";  
    $kq = mysqli_query($dbcon, $sql);  
    while($row = mysqli_fetch_assoc($kq))  
    {  
        $output .= '<option value="'.$row['MaKhoa'].'">'.$row['TenKhoa'].'</option>';  
    }  
    mysqli_close($dbcon);
    return $output;    
}
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
                    <li><a href="quantri.php"><span>QL Ngành Học</span></a></li>
                    <li><a href="qlmonhoc.php"  class="active"><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <!-- <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li> -->
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Môn Học</h3>
                </div>
                <form class="frm" action = "" method = "POST" id="" enctype="multipart/form-data">
                <div class="row row-qlmh">
                    <!-- <div class="col-md-12">
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
                    </div> -->
                    <div class="col-md-12">Thêm Bằng File .CSV(MaMH, TenMH, MaN, Số Tín Chỉ, Hệ số Quá Trình(0.4))<br><br></div>
                    <div class="col-md-2"><input type="file" name="file" id="file" accept=".csv"></div>
                    <div class="btn col-md-12"><button name ="import" class = "btn btn-primary">IMPORT</button></div>
                </div>
                </form>
                <div> <!-- Thông báo việc import -->
                    <?php
                    echo $out1;
                    echo $out2;
                    echo $out3;
                    ?>
                </div>
                
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Môn Học</h3>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="label">Mã Khoa</div>
                        <div class="value">
                            <select name="show-khoa" id="show-khoa">
                            
                                <?php
                                echo khoa($dbcon);
                                ?>
                            </select>
                        </div>
                        <!-- <script>  
                            
                        </script> -->
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Ngành</div>
                        <div class="value">
                            <select name="" id="shownganh">
                                
                            </select>
                        </div>
                        <!-- <script>  
                              
                        </script> -->
                    </div>
                    
                </div>
                <div class="bangdulieu">
                    <table class="table-data" bgcolor="#FFFFFF" id ="tb_show_mon">
                        <!-- <tr class="row-first">
                            <td width="150">Mã Môn</td>
                            <td width="300">Tên Môn</td>
                            <td width="150">Mã Ngành</td>
                            <td width="150">Số Tín Chỉ</td>
                            <td width="150">Hệ Số</td>
                            <td></td>
                            <td></td>                            
                        </tr> -->
                      
                    </table>
                    
                </div>
            </div> 
                
            
        </div>
    </main>
    <!-- footer -->
    <?php
    include("../includes/footer.php");
?>