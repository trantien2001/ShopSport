<div id="account">
    <?php require_once('left_advertisement.php') ?>
    <div class="account">
        <h1>ĐĂNG NHẬP</h1>
        <?php if (isset($_COOKIE['msg1'])) { ?>
            <div class="notification">
                <strong>Thông báo:</strong> <?= $_COOKIE['msg1'] ?>
            </div>
        <?php } ?>
        <form action="?act=taikhoan&xuli=dangnhap" method="POST" id="form_login">
            <div class="input-group">
                <input type="text" name="TaiKhoan" placeholder="Tên tài khoản">
            </div>
            <div class="input-group">
                <input type="password" name="MatKhau" placeholder="Mật khẩu">
            </div>
            <div class="foget">
                <a href="">Quên mật khẩu?</a>
            </div>
            <div class="btn-submit">
                <input type="submit" name="submit" form="form_login" value="Đăng nhập">
            </div>
        </form>
        <h2>Đăng nhập bằng</h2>
        <div class="icon">
            <p><a href="?act=" class="fab fa-facebook"></a></p>
            <p><a href="?act=" class="fab fa-google"></a></p>
            <p><a href="?act=" class="fab fa-twitter"></a></p>
        </div>
    </div>
    <?php require_once('right_advertisement.php'); ?>
</div>