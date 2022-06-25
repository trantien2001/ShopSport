<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Mã tài khoản: <?=$data['MaTK']?></h2>
    <h2>Tên tài khoản: <?=$data['TaiKhoan'] ?></h2>
    <h2>Mật khẩu: <?=$data['MatKhau']?></h2>
    <h2>Quyền: <?php
    if($data['MaPQ'] == 1)
        echo 'Admin';
    if($data['MaPQ'] == 2)
        echo 'Nhân viên';
    if($data['MaPQ'] == 3)
        echo 'Khách hàng';
    ?></h2>
    <h2>Trạng thái: <?=$data['TrangThai'] ?></h2>
</table>