<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=taikhoan&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaTK" value="<?= $data['MaTK']?>">
        <div class="form-group">
            <label for="">Tài khoản</label>
            <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan" value="<?= $data['TaiKhoan']?>">
        </div>
        <div class="form-group">
            <label for="">MatKhau</label>
            <input type="text" class="form-control" id="" placeholder="" name="Ten" value="<?= $data['MatKhau']?>">
        </div>

        <div class="form-group">
            <label for="">Phân quyền</label>
            <select id="" name="MaPQ" class="form-control">
                <option <?= ($data['MaPQ'] == '1')?'selected':''?> value="1"> Admin</option>
                <option <?= ($data['MaPQ'] == '2')?'selected':''?> value="2"> Nhân viên</option>
                <option <?= ($data['MaPQ'] == '3')?'selected':''?> value="3"> Khách hàng</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <select id="" name="TrangThai" class="form-control">
                <option <?= ($data['TrangThai'] == '1')?'selected':''?> value="1"> 1</option>
                <option <?= ($data['TrangThai'] == '0')?'selected':''?> value="0"> 0</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    </tbody>
</table>