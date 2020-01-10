echo '
    <p class="form-add-acc">
        <form method="POST" id="formAddAcc" onsubmit="return false;">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control title" id="un_add_acc">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control title" id="pw_add_acc">
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" class="form-control title" id="repw_add_acc">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Thêm</button>
            </div>
            <div class="alert alert-danger hidden"></div>
        </form>
    </p>
';