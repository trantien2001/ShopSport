<div id="list_dm_lsp">
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
    <div class="list_sp">
        <div class="path">
            <ul>
                <li><a href="?act=home">Trang chủ</a></li>
                <li>
                    <span>&nbsp;>&nbsp;</span>
                    <?php
                        if(isset($ten_dm)) echo $ten_dm['TenDM'];
                        if(isset($ten_lsp)) echo $ten_lsp['TenLoai'];
                    ?>
                </li>
            </ul>
        </div>
        <div id="product-list">
            <?php
                if(isset($data_sp_dm)){
                    foreach($data_sp_dm as $dm){
                        ?>
                            <div class="col-3">
                                <div class="imgsanpham">
                                    <a href="?act=detail&id=<?= $dm['MaSP'] ?>">
                                        <img src="./library/images/<?= $dm['Hinh1'] ?>" alt="">
                                    </a>
                                </div>
                                <h2>
                                    <a href="?act=detail&id=<?php $dm['MaSP']; ?>"><?= $dm['TenSP']; ?>(<?=$dm['SoLuong']?>)</a>
                                </h2>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p class=""><?php echo number_format($dm['GiaBan'],0,",",".")." đ"; ?></p>
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
                            <?php
                    }
                } else
                if(isset($data_sp_lsp)){
                    foreach($data_sp_lsp as $lsp){
                        ?>
                            <div class="col-3">
                                <div class="imgsanpham">
                                    <a href="?act=detail&id=<?= $lsp['MaSP'] ?>">
                                        <img src="./library/images/<?= $lsp['Hinh1'] ?>" alt="">
                                    </a>
                                </div>
                                <h2>
                                    <a href="?act=detail&id=<?php $lsp['MaSP']; ?>"><?= $lsp['TenSP']; ?>(<?=$lsp['SoLuong']?>)</a>
                                </h2>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p class=""><?php echo number_format($lsp['GiaBan'],0,",",".")." đ"; ?></p>
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
                        <?php
                    }
                }
                else { echo '<p> KHÔNG CÓ DỮ LIỆU </p>'; }
            ?>
        </div>
    </div>
</div>