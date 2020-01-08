<?php
require_once("../includes/ss-qtw.php");
include("../includes/head.php");
include("./xuly/import_giaidoan.php"); //import giai doan hoc bang file
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
                    <li><a href="qlmonhoc.php" ><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php"  class="active"><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Giai Đoạn Học</h3>
                </div>
                <form class="frm" action = "" method = "POST" enctype="multipart/form-data">
                <div class="row row-qlmh">
                    
                    <!-- <div class="col-md-12">
                        <div class="label">Mã Giai Đoạn</div>
                        <div class="value"><input type="text" name="magd" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Năm Học</div>
                        <div class="value"><input type="text" name="namh" size="4" maxlength="4" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Kì Học</div>
                        <div class="value"><input type="text" name="kih" size="4" maxlength="1" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Giai Đoạn</div>
                        <div class="value"><input type="text" name="gdh" size="4" maxlength="1" required></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div class="btn-n">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div> -->
                    <div class="col-md-12">Thêm Bằng File .csv(`Mã`, `Năm Học`, `Kỳ Học`, `Giai Đoạn`)<br> <br></div>
                    <div class="col-md-3"><input type="file" name="file" id="file" accept=".csv"></div>
                    <div class="btn col-md-12"><button type = "submit" name = "import_gd" class = "btn btn-primary">Improt</button></div>
                </div>
                </form>
                <div>
                    <?php
                    echo $out1;
                    echo $out2;
                    echo $out3;
                    ?>
                </div>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Giai Đoạn</h3>
                </div>
                
                <form action="" method="post" class = "row">
                <div class="col-md-12">
                <div class="label">Năm Học</div>
                <div class="value">
                    <select name="" id="namhoc_gd">
                    <?php
                        $output ='<option value="">ALL</option>';
                        include("../includes/conn.php");
                        $sql = "select Nam from giaidoan group by Nam";
                        $kq = mysqli_query($dbcon,$sql);
                        while($row = mysqli_fetch_assoc($kq))
                        {
                            $output .= '<option value="'.$row['Nam'].'">'.$row['Nam'].'</option>';
                        }
                        echo $output;
                    ?>
                    </select>
                </div>
                </div>
                
                <div class="bangdulieu">
                    <table class="table-data" bgcolor="#FFFFFF" id = "tb_show_giaidoan">
                    <?php
                    $output1 = '<tr class="row-first">
                    <td width="150">Mã Giai Đoạn</td>
                    <td width="150">Năm Học</td>
                    <td width="300">Kì Học</td>
                    <td width="150">Giai Đoạn</td>
                    <td></td> 
                    </tr>';
                    $sql = "SELECT * FROM giaidoan";
                    $kq = mysqli_query($dbcon, $sql);  
                    while($row1 = mysqli_fetch_assoc($kq))  
                    {  
                        $output1 .= '<tr>
                        <td>'.$row1['MaGD'].'</td>
                        <td>'.$row1['Nam'].'</td>
                        <td>'.$row1['KyH'].'</td>
                        <td>'.$row1['GD'].'</td>
                        <td><a href="./xuly/delete-giaidoan.php?MaGD='.$row1['MaGD'].'">Xóa</a></td>';
                    }
                    echo "$output1";
                    mysqli_close($dbcon);
                    ?>
                    </table>
                    
                </div>
                </form>
                <form id="frm_update_gd" method="post">
                    <div class="row row-qlmh">
                        <div class="col-md-12">Cập Nhập Giai Đoạn Với Điều Kiện Mã Giai Đoạn</div>
                        <div class="col-md-12">
                            <div class="label">Mã Giai Đoạn</div>
                            <div class="value"><input type="text" name="magd" size="15" maxlength="8" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Năm Học</div>
                            <div class="value"><input type="text" name="namh" size="4" maxlength="4" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Kì Học</div>
                            <div class="value"><input type="text" name="kyh" size="1" maxlength="1" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Giai Đoạn</div>
                            <div class="value"><input type="text" name="gd" size="1" maxlength="1" required></div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <div class="btn-n">
                                <button type="button" id ="bt_up_gd"class="btn btn-primary">Cập Nhập</button>
                            </div>
                        </div>
                    </div>
                    <div id="div_up_giaidoan"></div>
                </form> 
                
        </div>
    </main>
<?php
    include("../includes/footer.php");
?>