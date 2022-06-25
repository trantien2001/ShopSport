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
       <form action="?mod=nhanvien&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="">Họ tên</label>
               <input type="text" class="form-control" id="" placeholder="" name="TenNV">
           </div>
           <div class="form-group">
               <label for="">Số Điện Thoại</label>
               <input type="text" class="form-control" id="" placeholder="" name="SDT">
           </div>
           <div class="form-group">
               <label for="">Email</label>
               <input type="Email" class="form-control" id="" placeholder="" name="Email">
           </div>
           <div class="form-group">
               <label for="">CCCD</label>
               <input type="text" class="form-control" id="" placeholder="" name="CCCD" min="11" max="12">
           </div>
           <div class="form-group">
               <label for="">Giới tính</label>
               <select id="" name="GioiTinh" class="form-control">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
               </select>
           </div>
           <div class="form-group">
               <label for="">Ngày sinh</label>
               <input type="text" class="form-control" id="" placeholder="" name="NgaySinh">
           </div>
           <div class="form-group">
               <label for="">Lương</label>
               <input type="text" class="form-control" id="" placeholder="" name="Luong">
           </div>
           <div class="form-group">
               <label for="">Tên đăng nhập</label>
               <input type="text" class="form-control" id="" placeholder="" name="TaiKhoan">
           </div>
           <div class="form-group">
               <label for="">Mật khẩu</label>
               <input type="password" class="form-control" id="" placeholder="" name="MatKhau">
           </div>
           
           <button type="submit" class="btn btn-primary">Thêm mới</button>
       </form>
   </table>