<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Đại Học Thủy Lợi</title>
    <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type ="text/css" href="./css/style.css">
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
                <a class="nav-link" href="#">Home</a>
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
                      <li><a href="index.php" class="active"><span>Home</span></a></li>
                      <li><a href="tracuudiem.php"><span>Tra Cứu Điểm</span></a></li>
                      <li><a href=""><span>Tin Tức</span></a></li>
                      <li><a href=""><span>Chương Trình Đào Tạo</span></a></li>
                    </ul>	   
                  </div>
                  <!-- box check -->
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
                <div class="daumuc">
                  <a href="">
                    <h3>Tin Tức</h3>
                  </a>
                </div>
                <ul>
                    <li><a href="">Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 4 năm 2019 (27/11/2019)</a>
                    </li>
                    <li><a href="">Kết quả thi chuẩn Tiếng Anh đầu đợt 3 năm 2019 (11/10/2019)</a></li>
                    <li><a href="">Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 3 năm 2019 tại Hà Nội (30/08/2019)
                    </a></li>
                    <li><a href="">Danh sách các môn điều chỉnh lịch thi GD2, HK2, 2018_2019 (13/06/2019)
                    </a></li>
                    <li><a href="">Triển khai kế hoạch học kỳ hè năm học 2018-2019 (12/06/2019)
                    </a></li>
                    <li><a href="">Thông báo thi chuẩn Tiếng Anh đâu ra cho trình độ đại học hệ chính quy đợt 2 năm 2019 tại Hà Nội (02/04/2019)
                    </a></li>
                    <li><a href="">Thông báo kết quả thi chuẩn Tiếng Anh đầu ra đợt 1 năm 2019 (22/02/2019)
                    </a></li>
                </ul>
                  
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.4.1.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>