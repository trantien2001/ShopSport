   <?php if (isset($_COOKIE['msg'])) { ?>
       <div class="alert alert-success">
           <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
       </div>
   <?php } ?>
   <hr>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <form action="?mod=taikhoan&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Tài khoản</label>
               <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan">
           </div>
           <div class="form-group">
               <label for="">Mật khẩu</label>
               <input type="password" class="form-control" id="" placeholder="" name="MatKhau">
           </div>
           <div class="form-group">
               <label for="">Phân quyền</label>
               <select id="" name="MaPQ" class="form-control">
                    <option value="3">Khách hàng</option>
                    <option value="2">Nhân viên</option>
                    <option value="1">Admin</option>
               </select>
           </div>
           <div class="form-group">
               <label for="">Trạng thái</label>
               <select id="" name="TrangThai" class="form-control">
                    <option value="1">Hoạt động</option>
                    <option value="0">Không hoạt động</option>
               </select>
           </div>
           
           <button type="submit" class="btn btn-primary">Create</button>
       </form>
   </table>