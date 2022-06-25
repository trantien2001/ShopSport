<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=khachhang&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaKH" value="<?= $data_kh['MaKH'] ?>">
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenKH" value="<?= $data_kh['TenKH'] ?>">
        </div>
        <div class="form-group">
            <label for="">Số Điện Thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="SDT" value="<?= $data_kh['SDT'] ?>">
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" id="" placeholder="" name="DiaChi" value="<?= $data_kh['DiaChi'] ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="Email" class="form-control" id="" placeholder="" name="Email" value="<?= $data_kh['Email'] ?>">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <select id="" name="GioiTinh" class="form-control">
                <option <?= ($data_kh['GioiTinh'] == "Nam") ? "selected" : "" ?> value="Nam">Nam</option>
                <option <?= ($data_kh['GioiTinh'] == "Nữ") ? "selected" : "" ?> value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan" value="<?= $data_kh['TaiKhoan'] ?>">
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" class="form-control" id="" placeholder="" name="MatKhau" value="<?= $data_kh['MatKhau'] ?>">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <select id="" name="TrangThai" class="form-control">
                <option <?= ($data_kh['TrangThai'] == "1") ? "selected" : "" ?> value="1">Đang làm việc</option>
                <option <?= ($data_kh['TrangThai'] == "0") ? "selected" : "" ?> value="0">Tạm nghỉ</option>
            </select>
        </div>
        <input type="hidden" name="MaTK" value="<?= $data_kh['MaTK'] ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>