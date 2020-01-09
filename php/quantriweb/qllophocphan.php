<?php
require_once("../includes/ss-qtw.php");
include("../includes/head.php");
include("./xuly/import_lophp.php"); //import Lớpbang file
include("../includes/conn.php");

function magiaidoan($dbcon){
    include("../includes/conn.php");
    $output = '<option value="">ALL</option>';  
    $sql = "SELECT * FROM `giaidoan` WHERE 1";  
    $kq = mysqli_query($dbcon, $sql);  
    while($row = mysqli_fetch_assoc($kq))  
    {  
        $output .= '<option value="'.$row['MaGD'].'">'.$row['MaGD'].'</option>';  
    }  
    mysqli_close($dbcon);
    return $output;    
}
function show_lhp($dbcon){
    $output = '<tr class="row-first">
    <td width="150">Mã Lớp Học Phần</td>
    <td width="200">Tên Lớp</td>
    <td width="120">Mã Môn Học</td>
    <td width="120">Mã Giảng Viên</td>
    <td width="120">Mã Giai Đoạn</td>
    <td></td>
    </tr>';
    $sql = "SELECT * FROM `lophp`";  
    
    $kq = mysqli_query($dbcon, $sql);  
    while($row =mysqli_fetch_array($kq))  
    {  
        $output .= '<tr>
        <td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td><a href="./xuly/delete-lophp.php?MaLHP='.$row[0].'">Xóa</a></td>
    </tr>';
    }  
    echo $output;
}
// function manganh_show($dbcon){
// $output = '<option value="">ALL</option>';
// $sql = "SELECT * FROM nganh";
// $kq = mysqli_query($dbcon, $sql);
// while($row = mysqli_fetch_assoc($kq))
// {  
//     $output .= '<option value="'.$row['MaN'].'">'.$row['TenN'].'</option>';
// }  
// echo $output;  

// }
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
                    <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php" class="active"><span>QL Lớp Học Phần</span></a></li>
                    <!-- <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li> -->
                  </ul>	   
                </div>
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Lớp Học Phần</h3>
                </div>
                <form class="frm" action = "" method = "POST" id="" enctype="multipart/form-data">
                <div class="row row-qlmh">
                    
                    <!-- <div class="col-md-12">
                        <div class="label">Mã Lớp HP</div>
                        <div class="value"><input type="text" name="malhp" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Tên Lớp HP</div>
                        <div class="value"><input type="text" name="namh" size="20" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Môn Học</div>
                        <div class="value"><input type="text" name="mamh" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Giai Đoạn</div>
                        <div class="value"><input type="text" name="mamh" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Mã Giảng Viên</div>
                        <div class="value"><input type="text" name="magv" size="4" maxlength="8" required></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <div class="btn-n">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div> -->
                    <div class="col-md-12">Thêm Bằng File</div>
                    <div class="col-md-2"><input type="file" name="file" id="file" accept=".csv"></div>
                    <div class="btn col-md-12"><button name ="import" class = "btn btn-primary">Import</button></div>
                </div>
                <div> <!-- Thông báo việc import -->
                    <?php
                    echo $out1;
                    echo $out2;
                    echo $out3;
                    ?>
                </div>
                </form>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                
                    <div class="daumuc">
                        <h3 style="text-align: center;">Danh Sách Lớp Học Phần</h3>
                    </div>

                    <div class="bangdulieu">
                    <!--  -->
                        <form id="frm_show_lophp" method="post">
                        <div class="row">
                        <div class="col-md-3">
                        <div class="label">Giai Đoạn</div>
                        <div class="value">
                            <select name="magd" id="f_magd">
                                <?php
                                echo magiaidoan($dbcon); // echo biến trả về từ hàm
                                ?>
                            </select>
                        </div>
                        </div>
                        <!-- <div class="col-md-6">
                        <div class="label">Ngành Học</div>
                        <div class="value">
                            <select name="man" id="">
                                <?php
                                //echo manganh_show($dbcon);
                                ?>
                            </select>
                        </div>
                        </div> -->
                        <div class="btn col-md-2"><button type="button" id ="bt_show_lophp"class="btn-primary">Xem</button></div>
                        </div>
                        </form>
                        <!--  -->
                        <table class="table-data" bgcolor="#FFFFFF" id ="tb_show_lophp">
                            <?php
                            echo show_lhp($dbcon);
                            ?>
                        </table>
                        <form id="frm_update_lhp" method="post">
                    <div class="row row-qlmh">
                        <div class="col-md-12">Cập Nhập Giai Đoạn Với Điều Kiện Mã Lớp Học Phần</div>
                        <div class="col-md-12">
                            <div class="label">Mã LHP</div>
                            <div class="value"><input type="text" name="malhp" size="8" maxlength="8" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Tên Lớp</div>
                            <div class="value"><input type="text" name="tenlhp" size="30" maxlength="30" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Mã Môn Học</div>
                            <div class="value"><input type="text" name="mamh" size="8" maxlength="8" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Mã Giảng Viên</div>
                            <div class="value"><input type="text" name="magv" size="8" maxlength="8" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Mã Giai Đoạn</div>
                            <div class="value"><input type="text" name="magd" size="8" maxlength="8" required></div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <div class="btn-n">
                                <button type="button" id ="bt_up_lhp"class="btn btn-primary">Cập Nhập</button>
                            </div>
                        </div>
                    </div>
                    <div id="div_up_lhp"></div>
                </form> 
                    </div>
            </div> 
            
        </div>
    </main>
    <!-- footer -->
    <?php
    include("../includes/footer.php");
?>