<?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
<a href="?mod=nhanvien&act=add" type="button" class="btn btn-primary">Thêm mới</a>
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
      <th scope="col">id</th>
      <th scope="col">Họ tên</th>
      <th scope="col">SDT</th>
      <th scope="col">Email</th>
      <!-- <th scope="col">CCCD</th> -->
      <th scope="col">Giới tính</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Lương</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['MaNV'] ?></th>
        <td><?= $row['TenNV'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?= $row['Email'] ?></td>
        <!-- <td><?= $row['CCCD'] ?></td> -->
        <td><?= $row['GioiTinh'] ?></td>
        <td><?= date_format(date_create($row['NgaySinh']), "d-m-Y") ?></td>
        <td><?= number_format($row['Luong']) ?>&nbsp;VNĐ</td>
        <td>
          <a href="?mod=nhanvien&act=detail&id=<?= $row['MaNV'] ?>" type="button" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
          <a href="?mod=nhanvien&act=edit&id=<?= $row['MaNV'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=nhanvien&act=delete&id=<?= $row['MaNV'] ?>&matk=<?= $row['MaTK'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>