<?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
<a href="?mod=khachhang&act=add" type="button" class="btn btn-primary">Thêm mới</a>
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
      <th scope="col">Địa chỉ</th>
      <th scope="col">Email</th>
      <th scope="col">Giới tính</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['MaKH'] ?></th>
        <td><?= $row['TenKH'] ?></td>
        <td><?= $row['SDT'] ?></td>
        <td><?= $row['DiaChi'] ?></td>
        <td><?= $row['Email'] ?></td>
        <td><?= $row['GioiTinh'] ?></td>
        <td>
          <a href="?mod=khachhang&act=detail&id=<?= $row['MaKH'] ?>" type="button" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
          <a href="?mod=khachhang&act=edit&id=<?= $row['MaKH'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=khachhang&act=delete&id=<?= $row['MaKH'] ?>&matk=<?= $row['MaTK'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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