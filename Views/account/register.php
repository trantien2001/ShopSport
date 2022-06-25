<div id="account">
    <?php require_once('left_advertisement.php') ?>
    <div class="account">
        <h1>ĐĂNG KÝ</h1>
        <?php if (isset($_COOKIE['msg'])) { ?>
            <div class="notification">
                <strong>Thông báo:</strong> <?= $_COOKIE['msg'] ?>
            </div>
        <?php } ?>
        <form action="?act=taikhoan&xuli=dangky" method="POST" id="form_register">
            <div class="input-group">
                <input type="text" name="TenKH" placeholder="Họ Tên" required>
            </div>
            <div class="input-group">
                <input type="text" name="SDT" placeholder="Số điện thoại" minlength="10" pattern="[0-9]+" required>
            </div>
            <div class="input-group">
                <input type="email" name="Email" placeholder="Email" required>
            </div>
            <div class="input-group">
               <select style="width:100%; padding:5px 0; margin-top: 18px" name="GioiTinh" class="form-control">
                    <option value="">--> Chọn giới tính <--</option>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
               </select>
           </div>
            <div class="input-group">
                <input type="text" name="DiaChi" placeholder="Địa chỉ" required>
            </div>
            <div class="input-group">
                <input type="text" name="TaiKhoan" placeholder="Tên tài khoản" required>
            </div>
            <div class="input-group">
                <input type="password" name="MatKhau" placeholder="Mật khẩu" minlength="6" required>
            </div>
            <div class="input-group">
                <input type="password" name="Check_MatKhau" placeholder="Nhập lại mật khẩu" minlength="6" required>
            </div>
            <div class="foget">
                <a href="?act=login">Quay lại đăng nhập?</a>
            </div>
            <div class="btn-submit">
                <input type="submit" form="form_register" value="Đăng ký">
            </div>
        </form>
    </div>
    <?php require_once('right_advertisement.php'); ?>
</div>