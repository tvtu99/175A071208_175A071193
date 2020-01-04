


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Tra Cứu Điểm</title>
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="./css/style.css">
    <!-- <link rel="stylesheet" href="./login_logout_sub/style-php.css"> -->
    <link rel="stylesheet" href="php/quantriweb/style-ql.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/tracuudiem.js"></script>
</head>
<body>
    <div class="container-fluid">
        <!-- nav -->
      <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-header">
          <a class="navbar-brand" href="#"><img src="./img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Giới Thiệu</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href="#">Phản Hồi</a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="#">Liên Hệ</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./login_logout_sub/dangnhap.php">Đăng Nhập</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
       <!-- main -->
      <main>
          <div class="row" style="margin-top: 30px;">
              <div class="main-l col-md-3">
                  <div class="dm">
                    <h5 style="padding: 5px;">Danh Mục Chính</h5>
                    <ul class="menu">
                      <li><a href="index.php"><span>Home</span></a></li>
                      <li><a href="tracuudiem.php"  class="active"><span>Tra Cứu Điểm</span></a></li>
                      <li><a href=""><span>Tin Tức</span></a></li>
                      <li><a href=""><span>Chương Trình Đào Tạo</span></a></li>
                    </ul>	   
                  </div>
                  <!--  -->
                  <div class="box-check">
                    <h5>Điều tra việc làm</h5>
                    <div style="PADDING-LEFT:10px;text-align:left;">			
                        Bạn đã có việc làm chưa?
                      <table>
                        <tr>
                          <td><input type="radio" name="check" value="Đã Có"><label for="ctl02_rbl1_0">Đã Có</label></td>
                        </tr>
                        <tr>
                          <td><input type="radio" name="check" value="Chưa Có"><label for="ctl02_rbl1_1">Chưa Có</label></td>
                        </tr>
                      </table>                      
                        <input type="submit" name="Save" value="Đồng ý" class="btn-primary">
                        <input type="submit" name="Cancel" value="Hủy" class="btn-primary">
                        <input type="submit" name="Result" value="Thống kê" class="btn-primary">
                      </div>
                  </div>
                  
              </div>
              <div class="main-r col-md-9">
                <div class="frm-tk">
                    <div class="daumuc">
                        <a href="">
                            <h3 style="text-align: center;">Tra Cứu Điểm</h3>
                        </a>
                    </div>
                    <form class="frm" id = "frm-tcd">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="label">Chứng Minh Thư</div>
                            <div class="value"><input type="text" name="cmt"  size="20" maxlenght = "12" value = "1099017269" required></div>
                          </div>
                          <div class="col-md-12">
                            <div class="label">Mã Sinh Viên</div>
                            <div class="value"><input type="text" name="masv" size="20" maxlenght = "8" value="175A0" required></div>
                          </div>					
                          <div class="col-md-12">
                            <div class="label">Năm Học</div>
                            <div class="value"><input type="text" name="namhoc" size="20" value ="2019" required></div>
                          </div>
                          <div class="col-md-12">
                            <div class="label">Kì Học</div>
                            <div class="value">
                                <select name="kihoc" id="kihoc">
                                  <option value="1">1</option>
                                  <option value="2">2</option>						
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="label">Giai Đoạn</div>
                            <div class="value">
                                <select name="giaidoan" id="giaidoan">
                                    <option value="1">1</option>
                                    <option value="2">2</option>	
                                    <option value="3">3</option>
                                    <option value="4">4</option>					
                                </select>
                            </div>
                            </div>
                        </div>					
                        <div class="btn-n">
                            <button id = "tracuudiem" type="button" class="btn btn-primary">Tra Cứu</button>
                        </div>
                    </form>
                    
                </div>
                <div class="bangdulieu">
                  <table class="table-data" id ="table-tcd" bgcolor="#FFFFFF">
                    <tr class="row-first">
                      <td width="150">Mã Sinh Viên</td>
                      <td width="100">Giai Đoạn</td>
                      <td width="150">Tên Môn Học</td>
                      <td width="150">Quá Trình</td>													
                      <td width="150">Điểm Thi</td>
                      <td width="70">Điểm</td>
                    </tr>
                  </table>
                  
                </div>
          </div>
      </main>
      <!-- footer -->
      
      <footer class="page-footer row">
        
          <div class="col-md-3 bd">
              <p style="color: #fff;">Bản Đồ</p>
              <a href=""><img src="./img/TLU-map.png" alt="map-thuy-loi" style="width: 90%;"></a>
          </div>
          <div class="font-size-a nav-footer col-md-3">
              <ul>
                  <h4 style="text-align: center;">ĐẠI HỌC THỦY LỢI</h4>
                  <li><a href="">TUYỂN SINH</a></li>
                  <li><a href="">ĐÀO TẠO</a></li>
                  <li><a href="">KHOA HỌC CÔNG NGHỆ</a></li>
                  <li><a href="">SINH VIÊN</a></li>
                  <li><a href="">ĐỐI Ngoại</a></li>

              </ul>
          </div>
          <div class="font-size-a nav-footer col-md-3">
              <ul>
                  <h4 style="text-align: center;">TIN TỨC-THÔNG BÁO</h4>
                  <li><a href="">TIN TỨC</a></li>
                  <li><a href="">THÔNG BÁO</a></li>
                  <li><a href="">TIN VIDEO</a></li>

              </ul>
          </div>
          <div class="col-md-3 dc">
            <p>TRƯỜNG ĐẠI HỌC THỦY LỢI <br>
            Địa chỉ : 175 TÂY SƠN, ĐỐNG ĐA, HÀ NỘI.<br>
            Điện thoại: (024) 3852 2201 - Fax: (024) 3563 3351<br>
            Email: phonghcth@tlu.edu.vn<br>
            </p>
          </div>
      </footer>
      <div class="row copyandmxh">
        <div class="col-md-9 copy">
          <p>@2017. Bản quyền thuộc về trường Đại học Thủy Lợi</p>
        </div>
      <div class="mxh col-md-3">
        <ul>
            <li><a href="#" class="fb">FB</a></li>
            <li><a href="#" class="tw">TW</a></li>
            <li><a href="#" class="gp">GB</a></li>
        </ul>
      </div>
      </div>
    </div>

    
</body>
</html>