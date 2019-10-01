<div class="row">
	<div class="col-md-5">
		<img style="width: 70%;height: auto;" src="<?= $dataview['image']?>">
	</div>
	<div class="col-md-7">
		<span style="float: right;">
		1 x <?php $ban=$dataview['price_out']*(100-$dataview['sale'])/100;
		echo number_format($ban,0,"",".").' đ';?>	
		</span>
	</div>
</div>
<div class="row text" style="margin-top: 20px;font-size: 15px">
	<div class="col-md-7">
		Bạn hiện đang có <span class="blue"><?php echo $totalAmount?></span> sản phẩm trong giỏ hàng.
	</div>
	<div class="col-md-5" >
		<div class="row">
			<div class="col-md-12">Tổng tiền tạm tính: <span class="red"><?php echo number_format($total,0,"",".").' đ'?></span></div>
			<div class="col-md-12">
				<a class="cart-chekout" href="<?php echo Yii::$app->homeUrl.'shopping/checkout';?>"><i class="fa fa-mail-forward"></i>Thanh toán</a>
			</div>
		</div>	
	</div>
</div>