<?php
require_once("../includes/ss-qtw.php");
include("../includes/head.php");
$dbcon = mysqli_connect("localhost","trinhtu","trinhtu15","db_quanlydiem"); //connect
mysqli_set_charset($dbcon, 'utf8');

function hienthi($dbcon)
{
    $output ="";
    $query = "SELECT makhoa,tenkhoa FROM `khoa` WHERE 1";
    $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
    while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
    {
        $output .= '<tr><td>' .$row[0]. '</td><td>' .$row[1]. '</td><td><a href="./xuly/delete-khoa.php?makhoa='.$row[0].'">Xóa</a></td></tr>';
    }
    //dong kn
    mysqli_close($dbcon);
    return $output;
}
?>
    <!-- main -->
    <main>
      <a href=""></a>
        <div class="row" style="margin-top: 30px;">
            <!-- main-left -->
            <div class="main-l col-md-3">
                <div class="dm">
                  <h5 style="padding: 5px;">Danh Mục Chính</h5>
                  <ul class="menu">
                    <li><a href="qlkhoa.php" class="active"><span>QL KHOA</span></a></li>
                    <li><a href="quantri.php"><span>QL Ngành Học</span></a></li>
                    <li><a href="qlmonhoc.php" ><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php"  ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Khoa</h3>
                </div>
                <form class="frm" id = "frm-addkhoa">
                <p>???Nếu đã tồn tại mã khoa thì sẽ update lại Tên Khoa theo Mã Khoa Truyền Vào
                <br>
                <br></p>
                <div class="row row-qlmh">  
                    <div class="col-md-12">
                        <div class="label">Mã Khoa</div>
                        <div class="value"><input type="text" name="makhoa" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-12">
                        <div class="label">Tên Khoa</div>
                        <div class="value"><input type="text" name="tenkhoa" size="20" maxlength="30" required></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="btn-n">
                            <button id = "bt-addkhoa" type="button" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </div>
                </form>
                <div id ="tb-add-khoa">
                </div>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Khoa</h3>
                </div>
                
                <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr id ="tb-khoa" class="row-first">
                        <td width="150">Mã Khoa</td>
                        <td width="300">Tên Khoa</td>
                        <td></td>
                    </tr>
                    <?php
                    echo hienthi($dbcon);
                    ?>
                    
                </table>
                <button class="btn btn-primary" style ="width : auto;"><a href="qlkhoa.php" style ="color : #fff">Cập Nhập</a></button>
                </div>
            </div> 
        </div>
    </main>
<?php
    include("../includes/footer.php");
?>