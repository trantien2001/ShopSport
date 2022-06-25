<div id="my_order">
    <div class="path">
        <ul>
            <li><a href="?act=home">Trang chủ</a></li>
            <li><span>&nbsp;>&nbsp;</span>Đơn hàng của tôi</li>
        </ul>
    </div>
    <div class="my_order">
        <?php if (isset($_COOKIE['msg'])) { ?>
        <div class="notification">
            <strong>Thông báo:</strong> <?= $_COOKIE['msg'] ?>
        </div>
        <?php } ?>
        <table>
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày mua</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th>Hủy đơn hàng</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($data_my_order)){
                    foreach($data_my_order as $data){
                        ?>
                        <tr>
                            <td style="text-align:center"><?=$data['MaDH']?></td>
                            <td><?= date_format(date_create($data['NgayTao']),'H:i - d-m-Y')?></td>
                            <td><?=$data['DiaChiGiao']?></td>
                            <td><?=$data['TongTien']?></td>
                            <td><?php if($data['TrangThai'] == 1) echo 'Đã xác nhận'; else echo 'Chưa duyệt'?></td>
                            <td style="text-align:center"><?php 
                            if($data['TrangThai'] == 1) 
                            echo '<a href="" class="hide" type="button">Hủy</a>'; 
                            else echo '<a href="?act=taikhoan&xuli=delete_order&id='.$data['MaDH'].'" class="show" type="button">Hủy</a>'?></td>
                        </tr>
                        <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>