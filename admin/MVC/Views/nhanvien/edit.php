<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=nhanvien&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaNV" value="<?= $data_nv['MaNV'] ?>">
        <div class="form-group">
            <label for="">Họ tên</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenNV" value="<?= $data_nv['TenNV'] ?>">
        </div>
        <div class="form-group">
            <label for="">Số Điện Thoại</label>
            <input type="text" class="form-control" id="" placeholder="" name="SDT" value="<?= $data_nv['SDT'] ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="Email" class="form-control" id="" placeholder="" name="Email" value="<?= $data_nv['Email'] ?>">
        </div>
        <div class="form-group">
            <label for="">CCCD</label>
            <input type="text" class="form-control" id="" placeholder="" name="CCCD" min="11" max="12" value="<?= $data_nv['CCCD'] ?>">
        </div>
        <div class="form-group">
            <label for="">Giới tính</label>
            <select id="" name="GioiTinh" class="form-control">
                <option <?= ($data_nv['GioiTinh'] == "Nam") ? "selected" : "" ?> value="Nam">Nam</option>
                <option <?= ($data_nv['GioiTinh'] == "Nữ") ? "selected" : "" ?> value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ngày sinh</label>
            <input type="text" class="form-control" id="" placeholder="" name="NgaySinh" value="<?= $data_nv['NgaySinh'] ?>">
        </div>
        <div class="form-group">
            <label for="">Lương</label>
            <input type="text" class="form-control" id="" placeholder="" name="Luong" value="<?= $data_nv['Luong'] ?>">
        </div>
        <div class="form-group">
            <label for="">Tên đăng nhập</label>
            <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan" value="<?= $data_nv['TaiKhoan'] ?>">
        </div>
        <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="text" class="form-control" id="" placeholder="" name="MatKhau" value="<?= $data_nv['MatKhau'] ?>">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <select id="" name="TrangThai" class="form-control">
                <option <?= ($data_nv['TrangThai'] == "1") ? "selected" : "" ?> value="1">Đang làm việc</option>
                <option <?= ($data_nv['TrangThai'] == "0") ? "selected" : "" ?> value="0">Tạm nghỉ</option>
            </select>
        </div>
        <input type="hidden" name="MaTK" value="<?= $data_nv['MaTK'] ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>