<?php 	
	foreach ($dataWishlist as $key => $value) {?>
		<li id="<?php echo $value['product_id'];?>">
			<div class="thumb">
				<a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><img src="<?php echo $value['image']; ?>" alt=""></a>
			</div>
			<div class="text">
				<span><a href="<?php echo Yii::$app->homeUrl.'product/detail/'.$value['product_id'];?>"><?php echo $value['product_name']; ?></a></span>
				<p><?php echo $value['author_name']; ?></p>
				<a class="closed" href="javascript:void(0)" onclick="deleteWishlist(<?php echo $value['product_id'];?>)">x</a>
			</div>
		</li>
<?php } 

 ?>