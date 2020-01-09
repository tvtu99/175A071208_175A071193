<?php
require_once("../includes/ss-sv.php");
include("../includes/head.php");
include("../includes/conn.php");

mysqli_close($dbcon);

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
                    <h3 style="text-align: center;">Tra Cứu Điểm</h3>
                </div>
                <form class="frm" action="" method="post">
                    <div class="row row-qlmh">    
                        <div class="col-md-12">
                            <div class="label">Nhập Mã Sinh Viên</div>
                            <div class="value"><input type="text" value = "175A0" name="svma" size="15" maxlength="8" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Năm Học</div>
                            <div class="value">
                                <select name="svnh" id="">
                                <?php
                                    $output ='';
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
                        <div class="col-md-12">
                            <div class="label">Học Kì</div>
                            <div class="value">
                                <select name="svkh" id="">
                                <?php
                                    $output ='';
                                    include("../includes/conn.php");
                                    $sql = "select KyH from giaidoan group by KyH";
                                    $kq = mysqli_query($dbcon,$sql);
                                    while($row = mysqli_fetch_assoc($kq))
                                    {
                                        $output .= '<option value="'.$row['KyH'].'">'.$row['KyH'].'</option>';
                                    }
                                    echo $output;
                                ?>										
                                </select>
                            </div>
                    
                        </div>
                        <div class="col-md-12">
                            <div class="label">Giai Đoạn</div>
                            <div class="value">
                                <select name="svgd" id="">
                                <?php
                                    $output ='';
                                    include("../includes/conn.php");
                                    $sql = "select GD from giaidoan group by GD";
                                    $kq = mysqli_query($dbcon,$sql);
                                    while($row = mysqli_fetch_assoc($kq))
                                    {
                                        $output .= '<option value="'.$row['GD'].'">'.$row['GD'].'</option>';
                                    }
                                    echo $output;
                                ?>									
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
                    <?php
                    if(!$dbcon)
                    {
                        die('loi ket loi :' .mysqli_connect_error()); //bao loi
                    }
                    else
                    {   
                        
                        if(isset($_POST['svnh'])){
                            $masv = $_POST['svma'];
                            $namhoc = $_POST['svnh'];
                            $kihoc = $_POST['svkh'];
                            $giaidoan = $_POST['svgd'];
                            $output = ''; //khai bao chuoi de echo xuat du lieu
                            $query = "SELECT diem.MaSV,giaidoan.MaGD,monh.TenMH,diem.DQT,diem.DT,diem.diemtongket  FROM giaidoan,lophp,monh,diem,dsl WHERE giaidoan.MaGD = lophp.MaGD AND lophp.MaLHP = dsl.MaLHP AND lophp.MaMH = monh.MaMH AND diem.MaMH=monh.MaMH AND giaidoan.Nam = $namhoc AND giaidoan.KyH = $kihoc AND giaidoan.gd = $giaidoan AND diem.MaSV = (SELECT sv.MaSV FROM sv WHERE sv.MaSV = '$masv' AND dsl.MaSV ='$masv')";
                            $kq = mysqli_query($dbcon,$query); //truyen sql vao mysql
                            while($row = mysqli_fetch_array($kq) ) //ham tra ve tat ca ket qua
                            {
                                $output .= '<tr><td>' .$row[0]. '</td><td>' .$row[1]. '</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td><td>'.$row[5].'</td></tr>';
                            }
                            echo '<tr class="row-first">
                            <td width="150">Mã Sinh Viên</td>
                            <td width="100">Giai Đoạn</td>
                            <td width="150">Tên Môn Học</td>
                            <td width="150">Quá Trình</td>													
                            <td width="150">Điểm Thi</td>
                            <td width="70">Điểm</td>
                            </tr>'.$output;
                        }
                    }
                    //dong kn
                    ?>
                   
                </table>
                
                </div>
            </div> 
            
        </div>
    </main>
<?php
    include("../includes/footer.php");
?>