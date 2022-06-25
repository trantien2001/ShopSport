<div class="header">
    <div class="header_left">
        <img  src="./library/images/logo.png" alt="">
    </div>
    
    <div class="header_center">
        <script type="text/javascript">
            $(document).ready(function(){
                $('.search-box input[type="text"]').on("keyup input", function(){
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(".result");
                    if(inputVal.length){
                        $.get("Models/search.php", {term: inputVal}).done(function(data){
                            resultDropdown.html(data);
                        });
                    } else {
                        resultDropdown.empty();
                    }
                });
                $(document).on("click", ".result p", function(){
                    $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                    $(this).parent(".result").empty();
                });
            });
        </script>

        <div class="search-box">
            <input type="text" autocomplete="off" placeholder="Tìm kiếm theo tên sản phẩm..." />
            <button type="submit"><i class="fas fa-search"></i></button>
            <div class="result"></div>
        </div>
    </div>
    <div class="header_right">
        <ul>
            <li><a href="?act=cart"><i class="fas fa-cart-plus"></i>Giỏ hàng</a></li>
            <li class="account">
                <a href=""><i class="fas fa-user"></i>Tài khoản</a>
                <ul>
                <?php 
                if(isset($_SESSION['login'])){ ?>
                    <li>TK: <?=$_SESSION['login']['TaiKhoan']?></li>
                    <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                    <?php
                    if(isset($_SESSION['isLoginAdmin'])){ ?>
                    <li><a href="admin/?mod=login">Trang quản lý</a></li>
                    <?php }
                    if(isset($_SESSION['isLoginShipper'])){ ?>
                        <li><a href="?act=taikhoan&xuli=account">TT cá nhân</a></li>
                        <li><a href="shipper/?mod=login">DS đơn hàng</a></li>
                        <?php }
                    if(isset($_SESSION['isLoginCustomer'])){ ?>
                        <li><a href="?act=taikhoan&xuli=account&eve=list">TT cá nhân</a></li>
                        <li><a href="?act=taikhoan&xuli=my_order">ĐH của tôi</a></li>
                        <?php }
                } else { ?>
                    <li><a href="?act=login">Đăng nhập</a></li>
                    <li><a href="?act=register">Đăng ký</a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</div>   