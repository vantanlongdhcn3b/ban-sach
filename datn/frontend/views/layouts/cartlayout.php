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
		<?= Breadcrumbs::widget([
	          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	      ]) ?>
	      <?= Alert::widget() ?>
			<?= $content ?>
			
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
    <!--modal shopping cart-->
    <div class="modal fade" id="shoppingcart" tabindex="-1" role="dialog">
	    <div class="modal-dialog">
	    	<div class="modal-content">
	    		<div class="modal-header">
	    			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    			<h4 class="modal-title">Shopping Cart</h4>
	    		</div>
	    		<div class="modal-body">
					<div id="contentCart"></div>
	    		</div>
	    		<div class="modal-footer">
	    			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    			<button type="button" class="btn btn-primary">Save changes</button>
	    		</div>
	    	</div> 
	    </div>
	</div>

<?php $this->endBody() ?>
<script type="text/javascript">



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
	function delItemCart(id){

		$('#cart-'+id).css({
			'display': 'none',
		});

		$.get('<?php echo Yii::$app->homeUrl; ?>shopping/delcart',{'id': id},  function(data) {
	         val=data.split("-");
	         $('#totalAmount').text(val[0]);
	         $('#total').text(val[1]);
	         $('#viewTotal').text('Tổng tiền: '+val[1])
	    });
	}

	//viết cho nút tăng giảm số lượng sản phẩm trong form giỏ hàng
	var idPro;
	var amount;
	i=0;
	function itemdown(id){
		i++;
		idPro=id;
		amount=parseInt($('#amount_'+id).val()) - 1;
		$('#amount_'+id).val(amount);
		updateCart(id, amount);

	}
	function itemup(id){
		amount=parseInt($('#amount_'+id).val()) + 1;
		$('#amount_'+id).val(amount);
		updateCart(id, amount);
	}

	function updateCart(id, amount){
		$.get('<?= Yii::$app->homeUrl?>shopping/updatecart?id='+id+'&amount='+amount, function(data) {
			$('#contentCheckout').html(data);
		});
	}
	 function deleteItem(id) {
	 	updateCart(id, 0)
	 }
</script>
</body>
</html>
<?php $this->endPage() ?>
