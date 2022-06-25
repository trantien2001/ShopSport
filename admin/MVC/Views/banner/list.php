<a href="?mod=banner&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hình Ảnh</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['image'] ?></td>
        <td><?php
          if($row['TrangThai'] == 1) echo 'Hoạt động';
          else echo 'Không hoạt động';
        ?></td>
        <td>
          <a href="?mod=banner&act=detail&id=<?= $row['id'] ?>" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLoginAdmin']) && $_SESSION['isLoginAdmin'] == true) { ?>
          <a href="?mod=banner&act=edit&id=<?= $row['id'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=banner&act=delete&id=<?= $row['id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>