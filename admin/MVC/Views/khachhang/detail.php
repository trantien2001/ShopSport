<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Mã nhân viên: <?= $data['MaKH'] ?></h2>
    <h2>Họ tên : <?= $data['TenKH'] ?></h2>
    <h2>Số điện thoại: <?= $data['SDT'] ?></h2>
    <h2>Địa chỉ: <?= $data['DiaChi'] ?></h2>
    <h2>Email: <?= $data['Email'] ?></h2>
    <h2>Giới tính: <?= $data['GioiTinh'] ?></h2>
    <h2>Mã tài khoản: <?= $data['MaTK'] ?></h2>
    <h2>Tên đăng nhập: <?= $data['TaiKhoan'] ?></h2>
    <h2>Mật khẩu: <?= $data['MatKhau'] ?></h2>
    <h2>Trạng thái: <?php if($data['TrangThai'] == 1) echo 'Đang làm việc'; else echo 'Tạm nghỉ'; ?></h2>
</table>