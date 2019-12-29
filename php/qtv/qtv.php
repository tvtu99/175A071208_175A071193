<?php
    require_once("../includes/ss-admin.php");
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
                    <li><a href="qtv.php" class="active"><span>Tạo Tài Khoản</span></a></li>
                  </ul>	   
                </div>
                
            </div>
            <!-- main-right -->
            <div class="main-r col-md-9">
                <div class="daumuc">
                <h3 style="text-align: center;">Quản Lý Tài Khoản</h3>
                </div>
                <form class="frm" action="" method="post">
                    <div class="row row-qlmh">    
                        <div class="col-md-12">
                            <div class="label">Tài Khoản</div>
                            <div class="value"><input type="text" placeholder="max 55 ký tự" name="user" size="20" maxlength="55" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Mật Khẩu</div>
                            <div class="value"><input type="text" placeholder="max 16 ký tự" name="pass" size="15" maxlength="16" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Email</div>
                            <div class="value"><input type="text" placeholder="name@gmail.com" name="email" size="20" maxlength="16" required></div>
                        </div>
                        <div class="col-md-12">
                            <div class="label">Level</div>
                            <div class="value">
                                <select name="level" id="">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>							
                                </select>
                            </div>
                    
                        </div>
                        <div class="col-md-4">
                            <div class="btn-n">
                                <button type="submit" class="btn btn-primary">Tạo Tài Khoản</button>
                            </div>
                        </div>
                        <div class="col-md-12">Thêm Bằng File</div>
                        <div class="col-md-2"><input type="file" name="" id=""></div>
                        <div class="btn col-md-12"><button class = "btn btn-primary">Update</button></div>
                    </div>
                </form>
                <!-- demo -->
                <!-- Biến maLHP từ form truyền -->
                
                <div class="daumuc">
                    <h3 style="text-align: center;">Danh Sách Tài Khoản</h3>
                </div>
                
                
            <div class="bangdulieu">
            <div class="row">
            <div class="col-md-12">
            <div class="label"><button class = "btn btn-primary">Tìm Kiếm</button></div>
            <div class="value"><input type="text" name="email" size="20"></div>
            </div>
            </div>
                <table class="table-data" bgcolor="#FFFFFF">
                    <tr class="row-first">
                        <td width="150">Tài Khoản</td>
                        <td width="150">Level</td>
                        <td width="300">Email</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>trinhtu99</td>
                        <td>3</td>
                        <td>trinhtu165@gmail.com</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>trinhtu99</td>
                        <td>3</td>
                        <td>trinhtu165@gmail.com</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>trinhtu99</td>
                        <td>3</td>
                        <td>trinhtu165@gmail.com</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>trinhtu99</td>
                        <td>3</td>
                        <td>trinhtu165@gmail.com</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    <tr>
                        <td>trinhtu99</td>
                        <td>3</td>
                        <td>trinhtu165@gmail.com</td>
                        <td><a href="">Xóa</a></td>
                        <td><a href="">Sửa</a></td>
                    </tr>
                    
                </table>
                
                </div>
            </div> 
            
        </div>
    </main>
<?php
    include("../includes/footer.php");
?>