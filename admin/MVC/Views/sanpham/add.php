<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-warning">
      <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
  <?php } ?>
  <form action="?mod=sanpham&act=store" method="POST" role="form" enctype="multipart/form-data">  
    <div class="form-group">
      <label for="">Tên sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="TenSP">
    </div>
    <div class="form-group">
      <label for="">Số lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="SoLuong">
    </div>
    <div class="form-group">
      <label for="">Giá bán</label>
      <input type="text" class="form-control" id="" placeholder="" name="GiaBan">
    </div>
    <div class="form-group">
      <label for="cars">Loại sản phẩm: </label>
      <select id="" name="MaLoai" class="form-control">
        <option value="">--Chọn--</option>
        <?php foreach ($data_lsp as $row) { ?>
          <option value="<?= $row['MaLoai'] ?>"><?= $row['TenLoai'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Mô tả 1 </label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa1">
    </div>
    <div class="form-group">
      <label for="">Mô tả 2</label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa2">
    </div>
    <div class="form-group">
      <label for="">Mô tả 3</label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa3">
    </div>
    <div class="form-group">
      <label for="">Mô tả 4</label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa4">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 1 </label>
      <input type="file" class="form-control" id="" placeholder="" name="Hinh1">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 2</label>
      <input type="file" class="form-control" id="" placeholder="" name="Hinh2">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3</label>
      <input type="file" class="form-control" id="" placeholder="" name="Hinh3">
    </div>
    <div class="form-group">
      <label for="">Hình ảnh 3</label>
      <input type="file" class="form-control" id="" placeholder="" name="Hinh4">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
  <script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
  </script>
</table>