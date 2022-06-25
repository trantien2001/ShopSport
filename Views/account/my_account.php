<div id="infor">
    <div class="representative_cover">
        <div class="cover_image">
            <img src="./library/images/cover_image.png" alt="">
        </div>
        <div class="avatar">
            <img src="./library/images/Avatar/<?php if(isset($data_kh)){
            echo $data_kh['avatar'];
        } ?>" alt="">
        </div>
    </div>
    <div class="description">
        <h1><?php if(isset($data_kh)){
            echo $data_kh['TenKH'];
        } ?></h1>
        <label for="">
            <a href="?act=taikhoan&xuli=account&eve=edit">Chỉnh sửa</a>
        </label>
    </div>
    <hr style="width:920px">
    <div class="personal_information">
        <h1>Số diện thoại: <?php if(isset($data_kh)){
            echo $data_kh['SDT'];
        } ?></h1>
        <h1>Địa chỉ: <?php if(isset($data_kh)){
            echo $data_kh['DiaChi'];
        } ?></h1>
        <h1>Email: <?php if(isset($data_kh)){
            echo $data_kh['Email'];
        } ?></h1>
        <h1>Giới tính: <?php if(isset($data_kh)){
            echo $data_kh['GioiTinh'];
        } ?></h1>
    </div>
</div>