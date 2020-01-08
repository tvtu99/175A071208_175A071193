<?php
require_once("../includes/ss-qtw.php"); // ss_phan quyen den trang
include("../includes/head.php");
include("./xuly/import-nganh.php"); //import nganh bang file
include("../includes/conn.php");
function khoa($dbcon){
    include("../includes/conn.php");
    $output = '';  
    $sql = "SELECT * FROM `khoa` WHERE 1";  
    $kq = mysqli_query($dbcon, $sql);  
    while($row = mysqli_fetch_array($kq))  
    {  
        $output .= '<option value="'.$row[0].'">'.$row[1].'</option>';  
    }  
    mysqli_close($dbcon);
    return $output; 
    
}
function allnganh($dbcon)
{
    include("../includes/conn.php");
    $output = '<tr class="row-first">
    <td width="150">Mã Ngành Học</td>
    <td width="300">Tên Ngành</td>
    <td></td>
</tr>';  
    $sql = "SELECT * FROM nganh";  
    $kq = mysqli_query($dbcon, $sql);  
    while($row = mysqli_fetch_array($kq))  //hàm mảng theo chỉ số Khác mysqli_fetch_assoc($kq) theo tên
    {  
        $output .= '<tr><td>'.$row[0].'</td>
                    <td>'.$row[1].'</td>
                    <td><a href="./xuly/delete-nganh.php?man='.$row[0].'">Xóa</a></td></tr>';   
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
                    <li><a href="quantri.php" class="active"><span>QL Ngành Học</span></a></li>
                    <li><a href="qlmonhoc.php"  ><span>QL Môn Học</span></a></li>
                    <li><a href="qlgiaidoan.php" ><span>QL Giai Đoạn Học</span></a></li>
                    <li><a href="qllophocphan.php"><span>QL Lớp Học Phần</span></a></li>
                    <li><a href="qlgiangvien.php" ><span>QL Giảng Viên</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Ngành Học</h3>
                </div>
                
                <form class="frm" action = "" method = "POST" id="frm-import-nganh" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">Thêm Bằng File .CSV (Mã ngành,Tên Ngành,MaKhoa)</div>
                    <div class="col-md-2"><input type="file" name="file" id="file" accept=".csv"></div>
                    <div class="col-md-12"><br></div>
                    <div class="btn col-md-1"><input type = "submit" name ="import" id ="bt-import_file_nganhhoc" class = "btn btn-primary" value = "IMPORT"></div>
                    
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
                    <h3 style="text-align: center;">Ngành Học Đại Học Thủy Lợi</h3>
                </div>
                <div class="row">
                <div class="col-md-12">
                        <div class="label">Xem Theo Khoa</div>
                        <div class="value">
                            <select name="show-khoa" id="show-khoa">
                            <option value="">Hiển Thị Tất Cả</option>
                                <?php
                                echo khoa($dbcon);
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <script>  
                    $(document).ready(function(){  
                        $('#show-khoa').change(function(){  
                            var id = $(this).val();  
                            $.ajax({  
                                url:"./xuly/load_show_nganh.php",  
                                method:"POST",  
                                data:{makhoa:id},  
                                success:function(data){  
                                        $('#show_nganh').html(data);  
                                }  
                            });  
                        });  
                    });  
                </script>
                <div class="bangdulieu">
                <table class="table-data" bgcolor="#FFFFFF" id = "show_nganh">
                    
                    <?php
                    echo allnganh($dbcon);
                    ?>
                </table>
                <form class="frm" id = "frm-update-nganh">
                <p>???Cập Nhập Lại Tên Ngành với Mã Ngành là điều kiện
          
                <br></p>
                <div class="row row-qlmh">  
                    <div class="col-md-3">
                        <div class="label">Mã Ngành</div>
                        <div class="value"><input type="text" name="man" size="15" maxlength="8" required></div>
                    </div>
                    <div class="col-md-5">
                        <div class="label">Tên Ngành</div>
                        <div class="value"><input type="text" name="tenn" size="20" maxlength="30" required></div>
                    </div>
                    <div class="col-md-4">
                        <div class="btn-n">
                            <button id = "bt-update-nganh" type="button" class="btn btn-primary">Cập Nhập</button>
                        </div>
                    </div>
                </div>
                <div id="div-update-nganh"></div>
                </form>

                <!-- Sự kiện click button -->
                <script>
                $(document).ready(function () {
                    $('#bt-update-nganh').click(function (e) { 
                        e.preventDefault();
                        var data = $('#frm-update-nganh').serialize();
                        $.ajax({
                            type: "POST",
                            url: "./xuly/update-nganh.php",
                            data: data,
                            success: function (data) {
                                $('#div-update-nganh').html(data);
                            }
                        });
                    });
                });
                </script>
                </div>
            </div> 
            
        </div>
    </main>
    <!-- footer -->
    <?php
    include("../includes/footer.php");
?>