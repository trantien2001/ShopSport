<div id="promotion">
    <div class="path">
        <ul>
            <li><a href="?act=home">Trang chủ</a></li>
            <li><span>&nbsp;>&nbsp;</span>Khuyến mãi</li>
        </ul>
    </div>
    <div class="promotion">
        <div class="w20"></div>
        <div class="w80">
            <h1>CHƯƠNG TRÌNH KHUYẾN MÃI ---</h1>
            <?php
                if($data_list != null){
                    foreach($data_list as $value) {
            ?>
                        <h1><?=$value['TenKM']?> ==> <?=$value['GiaTri']?>%</h1>
                        <h1>Thời gian bắt đầu: <?= date_format(date_create($value['NgayBD']),"i:s:H | d-m-Y")?></h1>
                        <h1>Thời gian kết thúc: <?= date_format(date_create($value['NgayKT']),"i:s:H | d-m-Y")?></h1>
                        <!-- <h1>Thời gian còn lại: </h1><p id="demo"></p>
                        <h1><?= date_format(date_create($value['NgayKT']),"m d, Y H:s:i") ?></h1>
                        <?php $time = date_format(date_create($value['NgayKT']),"Jan d, Y H:s:i") ?> -->
                        <hr>
                        <!-- <script>
                            // Set the date we're counting down to
                            var countDownDate = new Date("<?php echo ''.$time ?>").getTime();

                            var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
                            // Update the count down every 1 second
                            var x = setInterval(function() {

                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Display the result in the element with id="demo"
                            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                            + minutes + "m " + seconds + "s ";

                            // If the count down is finished, write some text
                            if (distance < 0) {
                                clearInterval(x);
                                document.getElementById("demo").innerHTML = "EXPIRED";
                            }
                            }, 1000);
                        </script> -->
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>