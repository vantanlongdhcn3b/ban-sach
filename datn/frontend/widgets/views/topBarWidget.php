<?php 
use yii\helpers\Html;
 ?>
<div class="top-bar">
    			<div class="container">
	    			<div class="pull-left">
	    				<ul>
	    					
	    				</ul>
	    			</div>
	    			<div class="pull-right">
	    				<div class="user-wrap">
	    					<div class="wishlist-wrap" onclick="getWishlist()">
	    						<i class="fa fa-heart"></i>
	    						<!-- Single button -->
								<div class="dropdown">
									<em>Yêu thích:</em>
								  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="countWish">
								    0 items
								    <span class="caret"></span>
								  </button>
								  <div class="dropdown-menu wishlist-form"  aria-labelledby="dLabel" >
								    
				    					<ul id="dropdown-wishlist">
				    						
				    						
				    					</ul>
		    						
								  </div>
								</div>
	    					</div>
	    					
	    					<div class="user-dec">
							<?php 
							if (!Yii::$app->user->isGuest) {?>

		    					<div class="wishlist-wrap">
		    						<i class="fa fa-user" aria-hidden="true" style="color: #1ABC9C"></i>
		    						<!-- Single button -->
									<div class="dropdown">
										
									  <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    <em>Hi! <?php 
									    echo Yii::$app->user->identity->username;
									     ?></em>
									    <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" aria-labelledby="dLabel">
									    <li><a href="<?php echo Yii::$app->homeUrl.'site/changepassword'?>">Thông tin cá nhân</a></li>
									    <li><a href="#">Đơn hàng</a></li>
									    <li><a href="#">Danh sách ưa thích</a></li>
									    <li><a href="#">Điểm tích lũy</a></li>
									  </ul>
									</div>
		    					</div>
		    					
	    						<a href="javascript:void(0)">
	    						<i class="fa fa-sign-out" aria-hidden="true"></i>
	    						<?php 
							      echo Html::beginForm(['/site/logout'], 'post',['class'=>'form-logout']);

							      echo Html::submitButton(
							                'Đăng xuất',
							                ['class' => 'btn btn-link']
							            );
							      echo Html::endForm();
							       ?>
	    						</a>
	    					<?php
							}else{?>
								<i class="fa fa-sign-in"></i>
	    						<a href="javascript:void(0)" onclick="openLogin()" data-toggle="modal" data-target="#signin-box">Đăng nhập</a>
	    						<a href="javascript:void(0)" onclick="openSignup()" data-toggle="modal" data-target="#reg-box">Đăng kí</a>
							<?php
							}
							 ?>
	    					</div>
	    				</div>
	    				<ul class="social-1">
	    					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	    					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	    					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	    					<li><a href="#"><i class="fa fa-rss"></i></a></li>
	    				</ul>
	    			</div>
	    		</div>
    		</div>