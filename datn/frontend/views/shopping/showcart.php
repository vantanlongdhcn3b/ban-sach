<?php 

foreach ($cartInfor as $key => $value){
?>
	
<li id="<?php echo "cart-".$key;?>">
	<div class="thumb">
	<a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img src="<?php echo $value['image']?>"  alt="<?php echo $value['product_name']?>"></a>
	</div>
	<div class="text">
		<a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><span><?php echo $value['product_name']?></span></a>
		<p><?php echo $value['amount'].' x '?><strong class="red"><?php echo number_format($value['price'],0,"",".").' đ'?></strong></p>
		<a class="closed" href="javascript:void(0)" onclick="delItemCart(<?= $key ?>)">x</a>
	</div>
</li>
<?php } ?>