<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php if(isset($data) and $data != null) { ?>
    <h2>Mã khuyến mãi: <?= $data['MaKM'] ?></h2>
    <h2>Tên khuyến mãi: <?= $data['TenKM'] ?></h2>
    <h2>Loại khuyến mãi: <?= $data['LoaiKM'] ?></h2>
    <h2>Giá trị khuyến mãi: <?= $data['GiaTri'] ?>%</h2>
    <h2>Thời gian bắt đầu: <?= date_format(date_create($data['NgayBD']),'i:s:H d-m-Y') ?></h2>
    <h2>Thời gian kết thúc: <?= date_format(date_create($data['NgayKT']),'i:s:H d-m-Y') ?></h2>
    <h2>Trạng thái: <?= $data['TrangThai'] ?></h2>
<?php } ?>
</table>