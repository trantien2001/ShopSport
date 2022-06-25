<div id="check_out">
    <div class="path">
        <ul>
            <li><a href="?act=home">Trang chủ</a></li>
            <li><span>&nbsp;>&nbsp;</span>Đặt hàng</li>
        </ul>
    </div>
    <div class="check_out">
        <div class="w20"></div>
        <div class="w80">
            <div class="invoice_details">
                <h1>Thông tin người nhận</h1>
                <form action="?act=checkout&xuli=save" method="post">
                    <!-- <script src="./library/jquery-3.6.0.min.js"></script> -->
                    <script>
                        jQuery(document).ready(function($){
                            $("#province").change(function(event){
                                provinceID = $("#province").val();
                                // $.post('Controllers/checkout_controller.php', 
                                $.post('Views/order/qh.php', 
                                    {"province_id":provinceID},function(data){
                                    $("#district").html(data);
                                });
                            });
                            $("#district").change(function(event){
                                districtID = $("#district").val();
                                $.post("Views/order/px.php", 
                                    {"district_id":districtID},function(data){
                                    $("#ward").html(data);
                                });
                            });
                        });
                    </script>
                    <?php if(isset($data_kh)) { ?>
                    <table>
                        <tr>
                            <th>Họ tên:</th>
                            <th><input type="text" name="TenKH" placeholder="Người nhận" required value="<?= $data_kh['TenKH'] ?>"/></th>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <th><input type="text" name="Email" placeholder="Email" required value="<?= $data_kh['Email'] ?>"/></th>
                        </tr>
                        <tr>
                            <th>Số điện thoại:</th>
                            <th><input type="text" name="SDT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10"  value="<?=$data_kh['SDT'] ?>"/></th>
                        </tr>
                        <tr>
                            <th>Tỉnh thành:</th>
                            <th>
                                <select name="province" id="province">
                                <?php
                                    if(isset($data_dc)){
                                        echo '<option value="'.$data_dc['id_tt'].'">'.$data_dc['tt'].'</option>';
                                    }else{
                                ?>
                                    <option value="">==> Chọn tỉnh thành <==</option>
                                    <?php }
                                        foreach($data_tt as $row){
                                            echo '<option value="'.$row['id'].'">'.$row['_name'].'</option>';
                                        }
                                    ?>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>Quận huyện:</th>
                            <th>
                                <select name="district" id="district">
                                <?php
                                    if(isset($data_dc)){
                                        echo '<option value="'.$data_dc['id_qh'].'">'.$data_dc['qh'].'</option>';
                                    }else{
                                ?>
                                    <option value="">==> Chọn tỉnh thành <==</option>
                                    <?php }
                                        foreach($data_qh as $row){
                                            echo '<option value="'.$row['id'].'">'.$row['_name'].'</option>';
                                        }
                                        ?>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>Phường xã:</th>
                            <th>
                                <select name="ward" id="ward">
                                    <?php
                                        if(isset($data_dc)){
                                            echo '<option value="'.$data_dc['id_px'].'">'.$data_dc['px'].'</option>';
                                        }else{
                                    ?>
                                    <option value="">==> Chọn quận huyện <==</option>
                                    <?php }
                                        foreach($data_px as $row){
                                            echo '<option value="'.$row['id'].'">'.$row['_name'].'</option>';
                                        }
                                        ?>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>Đường, số nhà:</th>
                            <th><input type="text" name="DiaChi" placeholder="Địa chỉ giao hàng" required  value="<?=$data_kh['DiaChi'] ?>"/></th>
                        </tr>
                    </table>
                    <?php } ?>
                    <div class="submit_form">
                        <button type="submit">Đặt hàng</button>
                    </div>
                </form>
            </div>
            <div class="bill">
                <div class="log-title">
                    <h1><strong>Chi tiết hóa đơn</strong></h1>
                </div>
                <div class="cart-form-text pay-details table-responsive">
                    <form action="?act=checkout&xuli=save" method="post">
                        <table>
                            <thead>
                                <tr style="text-align:center">
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            <?php if (isset($_SESSION['sanpham'])) {
                                foreach ($_SESSION['sanpham'] as $value) { ?>
                                <tr>
                                    <td><p><?=$value['TenSP']?></p></td>
                                    <td style="text-align:center"><p><?=number_format($value['SoLuong'])?></p></td>
                                    <td><p><?=number_format($value['GiaBan'])?> VNĐ</p></td>
                                    <td><p><?=number_format($value['ThanhTien'])?> VNĐ</p></td>
                                </tr>
                                <?php }
                                } ?>
                            </thead>
                            <tbody>
                                <tr><th>&nbsp;</th></tr>
                                <tr>
                                    <th>Giảm Giá:&nbsp;&nbsp;0%</th>
                                    <!-- <td>0%</td> -->
                                </tr>
                                <tr>
                                    <th>Phí ship:&nbsp;&nbsp;30,000 VNĐ</th>
                                    <!-- <td>30,000 VNĐ</td> -->
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tổng:&nbsp;&nbsp;<?= number_format($count + 30000) ?> VNĐ</th>
                                    <!-- <td><?= number_format($count + 30000) ?> VNĐ</td> -->
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>