<?php 
    if(isset($data)){ ?>
    <div id="product_detail">
        <div class="path">
            <ul>
                <li><a href="?act=home">Trang chủ</a></li>
                <!-- <li><span>&nbsp;>&nbsp;</span>Sản phẩm</li> -->
                <li><span>&nbsp;>&nbsp;</span><?= $data["TenSP"] ?></li>
            </ul>
        </div>
    
        <div class="product_detail">
            <div class="images">
                <div class="hinh active">
                    <img src="./library/images/<?= $data["Hinh1"]?>" alt="">
                </div>

                <?php if(!empty($data["Hinh2"]) ){ ?>
                    <div class="hinh ">
                        <img src="./library/images/<?= $data["Hinh2"]?>" alt="">
                    </div>
                <?php } if(!empty($data["Hinh3"]) ){ ?>
                    <div class="hinh ">
                        <img src="./library/images/<?= $data["Hinh3"]?>" alt="">
                    </div>
                <?php } if(!empty($data["Hinh4"]) ){ ?>
                    <div class="hinh ">
                        <img src="./library/images/<?= $data["Hinh4"]?>" alt="">
                    </div>
                <?php } ?>
               
            </div>
            <div class="img">
                <div class="anh active">
                    <input type="hidden" value="<?= $data["Hinh1"] ?>"><img src="./library/images/<?= $data["Hinh1"] ?>" alt="">
                </div>
                <div class="anh ">
                    <input type="hidden" value="<?= $data["Hinh2"] ?>"><img src="./library/images/<?= $data["Hinh2"] ?>" alt="">
                </div>
                <div class="anh ">
                    <input type="hidden" value="<?= $data["Hinh3"] ?>"><img src="./library/images/<?= $data["Hinh3"] ?>" alt="">
                </div>
                <div class="anh ">
                    <input type="hidden" value="<?= $data["Hinh4"] ?>"><img src="./library/images/<?= $data["Hinh4"] ?>" alt="">
                </div>
            </div>

            <!-- javascrip image -->
            <script>
                const $1 = document.querySelector.bind(document);
                const $2 = document.querySelectorAll.bind(document);
                const tabs = $2(".hinh");
                const panes = $2(".anh");

                tabs.forEach((tab, index) => {
                const pane = panes[index];

                tab.onclick = function () {
                    $1(".hinh.active").classList.remove("active");
                    $1(".anh.active").classList.remove("active");

                    this.classList.add("active");
                    pane.classList.add("active");
                };
                });
            </script>
            <!-- javascrip image -->
            
            <div class="content">
                <div class="product_title">
                    <h1><?= $data["TenSP"] ?></h1>
                </div>
                <div class="product_price">
                    <span><?= number_format($data["GiaBan"],0,",",",")." đ" ?></span>
                </div>
                <?php
                    if(isset($data_giay_nguoilon)){?>
                        <div class="input_group">
                            <label>Số lượng &nbsp;</label>
                            <input type="button" value="-" class="minus is-form">
                            <div class="solgs active">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['39']?>" class="ainput-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['40']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['41']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['42']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['43']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['44']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_giay_nguoilon['45']?>" class="input-qty" name="quantity">
                            </div>
                            <input type="button" value="+" class="plus is-form">
                        </div>
                        <div class="size">
                            <p>Chọn size:</p>
                            <div class="sizes active">
                                <input class=" sl_size<?=$data_giay_nguoilon['39']?>" type="button" value="39">
                            </div>
                            <div class="sizes">
                                <input class=" sl_size<?=$data_giay_nguoilon['40']?>" type="button" value="40">
                            </div>
                            <div class="sizes">
                                <input class=" sl_size<?=$data_giay_nguoilon['41']?>" type="button" value="41">
                            </div>
                            <div class="sizes">
                                <input class=" sl_size<?=$data_giay_nguoilon['42']?>" type="button" value="42">
                            </div>
                            <div class="sizes">
                                <input class=" sl_size<?=$data_giay_nguoilon['43']?>" type="button" value="43">
                            </div>
                            <div class="sizes">
                                <input class=" sl_size<?=$data_giay_nguoilon['44']?>" type="button" value="44">
                            </div>
                            <div class="sizes">
                                <input class=" sl_size<?=$data_giay_nguoilon['45']?>" type="button" value="45">
                            </div>
                        </div>
                <?php } else
                    if(isset($data_ao_nguoilon)){ ?>
                        <div class="input_group">
                            <label>Số lượng &nbsp;</label>
                            <input type="button" value="-" class="minus is-form">
                            <div class="solgs active">
                                <input type="number" value="1" min="1" max="<?=$data_ao_nguoilon['S']?>" class="input-qty" name="quantity1">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_nguoilon['M']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_nguoilon['L']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_nguoilon['XL']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_nguoilon['XXL']?>" class="input-qty" name="quantity">
                            </div>
                            <input type="button" value="+" class="plus is-form">
                        </div>
                        <div class="size">
                            <p>Chọn size:</p>
                            <div class="sizes active">
                                <input class="sl_size<?= $data_ao_nguoilon['S'] ?>" type="button" value="S">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?= $data_ao_nguoilon['M'] ?>" type="button" value="M">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?= $data_ao_nguoilon['L'] ?>" type="button" value="L">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?= $data_ao_nguoilon['XL'] ?>" type="button" value="XL">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?= $data_ao_nguoilon['XXL'] ?>" type="button" value="XXL">
                            </div>
                        </div>
                        
                <?php } else
                    if(isset($data_ao_treem)){?>
                        <div class="input_group">
                            <label>Số lượng &nbsp;</label>
                            <input type="button" value="-" class="minus is-form">
                            <div class="solgs active">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['1']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['3']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['5']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['7']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['9']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['11']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['13']?>" class="input-qty" name="quantity">
                            </div>
                            <div class="solgs">
                                <input type="number" value="1" min="1" max="<?=$data_ao_treem['15']?>" class="input-qty" name="quantity">
                            </div>
                            <input type="button" value="+" class="plus is-form">
                        </div>
                        <div class="size">
                            <p>Chọn size:</p>
                            <div class="sizes active">
                                <input class="sl_size<?=$data_ao_treem['1']?>" type="button" value="1">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['3']?>" type="button" value="3">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['5']?>" type="button" value="5">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['7']?>" type="button" value="7">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['9']?>" type="button" value="9">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['11']?>" type="button" value="11">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['13']?>" type="button" value="13">
                            </div>
                            <div class="sizes">
                                <input class="sl_size<?=$data_ao_treem['15']?>" type="button" value="15">
                            </div>
                        </div>
                        
                <?php } else { ?>
                    <div class="input_group">
                        <p>Số lượng &nbsp;</p>
                        <input type="button" value="-" class="minus is-form">
                        <input type="number" value="1" min="1" max="<?=$data['SoLuong']?>" class="input-qty" name="quantity">
                        <input type="button" value="+" class="plus is-form">
                    </div>

                <?php } ?>
            
                <!-- javascript size -->
                    <script>
                        const $5 = document.querySelector.bind(document);
                        const $6 = document.querySelectorAll.bind(document);
                        const sizes = $6(".sizes");
                        const solgs = $6(".solgs");
                        sizes.forEach((size,index) => {
                            const solg = solgs[index];
                            size.onclick = function(){
                                $5(".sizes.active").classList.remove("active");
                                $5(".solgs.active").classList.remove("active");

                                this.classList.add("active");
                                solg.classList.add("active");
                            };
                        });
                    </script>
                    <!-- javascript size -->
            <!-- javascript số lượng -->
                <script>
                    $('input.input-qty').each(function() {
                    var $this = $(this),
                        qty = $this.parent().find('.is-form'),
                        min = Number($this.attr('min')),
                        max = Number($this.attr('max'))
                    if (min == 0) {
                        var d = 0
                    } else d = min
                        $(qty).on('click', function() {
                            if ($(this).hasClass('minus')) {
                            if (d > min) d += -1
                            } else if ($(this).hasClass('plus')) {
                            var x = Number($this.val()) + 1
                            if (x <= max) d += 1
                            }
                            $this.attr('value', d).val(d)
                        })
                    })
                </script>
            <!--  -->
            <!--  -->
                <script>
                    const size = document.querySelector(".sizes.active>input")
                    const sl = document.querySelector(".solgs.active>input")
                    // window.location.href.split("#")[0]
                </script>
            <!--  -->
                <div class="add_cart_buy">
                    <div class="add_cart">
                        <i class="fas fa-cart-plus"></i>
                        <a href="?act=cart&xuli=add&id=<?=$data['MaSP']?>">THÊM VÀO GIỎ</a>
                    </div>
                    <div class="buy">
                        <i class="fas fa-check"></i>
                        <a href="?act=checkout&id=<?=$data['MaSP']?>">MUA NGAY</a>
                    </div>
                </div>

                <div class="information_more">
                    <strong>Chính sách bán hàng</strong>
                    <ul>
                        <li><i class="fas fa-check"></i>&nbsp;Tư vấn miễn phí</li>
                        <li><i class="fas fa-check"></i>&nbsp;Thanh toán khi nhận hàng</li>
                        <li><i class="fas fa-check"></i>&nbsp;Đổi hàng trong 15 ngày</li>
                        <li><i class="fas fa-check"></i>&nbsp;Bảo hành nhanh</li>
                        <li><i class="fas fa-check"></i>&nbsp;Giao hàng toàn quốc</li>
                    </ul>
                </div>
                <div class="mota">
                    <div class="product_description">
                        <h1>Mô tả sản phẩm</h1>
                        <ul>
                            <li>-&nbsp; <?= $data["MoTa1"]?></li>
                            <li>-&nbsp; <?= $data["MoTa2"]?></li>
                            <li>-&nbsp; <?= $data["MoTa3"]?></li>
                            <li>-&nbsp; <?= $data["MoTa4"]?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="description_comment">
            <div class="tabs">
                <div class="tab-item active">
                    <i class="fas fa-comments-dollar"></i>
                    Bình luận
                </div>
                <div class="tab-item">
                    <i class="fas fa-gavel"></i>
                    Đánh giá
                </div>
                <div class="tab-item">
                    <i class="tab-icon fas fa-code"></i>
                    Sản phẩm cùng loại
                </div>
                <div class="line"></div>
            </div>
            <div class="tab-content">
                <!-- BÌNH LUẬN -->
                <div class="tab-pane active">
                    <!-- <form action="?menu=exec_binh_luan" method="post">
                        <table class="table">
                        <input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
                            <tr>
                                <td colspan="2"><label>Bình luận</label></td>
                            </tr>
                            <tr>
                                <td>Tên tài khoản: </td>
                                <td>
                                    <input type="text" class="form-control" name="nickname" placeholder="Họ tên"
                                    ></td>
                            </tr>
                            <tr>
                                <td>Nội dung: </td>
                                <td>
                                    <textarea 
                                        name="noi_dung" 
                                        style="resize: none;" 
                                        id="noi_dung" 
                                        cols="40" 
                                        rows="5" 
                                        class="form-control" 
                                        placeholder="Nhập nội dung bình luận..">
                                    </textarea>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Bình luận"
                                    ></td>
                            </tr>
                        </table>
                    </form> -->


                    <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1632614030377920";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, "script", "facebook-jssdk"));
                    </script>

                    <!-- Load Facebook SDK for JavaScript -->
                    <!-- <div id="fb-root"></div>
                    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6"></script> -->

                    <!-- Your embedded comments code -->
                    <!-- <div class="fb-comment-embed"
                    data-href="https://www.facebook.com/zuck/posts/10102735452532991?comment_id=1070233703036185"
                    data-width="500"></div> -->

                    <!-- <div class="fb-comments" data-href="https://alla.com.vn/" data-numposts="5"></div> -->
                    <div class="fb-comments" data-href="https://dxdbloger.000webhostapp.com?act=detail&id=<?= $data[0]['TenSP']; ?>" data-numposts="5" data-width=""></div>
                    

                </div>
                <!-- ĐÁNH GIÁ -->
                <div class="tab-pane">
                    <?php include('danhgia.php') ?>
                </div>
                <!-- SẢN PHẨM TƯƠNG TỰ -->
                <div class="tab-pane">
                    <div id="product-list">
                        <?php 
                        if(isset($data_sp_cungloai) and $data_sp_cungloai != NULL) {
                            foreach ($data_sp_cungloai as  $value) {
                    ?>
                        <div class="col-5">
                            <div class="imgsanpham">
                                <a href="?act=detail&id=<?= $value['MaSP'] ?>">
                                    <img src="./library/images/<?= $value['Hinh1'] ?>" alt="">
                                </a>
                            </div>
                            <h2> <a href="?act=detail&id=<?php $value['MaSP']; ?>"><?= $value['TenSP']; ?></a> </h2>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <p class=""><?php echo number_format($value['GiaBan'],0,",",".")." đ"; ?></p>
                        </div>
                        <?php } } else { echo '<p> KHÔNG CÓ DỮ LIỆU </p>'; }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const $3 = document.querySelector.bind(document);
        const $4 = document.querySelectorAll.bind(document);
        const tabs_1 = $4(".tab-item");
        const panes_1 = $4(".tab-pane");
        const tabActive = $3(".tab-item.active");
        const line = $3(".tabs .line");

        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";

        tabs_1.forEach((tab, index) => {
        const pane = panes_1[index];

        tab.onclick = function () {
            $3(".tab-item.active").classList.remove("active");
            $3(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";
            
            this.classList.add("active");
            pane.classList.add("active");
        };
        });
    </script>
<?php } else {
    require_once('Views/error_page.php');
}?>