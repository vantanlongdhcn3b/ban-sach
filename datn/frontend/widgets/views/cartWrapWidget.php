<?php 
	
	if(!$cartInfor){
		$totalAmount=0;
		$total = 0;
	}else{
		$totalAmount = $total = 0;
		foreach ($cartInfor as $key => $value) {
			$totalAmount+=$value['amount'];
			$total+=$value['price']*$value['amount'];
		}
	}
 ?>
<div class="cart-wrap">
	<!--DL Menu Start-->
	<div id="kode-responsive-navigation" class="dl-menuwrapper">
		<button class="dl-trigger">Open Menu</button>
		<ul class="dl-menu">
			<li><a href="index-2.html">home</a>
				<ul class="dl-submenu">
					<li><a href="index-3.html">index 2</a></li>
				</ul>
			</li>
			<li class="menu-item kode-parent-menu"><a href="#">Pages</a>
				<ul class="dl-submenu">
					<li><a href="login-forms.html">login forms</a></li>
					<li><a href="comingsoon.html">coming soon</a></li>
					<li><a href="checkout.html">check out</a></li>
					<li><a href="404.html">404</a></li>
					<li><a href="widgets.html">widgets</a></li>
					<li><a href="shortcode.html">shortcode</a></li>
				</ul>
			</li>
			<li class="menu-item kode-parent-menu"><a href="about-author.html">about author</a>
			</li>
			<li class="menu-item kode-parent-menu"><a href="#">products</a>
				<ul class="dl-submenu">
					<li><a href="product-detail.html">product detail</a></li>
					<li><a href="product-detail2.html">product detail 2</a></li>
					<li><a href="product-detail3.html">product detail 3</a></li>
					<li><a href="grid_03_columns.html">product 3 col</a></li>
					<li><a href="grid_04_columns.html">product 4 col</a></li>
				</ul>
			</li>
			<li class="menu-item kode-parent-menu"><a href="#">blog</a>
				<ul class="dl-submenu">
					<li><a href="blog-classic.html">blog-classic</a></li>
					<li><a href="blog-detail.html">blog-detail</a></li>
					<li><a href="blog-detail-fullwidth.html">blog detail 2</a></li>
					<li><a href="blog-full-width.html">blog full width</a></li>
					<li><a href="blog_masonry_2_columns.html">blog masonry</a></li>
					<li><a href="blog-grid2.html">blog 2</a></li>
					<li><a href="list-style_01_columns.html">list style 1</a></li>
					<li><a href="list-style_01_sidebar.html">list style sidebar</a></li>
				</ul>
			</li>
			<li><a href="contact-us.html">Contact Us</a></li>
		</ul>
	</div>
	<!--DL Menu END-->
	<div class="cart" >
		<div class="show2" onclick="showCart()">
			<i class="icon-shopping-cart"></i>
			<small id="totalAmount"><?php echo $totalAmount ?></small>
		<span id="total"><?php if($total==0){echo "Giỏ hàng rỗng";}else {echo number_format($total,0,"",".").' đ';} ?></span>
		</div>
		<div class="cart-form">
			<ul id="showCart">
				<!--show cart sử dụng ajax-->
				
			</ul>

			<div class="cart-footer">
				<div class="row">
					<div class="cl-md-7">
			Tổng tiền: <span id="viewTotal" class="red"><?php echo number_format($total,0,"",".").' đ'; ?></span>
					</div>
					<?php 
					if(!empty(Yii::$app->session['cart'])){
					 ?>
					
					<div class="cl-md-5">
				<a class="cart-chekout" style="width: 80%" href="<?php echo Yii::$app->homeUrl.'shopping/checkout';?>"><i class="fa fa-mail-forward"></i>Thanh toán</a>
					</div>
					<?php } ?>
				</div>
				
			</div>
		</div>
	</div>
</div>