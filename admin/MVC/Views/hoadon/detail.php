<?php if(isset($data) && ($data['0']['TrangThai'] == 0)){ ?>
<a href="?mod=hoadon&act=xetduyet&id=<?= $data['0']['MaDH'] ?>" class="btn btn-success">Duyệt hóa đơn</a>
<a href="?mod=hoadon&act=delete&id=<?= $data['0']['MaDH'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
<?php } ?>
<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Đơn Giá</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row) { ?>
            <tr>
                <td><?= $row['TenSP'] ?></td>
                <td><?= number_format($row['GiaBan']) ?> VNĐ</td>
                <td><?= $row['SoLgDat'] ?></td>
                <td><?= number_format($row['GiaBan'] * $row['SoLgDat']) ?> VNĐ</td>
            </tr>
        <?php } ?>
</table>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>