<div id="evaluate">
    <h1>Có <?=$data_count_dg['sum']?> đánh giá <?= $data['TenSP'];?></h1><hr>
    <?php
        if(isset($data_dg)){
            foreach($data_dg as $value){
                ?>
                <div class="evaluate_list">
                    <div class="dg_left">
                        <p><strong><?=$value['TenKH']?></strong></p><br>
                        <label class="star star-5"></label>
                        <label class="star star-4"></label>
                        <label class="star star-3"></label>
                        <label class="star star-2"></label>
                        <label class="star star-1"></label><br><br>
                        <p><?=$value['Sao']?></p>
                    </div>
                    <div class="dg_right">
                        <p><?=$value['NoiDung']?></p>
                    </div>
                </div>
                <hr>
                <?php
            }
        }
    ?>
</div>
<div class="stars">
    <form action="?act=DanhGia1">
        <span>Đánh giá của bạn:</span>
        <input class="star star-5" id="star-5" type="radio" name="star"/>
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star"/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star"/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star"/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star"/>
        <label class="star star-1" for="star-1"></label><br><br>
        <textarea name="" id="" cols="90" rows="15" placeholder="Nội dung đánh giá..."></textarea>
        <input style="float:right" type="submit" value="Đánh giá"></input>
    </form>
</div>