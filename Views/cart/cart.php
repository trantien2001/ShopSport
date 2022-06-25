<div id="cart">
	<div class="path">
        <ul>
            <li><a href="?act=home">Trang chủ</a></li>
            <li><span>  >  </span>Giỏ hàng</li>
        </ul>
    </div>

	<div class="cart_content">
		<div class="image">
			<img src="./library/images/ronaldo.jpg" alt="">
		</div>
		<div class="cart_detail">
			<form action="?act=checkout" method="post">
				<table>
					<thead>
						<tr>
							<th>Tên sản phẩm</th>
							<th>Giá sản phẩm</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
			<?php
				if (isset($_SESSION['sanpham'])) {
					foreach ($_SESSION['sanpham'] as $value) { ?>
						<tr>
							<td class="">
								<!-- <a href="?act=detail&id=<?= $value['MaSP'] ?>"><img src="library/<?= $value['HinhAnh1'] ?>" /></a> -->
								<div class="items-dsc">
									<h5><a href="?act=detail&id=<?= $value['MaSP'] ?>"><?= $value['TenSP'] ?></a></h5>
								</div>
							</td>
							<td><?= number_format($value['GiaBan']) ?> VNĐ</td>
							<td>
								<form action="" method="POST">
									<div class="plus-minus">
									<!-- <input type="button" value="-" class="minus is-form">
									<input type="number" value="1" min="1" max="<?=$data['SoLuong']?>" class="input-qty" name="quantity" id="quantity" aria-label="quantity">
									<input type="button" value="+" class="plus is-form"> -->
										<a href="?act=cart&xuli=delete&id=<?=$value['MaSP']?>" class="dec qtybutton" type="button">-</a>
										<b class="plus-minus-box"><?= $value['SoLuong'] ?></b>
										<a href="?act=cart&xuli=update&id=<?=$value['MaSP']?>" class="inc qtybutton" type="button">+</a>
									</div>
								</form>
							</td>
							<td>
								<strong><?= number_format($value['ThanhTien']) ?> VNĐ</strong>
							</td>
							<td><a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="far fa-times-circle"></i></a></td>
						</tr>
					<?php }
				}?>
					</tbody>
				</table>
				<h1>Tổng tiền: <?= number_format($count) ?> VNĐ</h1>
				<div class="cart_order">
					<button type="submit">Đặt hàng</button>
				</div>
			</form>
			<!-- <input style="" type="button" value="Thanh toán"> -->
		</div>

		<div class="image">
			<img src="./library/images/messi.jpg" alt="">
		</div>

		<!-- <div class="payment_detail">
			<div class="w50">
				
			</div>
			<div class="w50"></div>
		</div> -->
	</div>
</div>