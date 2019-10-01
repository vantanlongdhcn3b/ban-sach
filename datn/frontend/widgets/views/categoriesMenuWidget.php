<?php 
use frontend\models\Category;
use frontend\models\Product;

 ?>
<div class="categories-menu">
	<span>DANH MỤC</span>
	<i class="fa fa-reorder show"></i>
	<?php 
	if(Yii::$app->request->url==Yii::$app->homeUrl){?>
	<ul class="categories-ul"  style="display: block">
	<?php }
	else{ ?>
	<ul class="categories-ul">
	<?php } ?>
		<li>
			<a href="<?php echo Yii::$app->homeUrl.'product/kho-sach-giam-gia';?>"><i class="fa fa-image"></i>Kho sách giảm giá</a>
		</li>
		<li>
			<a href="<?php echo Yii::$app->homeUrl.'product/sach-ban-chay-nhat';?>"><i class="fa fa-image"></i>Sách bán chạy</a>
		</li>
		<li>
			<a href="<?php echo Yii::$app->homeUrl.'product/show-all-new-pro-store';?>"><i class="fa fa-image"></i>Sách mới phát hành</a>
		</li>
		<li style="padding-left: 14px; color: #abc">Danh mục</li>
		<?php 
		$i=-124;
		foreach ($dataCat as $key => $value) {
			$modelSubCategory=new Category();
			$dataSub= $modelSubCategory->getCategory($value['cat_id']);
			
			$i++;
			$modelPro = new Product();
        	$dataCountPro = $modelPro->totalProductByCat($value['cat_id']);
        	$count=0;
			foreach ($dataCountPro as $keyC => $valueC) {
				$count+=$valueC['count_pro'];
			}
		 ?>

		<li><a href="<?=Yii::$app->homeUrl?>product/index?id=<?php echo $value['cat_id'];?>"><i class="fa fa-image"></i><?php echo $value['cat_name'];?>
		<span class="count">
			(<?php echo $count; ?>)
		</span>
		
		<?php 
		if($dataSub){
		 ?>
		<i class="fa fa-caret-right" aria-hidden="true"></i>
		<?php } ?>
		</a>
			<!--MEGA MENU START-->
			<?php 
			if($dataSub){
			 ?>
				<div class="mega-menu1 sub" style="top: <?= $i?>px;border: 1px solid #ccc ;border-radius: 5px;background: white url('<?= $value['cat_image']?>') no-repeat scroll right bottom;height: 526px;" data-background="<?= $value['cat_image']?>" data-style="background: url('<?= $value['cat_image']?>') white no-repeat bottom right;">
					<div class="fetch-bookmtea">
						<ul>
							<li class="fetch-book2">
								<h4>Danh mục</h4>
							</li>
							<?php 
							foreach ($dataSub as $keySub => $valueSub) {
							
							 ?>
							<li>
								<a class="classfont" href="<?=Yii::$app->homeUrl?>product/listbook?id=<?php echo $valueSub['cat_id'];?>"><?php echo $valueSub['cat_name']; ?></a>
							</li>
							<?php } ?>
							<li>
								<a href="<?= Yii::$app->homeUrl.'product/index/'.$value['cat_id']?>">More...</a>
							</li>
						</ul>
					</div>
					<div class="fetch-book2">
						
					</div>
				</div>
			<?php } ?>
			<!--MEGA MENU END-->
		</li>
		<?php $i-=35;} ?>
	</ul>
</div>