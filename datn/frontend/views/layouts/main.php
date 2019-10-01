<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\cartWrapWidget;
use frontend\widgets\searhWrapWidget;
use frontend\widgets\navigationWrapWidget;
use frontend\widgets\topBarWidget;
use frontend\widgets\categoriesMenuWidget;
use frontend\widgets\navDecWidget;
use frontend\widgets\mainBannerWidget;
use frontend\widgets\footerWidget;
use kartik\social\FacebookPlugin;
use kartik\social\GooglePlugin;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="kode_wrapper">
	   <!-- register Modal -->
	    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
			<div class="modal-dialog login1">
				<div class="modal-content">
					<div id="contentModalSignupAjax"></div>
					<div class="row" style="margin-left: 100px">
						Hoặc đăng nhập bằng <?= yii\authclient\widgets\AuthChoice::widget([
			             'baseAuthUrl' => ['site/auth']
			        ]) ?>
			        <?php 
				    echo GooglePlugin::widget([
					'type'=>GooglePlugin::SIGNIN, 
					'tag'=>'span', 
					'signinOptions'=>['id'=>'signinButton'],
					'settings' => [
					    'callback'=>'signinCallback',
					    'cookiepolicy' => 'single_host_origin',
					    'requestvisibleactions' => 'http://schemas.google.com/AddActivity',
					    'scope'=>'https://www.googleapis.com/auth/plus.login'
					]
					]);
				     ?> 
					</div>
					
				</div>
				
				
			</div>
	    </div>
	    <!-- register Modal end-->
	    
	    <!-- SIGNIN MODEL START -->
	    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
			<div class="modal-dialog login1">
				<div class="modal-content">
					<div id="contentModaLoginlAjax"></div>
					<div class="row" style="margin-left: 100px">
						Hoặc đăng nhập bằng <?= yii\authclient\widgets\AuthChoice::widget([
			             'baseAuthUrl' => ['site/auth']
			        ]) ?>
			        
					</div>
                	
                	 
				</div>

				
		       
	    	</div>
	    </div>
	    <!-- SIGNIN MODEL END -->
  		<!--HEADER START-->
    	<header class="header-1">
    		<!--TOP BAR START START-->
    		<?= topBarWidget::widget()?>
    		<!--TOP BAR END-->

    		<!--LOGO WRAP START-->
    		<div class="logo-wrap">
    			<div class="container">
    				<!--LOGO DEC START-->
	    			<div class="logo-dec">
	    				<a href="<?= Yii::$app->homeUrl?>">
	    				<img class="icon-logo" src="<?php echo Yii::$app->homeUrl; ?>source/LOGO.png" alt=""/>
	    				</a>
	    			</div>
	    			<!--LOGO DEC END-->
	    			<!--SEARCH WRAP START-->
	    			
	    			<?= searhWrapWidget::widget()?>
	    			<!--SEARCH WRAP END-->
	    			<!--CART WRAP START-->
	    			
	    			<?= cartWrapWidget::widget()?>
	    			<!--CART WRAP END-->
	    		</div>
    		</div>
    		<!--LOGO WRAP END-->
    		<!--NAVIGATION WRAP START-->
    		<div class="container-fluid nav-container">
    			<div class="navigation-wrap">
					<!--CATEGORIES WRAP START-->
					<?= categoriesMenuWidget::widget()?>
					<!--CATEGORIES WRAP END-->

					<!--NAVIGATION DEC START-->
					<?= navDecWidget::widget()?>
					<!--NAVIGATION DEC END-->
				</div>
    		</div>
    		<!--NAVIGATION WRAP END-->
    	</header>
		<!--HEADER END-->

		<!--CUSTOMER CARE WRAP START-->
		
		<!--CUSTOMER CARE WRAP START-->

		
		<?= Breadcrumbs::widget([
	          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	      ]) ?>
	      <?= Alert::widget() ?>
			<?= $content ?>
		
		<!--FOOTER START-->
		<?= footerWidget::widget()?>
		<!--FOOTER END-->
		<div class="copy-right copy-right2">
			<div class="container">
				<p>© 2016 , Design by <a href="index.html">kode forest</a></p>
				<ul class="ft-nav">
					<li>
						<a href="#">home</a>
					</li>
					<li>
						<a href="#">About Us</a>
					</li>
					<li>
						<a href="#">Categories</a>
					</li>
					<li>
						<a href="#">Features</a>
					</li>
					<li>
						<a href="#">Blog</a>
					</li>
					<li>
						<a href="#">Shop</a>
					</li>
					<li>
						<a href="#">Contact Us</a>
					</li>
				</ul>
				<ul class="brand-icons">
					<li><a href="#"><i class="icon-visa-pay-logo"></i></a></li>
					<li><a href="#"><i class="icon-master-card-logo"></i></a></li>
					<li><a href="#"><i class=" icon-payoneer-logo"></i></a></li>
					<li><a href="#"><i class="icon-paypal-logo"></i></a></li>
					<li><a href="#"><i class="icon-skrill-pay-logo"></i></a></li>
				</ul>
			</div>
		</div>
		<!-- START GO UP -->
        <div class="go-up">
            <a href="#" ><i class="fa fa-angle-up"></i></a>    
        </div>
        <!--END GO UP-->
</div>

<div class="modal fade" id="checkLoginWishlist" tabindex="-1" role="dialog">
	<div class="modal-dialog" style="width: 25%; margin-top: 170px">
		<div class="modal-content">
		      <div class="modal-body">
		      	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        <p>Đăng nhập để quản lý danh sách yêu thích của bạn</p>
		      </div>
			
		</div>
		<div class="clearfix"></div>    
	</div>
</div>

<div class="modal fade" id="addWishSuccess" tabindex="-1" role="dialog">
	<div class="modal-dialog" style="width: 25%; margin-top: 170px">
		<div class="modal-content">
		      <div class="modal-body">
		      	<button type="button" class="close" data-dismiss="modal">&times;</button>
		        <p>Đã thêm sản phẩm vào danh sách yêu thích của bạn</p>
		      </div>
			
		</div>
		<div class="clearfix"></div>    
	</div>
</div>

<!--modal view sản phẩm khi click add giỏ hàng-->
<div class="modal fade" id="addCartSuccess" tabindex="-1" role="dialog">
	<div class="modal-dialog" style="width: 50%; margin-top: 70px">
		<div class="modal-content">
		      <div class="modal-body" style="padding: 0">
		      	<div class="panel panel-default panel-previewbook">
				  <div class="panel-heading classfont" style="font-size: 20px">
				  <i class="icon-shopping-cart"></i>  Giỏ hàng
				  <button type="button" class="close" data-dismiss="modal" style="float: right;">&times;</button>
				  </div>
				  <div class="panel-body">
				  	<div id="contentPrewviewAddCart">
				  		
				  	</div>
				  </div>
				</div>
		      </div>
			
		</div>
		<div class="clearfix"></div>    
	</div>
</div>

<!--modal preview book detail-->
<div class="modal fade" id="bookPreview" tabindex="-1" role="dialog">
	<div class="modal-dialog bookPreview">
		<div class="modal-content">
		      <div class="modal-body">
		        <div class="panel panel-default panel-previewbook">
				  <div class="panel-heading classfont" style="font-weight: bold;font-size: 20px;background-color: #000;color: #fff">
				  Xem đoạn trích
				  
				  	<i style="margin-left: 470px" id="zoomin" class="fa fa-search-plus zoom" aria-hidden="true"></i>
					<i class="fa fa-search-minus zoom" id="zoomout" aria-hidden="true"></i>
				  
				  	<button type="button" class="close" data-dismiss="modal" style="float: right;"><i class="fa fa-times" aria-hidden="true" style="color: #fff"></i></button>
				  </div>
				  <div class="panel-body">
				  	<div id="contentPrewViewBook">
				  	
				  	</div>
				  </div>
				</div>
		      </div>
			
		</div>
		<div class="clearfix"></div>    
	</div>
</div>



<?php $this->endBody() ?>
<script type="text/javascript">
	function openModalPreview(id){

		$('#bookPreview').modal('show');
    	$.get('<?php echo Yii::$app->homeUrl; ?>product/previewbook', {'id': id}, function(data) {
	        	$("#contentPrewViewBook").html(data);

	    	});

    }
    


	function WishlistCart(id){
		// if(<?php //echo Yii::$app->user->isGuest;?>==0){
			$.get('<?php echo Yii::$app->homeUrl; ?>wishlist/add', {'id': id}, function(data) {
	        /*optional stuff to do after success */
	    	});
	    	$('#addWishSuccess').modal();
	    	$('#iconwish_'+id).css({
	    		'color': 'red',
	    	});
			
		// }
		// else{
		// 	//alert("Bạn phải đăng nhập để quản lý danh sách yêu thích của bạn");
		// 	$('#checkLoginWishlist').modal();
		// }
	    
	}

	function getWishlist(){
		$.get('<?php echo Yii::$app->homeUrl; ?>wishlist/getwishlist', function(data) {
	      $("#dropdown-wishlist").html(data);
	    });
	}
	function deleteWishlist(id){
		// $('.wishlist-form').show('fast');
		// $('#'+id).hide();
		$.get('<?php echo Yii::$app->homeUrl; ?>wishlist/deletewish', {'id': id}, function(data) {
	      
	    });
	}
	

	function blurSreach(){
		$('.search-form').css({
			'display': 'none',
		});
	}

	function Search(value,cat){

		value=$('#input-search').val();
		if(value=="") {
			value="ayutdsjvbvnm76hjk";
		}

	    //alert(value);
	    cat=$('#filterCategory').val();
	    $.get('<?php echo Yii::$app->homeUrl; ?>product/search', {'value': value,'cat':cat}, function(data) {
	          $("#searchform-result").html(data);
	    });
	}

	function addCart(id) {
		$('#bookPreview').modal('hide');
		

		$.get('<?php echo Yii::$app->homeUrl; ?>shopping/addcart', {'id': id}, function(data) {
			val=data.split("-");
	         $('#totalAmount').text(val[0]);
	         $('#total').text(val[1]);
	         $('#viewTotal').text(val[1]);

	    $('#addCartSuccess').modal('show');
		$.get('<?php echo Yii::$app->homeUrl; ?>shopping/view-add-cart', {'id': id}, function(data) {
			$('#contentPrewviewAddCart').html(data);
		});   

	    });
	}


	function showCart(){
		$.get('<?php echo Yii::$app->homeUrl; ?>shopping/showcart', function(data) {
	         $('#showCart').html(data);
	    });
	}
	function delItemCart(id){

		$('#cart-'+id).css({
			'display': 'none',
		});

		$.get('<?php echo Yii::$app->homeUrl; ?>shopping/delcart',{'id': id},  function(data) {
	         val=data.split("-");
	         $('#totalAmount').text(val[0]);
	         $('#total').text(val[1]);
	         $('#viewTotal').text(val[1]);
	    });
	}

	//viết cho nút tăng giảm số lượng sản phẩm trong form giỏ hàng
	function itemdown(id){
		amount=parseInt($('#amount_'+id).val()) - 1;
		$('#amount_'+id).val(amount);
		updateCart(id, amount)
	}
	function itemup(id){
		amount=parseInt($('#amount_'+id).val()) + 1;
		$('#amount_'+id).val(amount);
		updateCart(id, amount)
	}
	

	function updateCart(id, amount){
		$.get('<?= Yii::$app->homeUrl?>shopping/updatecart?id='+id+'&amount='+amount, function(data) {
			$('#contentCheckout').html(data);
		});
	}

	

	function scrollToElm(elm,id,id2,id3){
		$(id).addClass('active');
	    $(id2).removeClass('active');
	    $(id3).removeClass('active');

	    $('html,body').clearQueue();
	    $('html,body').stop();
	    $('html,body').animate({scrollTop: elm.offset().top},300);

	}
	//lọc theo trạng thái sách
    function changeStatus(url,status,id,pager,view,num_page) {
    	var views=view;
    	if(view=="grid"){
    		$('#list').removeClass('active');
			$('#grid').addClass('active');

    		$('#selectFilter').removeClass('list');
			$('#selectFilter').addClass('grid');

			$('#selectPager').removeClass('list');
			$('#selectPager').addClass('grid');

			$('#page_active').removeClass('list');
			$('#page_active').addClass('grid');
			
			
    	}
    	if(view=="list"){
    		$('#grid').removeClass('active');
			$('#list').addClass('active');

			$('#selectFilter').removeClass('grid');
			$('#selectFilter').addClass('list');

			$('#selectPager').removeClass('grid');
			$('#selectPager').addClass('list');

			$('#page_active').removeClass('grid');
			$('#page_active').addClass('list');
    	}
    	if($("#grid").className=="active"){
    		views="grid";
    	}
    	if($("#list").className=="active"){
    		views="list";
    	}
      $.get('<?php echo Yii::$app->homeUrl; ?>product/filter-listbook?url='+url+'&status='+ status+'&id='+id+'&page='+pager+'&view='+views+'&num_page='+num_page,  function(data) {
	         $('#content-column').html(data);
	    });
    }

// caroulser
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (next.length==6) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<6;i++) {
    next=next.next();
    
    
    next.children(':first-child').clone().appendTo($(this));
  }
});

//login google
function signinCallback(authResult) {
  if (authResult['status']['signed_in']) {
    // Update the app to reflect a signed in user
    // Hide the sign-in button now that the user is authorized, for example:
    document.getElementById('signinButton').setAttribute('style', 'display: none');
  } else {
    // Update the app to reflect a signed out user
    // Possible error values:
    //   "user_signed_out" - User is signed-out
    //   "access_denied" - User denied access to your app
    //   "immediate_failed" - Could not automatically log in the user
    console.log('Sign-in state: ' + authResult['error']);
  }
}

</script>
</body>
</html>
<?php $this->endPage() ?>
