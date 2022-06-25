<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="alert alert-warning">
            <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <form action="?mod=khuyenmai&act=store" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Tên khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="TenKM">
        </div>
        <div class="form-group">
            <label for="">Loại khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="LoaiKM">
        </div>
        <div class="form-group">
            <label for="">Giá trị Khuyến mãi</label>
            <input type="text" class="form-control" id="" placeholder="" name="GiaTri">
        </div>
        <div class="form-group">
            <label for="">Ngày bắt đầu</label>
            <input type="text" class="form-control" id="" placeholder="" name="NgayBD">
        </div>
        <div class="form-group">
            <label for="">Ngày kết thúc</label>
            <input type="text" class="form-control" id="" placeholder="" name="NgayKT">
        </div>
        <div class="form-group">
               <label for="">Trạng thái</label>
               <select id="" name="TrangThai" class="form-control">
                    <option value="1">Hiệu lực</option>
                    <option value="0">Không hiệu lực</option>
               </select>
           </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
    </form>
</table>