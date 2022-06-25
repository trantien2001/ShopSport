<?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
<a href="?mod=taikhoan&act=add" type="button" class="btn btn-primary">Thêm mới</a>
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
      <th scope="col">MaTK</th>
      <th scope="col">TaiKhoan</th>
      <th scope="col">MatKhau</th>
      <th scope="col">MaPQ</th>
      <th scope="col">TrangThai</th>
      <th>#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <th scope="row"><?= $row['MaTK'] ?></th>
        <td><?= $row['TaiKhoan'] ?></td>
        <td><?= $row['MatKhau'] ?></td>
        <td><?= $row['MaPQ'] ?></td>
        <td><?= $row['TrangThai'] ?></td>
        <!-- <td>
          <?php
          if ($row['MaPQ'] == 1) {
            echo 'Quản trị viên';
          } else {
            if ($row['MaPQ'] == 3) {
              echo 'Khách hàng';
            } else {
              echo 'Nhân viên';
            }
          }
          ?>
        </td> -->
        <td>
          <a href="?mod=taikhoan&act=detail&id=<?= $row['MaTK'] ?>" type="button" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
          <a href="?mod=taikhoan&act=edit&id=<?= $row['MaTK'] ?>" type="button" class="btn btn-warning">Sửa</a>
          <a href="?mod=taikhoan&act=delete&id=<?= $row['MaTK'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
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