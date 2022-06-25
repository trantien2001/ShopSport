<a href="?mod=hoadon&id=1" type="button" class="btn btn-primary">Đã duyệt</a>
<a href="?mod=hoadon&id=0" type="button" class="btn btn-primary">Chưa duyệt</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">Tên Khách Hàng</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Tổng tiền</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SĐT</th>
      <th scope="col">Trạng thái</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['TenKh'] ?></td>
        <td><?= date_format(date_create($row['NgayTao']), "H:i / d-m-Y")?></td>
        <td><?= number_format($row['TongTien']) ?>VNĐ</td>
        <td><?= $row['DiaChi'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?php if($row['TrangThai']==0){
            echo 'Chưa xét duyệt';
        }else{
            echo 'Đã xét duyệt';
        }
        ?></td>
        <td>
          <a href="?mod=hoadon&act=chitiet&id=<?= $row['MaDH'] ?>" class="btn btn-success" >Xem chi tiết</a>
          <?php if($row['TrangThai'] == 1){?>
              <!-- <a onclickhref="?mod=hoadon&act=delete&id=<?= $row['MaDH'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a> -->
            <?php }
            else{?>
              <a href="?mod=hoadon&act=delete&id=<?= $row['MaDH'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
            <?php

            
          } ?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>