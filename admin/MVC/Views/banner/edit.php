<?php if (isset($_COOKIE['msg'])) { ?>
    <div class="alert alert-success">
        <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
    </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <form action="?mod=banner&act=update" method="POST" role="form" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <img src="../library/images/Banners/<?=$data['image']?>" height="200px" width="200px">
            <input type="file" class="form-control" id="" placeholder="" name="image" value="<?=$data['image']?>">
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <select id="" name="TrangThai" class="form-control">
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</table>