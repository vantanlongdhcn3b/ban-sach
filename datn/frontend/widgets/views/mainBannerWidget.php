<?php 
use backend\models\Banner;
 ?>
<div class="container main-banner">
	<div class="row">
		<div class="col-md-9 col-xs-12 col-banner">
			<div id="carousel-id" class="carousel slide"  data-ride="carousel" style="margin-top: -17px;border: 1px solid rgba(204, 204, 204,0.41); border-radius: 10px;">
			<ol class="carousel-indicators">
			<?php 
				$data = Banner::find()->asArray()->all();
				$i=0;
					foreach ($data as $key => $value) {
						
						if($i==0){
					 ?>
				
				<li data-target="#carousel-id" data-slide-to="<?= $i?>" class="active"></li>
				<?php }
				else{?>
				<li data-target="#carousel-id" data-slide-to="<?= $i?>" class=""></li>
				<?php }$i++;} ?>
			</ol>
			<div class="carousel-inner"  >
				<?php 
				$data = Banner::find()->asArray()->all();
				$i=0;
				foreach ($data as $key => $value) {
					$i++;
					if($i==1){
				 ?>
				<div class="item active">
				<?php }
				else{ ?>
				<div class="item ">
				<?php }
				if($value['product_id']!=""){
				 ?>
					<a href="<?= Yii::$app->homeUrl.'product/detail/'.$value['product_id']?>">
				<?php }
				elseif($value['cat_id']!=""){?>
					<a href="<?= Yii::$app->homeUrl.'product/index/'.$value['cat_id']?>">
				<?php } ?>
					<img style="border-radius: 7px" data-src="" alt="" src="<?= $value['banner_img']?>">
					</a>
				</div>
				<?php } ?>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" style="top:210px; color: #c2c"></span></a>
			<a class="right carousel-control" style="top:120px; color: #c2c" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
	</div>
</div>


