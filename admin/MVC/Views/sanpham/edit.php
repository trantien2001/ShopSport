<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=sanpham&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="MaSP" value="<?= $data['MaSP'] ?>">


        <div class="form-group">
      <label for="">Tên sản phẩm</label>
      <input type="text" class="form-control" id="" placeholder="" name="TenSP" value="<?=$data['TenSP']?>">
    </div>
    <div class="form-group">
      <label for="">Số lượng</label>
      <input type="text" class="form-control" id="" placeholder="" name="SoLuong" value="<?=$data['SoLuong']?>">
    </div>
    <div class="form-group">
      <label for="">Giá bán</label>
      <input type="text" class="form-control" id="" placeholder="" name="GiaBan" value="<?=$data['GiaBan']?>">
    </div>
    <div class="form-group">
      <label for="cars">Loại sản phẩm: </label>
      <select id="" name="MaLoai" class="form-control">
        <?php foreach ($data_lsp as $row) { ?>
          <option value="<?= $row['MaLoai'] ?>"><?= $row['TenLoai'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="">Mô tả 1 </label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa1" value="<?=$data['MoTa1']?>">
    </div>
    <div class="form-group">
      <label for="">Mô tả 2</label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa2" value="<?=$data['MoTa2']?>">
    </div>
    <div class="form-group">
      <label for="">Mô tả 3</label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa3" value="<?=$data['MoTa3']?>">
    </div>
    <div class="form-group">
      <label for="">Mô tả 4</label>
      <input type="text" class="form-control" id="" placeholder="" name="MoTa4" value="<?=$data['MoTa4']?>">
    </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>