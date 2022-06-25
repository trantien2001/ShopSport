<div id="middle">
    <div id="sidebar">
        <ul>
        <?php 
            if($data_danhmuc != NULL) {
                foreach ($data_danhmuc as  $value1) {
        ?>
            <li>
                <a href="?act=shop&id_dm=<?= $value1['MaDM']; ?>">
                    <i class="<?= $value1['Icon']; ?>"></i>    
                    <?= $value1['TenDM']; ?>
                </a>
                <ul>
                <?php
                    foreach ($data_loaisanpham as  $value2) {
                        if($value1['MaDM'] == $value2['MaDM']){
                ?>  
                    <li><a href="?act=shop&id_lsp=<?= $value2['MaLoai']; ?>">
                        <?php  echo $value2['TenLoai']; ?>
                    </a></li>
                    <?php }}?>
                </ul>
            </li>
        <?php } } else { echo '<p> KHÔNG CÓ DỮ LIỆU </p>'; }?>
        </ul>
    </div>


    <div id="banner">    
        <div class="banner-img">
            
            <?php
                if($data_banner != null){
                    foreach($data_sum_banner as $data){
                        $sum = $data['sum'];
                    }
                    $i = 1;
                    foreach($data_banner as $data){ ?>
                        <div class="mySlides fade">
                            <div class="numbertext"><?php echo $i . '/' . $sum; $i++;?></div>
                            <img src="./library/images/Banners/<?= $data['image'] ?>" style="width:100%">
                        </div>
            <?php   }
                }
            ?>            
            <div class="node">
                <?php
                    if($data_sum_banner != null){
                        foreach($data_sum_banner as $data){
                            for($i = 1; $i <= $data['sum']; $i++){ ?>
                                <span class="dot"></span> 
                <?php
                            }
                        }
                    }
                ?>
            </div>
        </div>
        <br>

        <script>
            var slideIndex = 0;
            showSlides();
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </div>            
</div>
<h1>NHÀ CUNG CẤP UY TÍN</h1>
<div id="supplier">
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/icon-dong-luc.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/icon-mitre.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/icon-mizuno.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/icon-pan.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/icon-spalding.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/partners-jgbl.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/icon-akka-slogan-1.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/bulbal.png" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/logo-mira-icon-1.jpg" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/logo-kamito-icon-1.jpg" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/logo-molten-icon-1.jpg" alt=""></a>
    </div>
    <div class="col-4">
        <a href=""><img src="https://cdn.yousport.vn/Media/Partners/logo-just-playicon-1.jpg" alt=""></a>
    </div>
</div>
<h1>SẢN PHẨM MỚI NHẤT</h1>
<div id="product-list">
    <?php 
        if(isset($data_sp_moinhat)) {
            foreach ($data_sp_moinhat as  $value) {
    ?>
        <div class="col-5">
            <div class="imgsanpham">
                <a href="?act=detail&id=<?= $value['MaSP'] ?>">
                    <img src="./library/images/<?= $value['Hinh1'] ?>" alt="">
                </a>
            </div>
            <h2>
                <a href="?act=detail&id=<?php $value['MaSP']; ?>"><?= $value['TenSP']; ?>(<?=$value['SoLuong']?>)</a>
            </h2>
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <p class=""><?php echo number_format($value['GiaBan'],0,",",".")." đ"; ?></p>
            <!-- <div class="buynow_detail">
                <div class="buy_now">
                    <a href="?act=cart&xuli=add&id=<?=$data['MaSP']?>">Mua &nbsp;&nbsp;</a>
                    <i class="fas fa-cart-plus"></i>
                </div>
                <div class="detail">
                    <i class="fas fa-check"></i>
                    <a href="?act=checkout&id=<?=$data['MaSP']?>">Chi tiết&nbsp;&nbsp;</a>
                </div>
            </div> -->
        </div>
        <?php }
        } else { echo '<p> KHÔNG CÓ DỮ LIỆU </p>'; }?>
</div>
<h1>SẢN PHẨM BÁN CHẠY</h1>
<div id="product-list">
    <?php 
        if(isset($data_sp_banchay)) {
            foreach ($data_sp_banchay as  $value) {
    ?>
        <div class="col-5">
            <div class="imgsanpham">
                <a href="?act=detail&id=<?= $value['MaSP'] ?>">
                    <img src="./library/images/<?= $value['Hinh1'] ?>" alt="">
                </a>
            </div>
            <h2>
                <a href="?act=detail&id=<?php $value['MaSP']; ?>"><?= $value['TenSP']; ?>(<?=$value['SoLuong']?>)</a>
            </h2>
            <div class="star">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <p class=""><?php echo number_format($value['GiaBan'],0,",",".")." đ"; ?></p>
        </div>
        <?php }
        } else { echo '<p> KHÔNG CÓ DỮ LIỆU </p>'; }?>
</div>

<!-- <div id="page">
    <ul>
        <?php
        if($data_sum_sp != null){
            foreach($data_sum_sp as $sum){
                $pagenumber = ceil($sum['sum'] / 30);
                for($i = 1; $i <= $pagenumber; $i++){
                    echo '<li><a href="?act=home&trang='.$i.'">'.$i.'</a></li>';
                }
            }
        }
        ?>
    </ul>
</div> -->