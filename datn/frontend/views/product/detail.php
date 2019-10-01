<?php 

use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Feedback;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;
use kartik\social\FacebookPlugin;

// echo "<pre>";print_r($dataimage);die();

$this->title = $dataDetail['product_name'];
$cat=Category::find()->asArray()->where('cat_id=:id',['id'=>$dataDetail['cat_id']])->one();
if($cat['parent_id']!=0){
	$catParent=Category::findCatParent($cat['parent_id']);
	$this->params['breadcrumbs'][] = ['label' => $catParent['cat_name'], 'url' => ['index?id='.$catParent['cat_id']]];
}
$this->params['breadcrumbs'][] = ['label' => $cat['cat_name'], 'url' => ['listbook?id='.$cat['cat_id']]];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['detail?id='.$dataDetail['product_id']]];

?>
<div class="kf_content_wrap">
	<div class="product-detail1">
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<!--BOOK VIEW WRAP START-->
						<div class="book-view book-view2">
							<div class="row">
								<div class="col-md-4">
									<!--BOOK VIEW THUMB START-->
									<div class="thumb">
										<div class="thumb-slider">
											<div class="bx-wrapper" style="max-width: 100%;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 350px;">
												<ul class="" style="width: auto; position: relative;">

													<li>
														<img data-target="#bookPreview" onclick="openModalPreview(<?= $dataDetail['product_id']?>)" id="imgpro_before" src="<?php echo $dataDetail['image'];?>" title="<?php echo $dataDetail['product_name'];?>" alt="<?php echo $dataDetail['product_name'];?>" style="width: 240px;height: auto;margin-left: 7%">
														<a class="zoomer" href="javascript:void(0)"><i class="fa fa-arrows-alt"></i></a>
													</li>


												</ul>
											</div>
										</div>
										<?php 
										if($dataDetail['sale']>0){
											?>
											<div class="ribbon-wrap">
												<span class="ribbon">-<?php echo $dataDetail['sale'].'%' ?></span>
											</div>
											<?php } ?>      

										</div>
										<div id="bx-pager">
											<a href="javascript:void(0)" style="padding: 20px" ><img id="imgpro_after" onclick="changeImage(src)" src="<?php echo $dataDetail['image_after'];?>" title="click để xem mặt sau" alt="<?php echo $dataDetail['product_name'];?>"></a>
										</div>
									</div>
									<!--BOOK VIEW THUMB END-->
								</div>
								<div class="col-md-8">
									<!--BOOK TEXT START-->
									<div class="book-text">
										<!--BOOK HEADING START-->
										<div class="book-heading book-padding">
											<h1 class="titlePro"><?php echo $dataDetail['product_name']; ?></h1>
											<div class="author-pro">
												Tác giả:<a href="javascript:;"><?php echo $dataDetail['author_name']; ?></a>
												<label>Nhà xuất bản:</label><span><?php echo $dataDetail['publisher_name']; ?></span>
												Nhà phát hành:<a href="javascript:;"><?php echo $dataDetail['supplier_name']; ?></a>
											</div>

											<div class="book-review">
											<div class="row">
												<div class="col-md-3">
													<?php 
													echo StarRating::widget([
													    'name' => 'rating',
													    'value' =>$AVG ,
													    'pluginOptions' => [
													    'displayOnly' => true,
													    
	    												'size' => '14px',
	    												]
													]); 
													?>
												</div>
												<div class="col-md-9">
													<ul class="blog-meta">
													<li><a href="javascript:;" onclick="scrollToElm($('#comment'),'#tab-comment','#tab-desc','#tab-detail')"><?php echo count($dataFeed); ?> Đánh giá </a></li>
													<li><a href="javascript:;" onclick="scrollToElm($('#comment'),'#tab-comment','#tab-desc','#tab-detail')"><i class="fa fa-star" aria-hidden="true"></i>  Thêm đánh giá của bạn</a></li>
												</ul>
												</div>
												
											</div>
												
												
											</div>
										</div>
										<!--BOOK HEADING END-->
										<!--BOOK DESCRIPTION START-->
										<div class="book-description book-padding">
											<span>Giới thiệu</span>
											<?php echo $dataDetail['descript_short']; ?><a class="ahover " href="javascript:void(0)" onclick="scrollToElm($('#full-description'),'#tab-desc','#tab-detail','#tab-comment')">Xem chi tiết</a>

										</div>
										<!--BOOK DESCRIPTION END-->

										<div class="wishlist2 book-padding">
											<ul>
												<li>
												<i id="iconwish_<?php echo $dataDetail['product_id']; ?>" class="icon-heart" onclick="WishlistCart(<?= $dataDetail['product_id']?>)"></i>
												<a href="javascript:void(0)" onclick="WishlistCart(<?= $dataDetail['product_id']?>)">Yêu thích</a>
												</li>
												
											</ul>
										</div>
										<!--BOOK WISHLIST 2 END-->
										<!--BOOK TAGS START-->
										<div class="book-tags-wrap book-padding">
											
											<ul class="social-1">
												<li>
													<?php 
													echo FacebookPlugin::widget(['type'=>FacebookPlugin::LIKE, 'settings' => ['size'=>'small']]);
													echo FacebookPlugin::widget(['type'=>FacebookPlugin::SHARE, 'settings' => ['size'=>'small', 'layout'=>'button_count', 'mobile_iframe'=>'false']]);
													 ?>
												</li>
											</ul>
										</div>
										<!--BOOK TAGS END-->
									</div>
									<!--BOOK TEXT END-->
								</div>
							</div>
						</div>
						<!--BOOK VIEW WRAP END-->
					</div>
					<aside class="col-md-3">
						<!--widget thanh toán-->
						<div class="widget widget-featured">
							<!--WIDGET HEADING START-->
							<div class="aside-widget-hd">
								<h5>Thông tin thanh toán</h5>
							</div>
							<!--WIDGET HEADING END-->
							<div class="widget-padding" style="background-color: #fff">
								<!--FEATURED 3 START-->
								<div class="">
									<div class="row" style="margin-right: 0px;margin-left: 0px;">

										<?php 
										$ban=$dataDetail['price_out']*(100-$dataDetail['sale'])/100;
										$tietkiem=$dataDetail['price_out']- $ban;
										?>
										<div class="col-md-12">
											<div class="col-md-5">Giá bìa: </div>
											<div class="col-md-7" style="float: right;">
												<del style="float:right"><?php echo number_format($dataDetail['price_out'],0,"",".") ." đ";?> </del>
											</div>

										</div>

										<div class="col-md-12">
											<div class="col-md-5">Giá bán: </div>
											<div class="col-md-7">
												<span style="color: #FF0000;float:right"><?php echo number_format($ban,0,"",".")." đ";?></span>
											</div>

										</div>

										<div class="col-md-12">
											<div class="col-md-5">Tiết kiệm: </div>
											<div class="col-md-7">
												<span style="color: #1ABC9C;float:right"> <?php echo number_format($tietkiem,0,"",".")." đ (".$dataDetail['sale']."%)";?></span>
											</div>
										</div>
										<div class="col-md-12">
											<?php 
											if($dataDetail['qty']>0){
												?>
												<span class="">
													<i class="fa fa-check-circle" aria-hidden="true" style="color: blue;font-size: 20px;margin-left:60%;">Có hàng</i>
												</span>
												<?php }elseif($dataDetail['qty']>0 && $dataDetail['qty']<=10){

													?>
													<span class="qty-in-stock">
														<i class="fa fa-exclamation" aria-hidden="true" style="color: red; font-size: 20px;margin-left:60%;">Sắp hết hàng</i>
														<i>Chỉ còn <?= $dataDetail['qty']?> sản phẩm</i>
													</span>
													<?php }
													else{ ?>
													<span class="qty-in-stock">
														<i class="fa fa-times-circle" aria-hidden="true" style="color: red; font-size: 20px;margin-left:60%;">Hết hàng</i>
													</span>
													<?php  } ?>
												</div>
											</div>

										</div>

										<div class="book-quantity">

											<a class="cart-3" href="javascript:void(0)" onclick="addCart(<?= $dataDetail['product_id']?>)"><i class="icon-shopping-cart"></i>Mua ngay</a>
										</div>

									</div>
								</div>
							</aside>
						</div>
						<!--BOOK TABS 2 WRAP START-->
						<div class="book-tabs2">
							<div class="" data-spy="affix" data-offset-top="1000">
								<ul class="books-tab">
									<li class="active" id="tab-desc"><a href="javascript:void(0)"  onclick="scrollToElm($('#full-description'),'#tab-desc','#tab-detail','#tab-comment')" >Giới thiệu sách</a></li>
									<li class="" id="tab-detail"><a href="javascript:void(0)"  onclick="scrollToElm($('#detail'),'#tab-detail','#tab-comment','#tab-desc');">Thông tin chi tiết</a></li>
									<li class="" id="tab-comment"><a href="javascript:void(0)"  onclick="scrollToElm($('#comment'),'#tab-comment','#tab-desc','#tab-detail');">Đánh giá và bình luận</a></li>
								</ul>
							</div>
							<div class="tab-content" id="full-description">
								<div  class=" description">
									<div class="book-return return-desc">
										<h5><?php echo $dataDetail['product_name']; ?></h5>
										<div class="widget widget-featured infor-author">
											<!--WIDGET HEADING START-->
											<div class="aside-widget-hd">
												Thông tin tác giả
											</div>
											<!--WIDGET HEADING END-->
											<div class="widget-padding" style="background-color: #fff">
												<!--FEATURED 3 START-->
												
													<div class="row desc-author" style="margin-right: 0px;margin-left: 0px;">
														<div class="col-md-12">
															
															<a href="<?= Yii::$app->homeUrl.'product/author/'.$dataDetail['author_id']?>" class="ahave blue" style="float: left;"><?php echo $dataDetail['author_name']; ?></a>
														</div>
														<div class="col-md-12">
															<img src="<?= $dataDetail['author_img']?>" style="width: 80px;height: auto;float: right;">
															<?php echo $dataDetail['author_desc']; ?>
														</div>
														<div class="col-md-12">
															<a href="<?= Yii::$app->homeUrl.'product/author/'.$dataDetail['author_id']?>" class="ahave blue">
															<i class="fa fa-angle-double-right" aria-hidden="true"></i>
															Vào trang riêng của tác giả</a>
															
														</div>
														<div class="col-md-12">
														<a href="<?= Yii::$app->homeUrl.'product/author/'.$dataDetail['author_id']?>" class="ahave blue">
															<i class="fa fa-angle-double-right" aria-hidden="true"></i>
															Xem tất cả sách của tác giả</a>
														</div>
													</div>
												</div>
											</div>
										<?php echo $dataDetail['description']; ?>
										
									</div>
								</div>
								<div  class="description" id="detail" style="width: 100%;margin-bottom: 50px">
									<h5 style="margin-bottom: 20px">Thông tin chi tiết</h5>
									<div class="book-return">
										<div class="row detail">
											<div class="col-md-5">
												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Tác giả:</span>        
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['author_name']; ?></span>  
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Nhà phát hành:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['supplier_name']; ?></span>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Khối lượng:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['weight']; ?></span>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Định dạng:</span>
													</div>
													<div class="col-md-6">
														<span>Bìa mềm</span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Ngày phát hành:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['date_release']; ?></span>
													</div>
												</div>


												<!--BLOG META 3 END-->
											</div>
											<div class="col-md-2"></div>
											<div class="col-md-5">
												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Nhà xuất bản:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['publisher_name']; ?></span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Mã sản phẩm:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['barcode']; ?></span>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Ngôn ngữ:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['language']; ?></span>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Kích thước:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['size']; ?></span>
													</div>
												</div>

												<div class="row">
													<div class="col-md-6">
														<i class="fa fa-minus"></i><span>Số trang:</span>
													</div>
													<div class="col-md-6">
														<span><?php echo $dataDetail['qty_page']; ?></span>
													</div>
												</div>

											</div>
										</div>

									</div>
									<!--BOOK RETURN WRAP END-->
								</div>
								<div  class="description" id="comment">
									<!--COMMENTING WRAP START-->
									<div class="commenting-wrap-1 cutomer-reviews">
										<!--HEADING 1 START-->
										<h3>Nhận xét từ khách hàng</h3>
										<!--HEADING 1 END-->
										<ul>
										<?php foreach ($dataFeed as $keyFeed => $valueFeed){?>
											<li>
												<!--COMMENTING DEC START-->
											<div class="commenting-dec">
												<div class="row">
													<div class="col-md-1">
														<?php 
														Yii::setAlias('@web',Yii::$app->homeUrl.'frontend/web');
														$src="";
														if($valueFeed['avata']!="")$src=$valueFeed['avata'];else  $src=Yii::getAlias('@web').'/images/defaultavata.png'; ?>
														<img src="<?php echo $src;?>" alt="">
													</div>
													<div class="col-md-7">
														<div class="row">
															
															<div class="col-md-12">
																<div class="text">
																	<div class="commenting-hd">
																		<h5><a href="javascript:;" style="color: #087B44"><?php echo $valueFeed['username']; ?></a></h5>
																		
																	</div>
																	<strong><?php echo $valueFeed['title']; ?></strong>
																	<p><?php echo $valueFeed['comment']; ?></p>
																	<p><a class="ahover" style="color: #087B44" href="javascript:;">Trả lời của bạn về đánh giá này,</a> đã có 0 phản hồi</p>
																</div>
															</div>
															<div class="col-md-12 insert-sub-cmt">


															</div>
														</div>
														
														
													</div>
													<div class="col-md-4">
														<div class="row">
															<div class="col-md-12 rowcheckout " style="text-align: right;">
																<p><?php echo date('d/m/Y H:i:s',$valueFeed['created_at']); ?></p>
															</div>
															<div class="col-md-12" style="text-align: right;">
																<?php 
																echo StarRating::widget([
																    'name' => 'rating',
																    'value' =>$valueFeed['rating'] ,
																    'pluginOptions' => [
																    'displayOnly' => true,
																    'step' => 1,
			        												'size' => '14px',
			        												]
																]); 
																?>
															</div>
															
														</div>
													</div>

												</div>

												
											</div>
												<!--COMMENTING DEC END-->
											</li>

										<?php } ?>
										</ul>
									</div>
									
									<!--COMMENTING WRAP END-->
									<!--CONTACT US WRAP START-->
									
									<div class="contact-wrap cutomer-reviews">
										
										
											<div class="row">
											
												<div class="col-md-7">
												<?php 
												if(Yii::$app->user->isGuest){
													?>
													<div class="col-md-12"><span>Đăng nhập để gửi nhận xét của Bạn</span></div>
													<div class="col-md-12">
														<div class="row">
															<div class="col-md-3">
																<a   href="javascript:void(0)" onclick="openLogin()" data-toggle="modal" data-target="#signin-box"><button class="btn btn-success" style="width:100%;color: #fff;padding: 10px 0px"><i class="fa fa-sign-in"></i>   Đăng nhập</button></a>
															</div>
															<div class="col-md-9">
																<span>Bạn chưa có tài khoản?<br/>Hãy   <a class="ahave blue" href="javascript:void(0)" onclick="openSignup()" data-toggle="modal" data-target="#reg-box">Đăng kí</a></span>
															</div>
														</div>
														
														
													</div>
												<?php } 
												else{
											 	?>
													<div class="row">
													<?php $form = ActiveForm::begin();
													$modelFeed = new Feedback();
													?>
													
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-2"><label>Tiêu đề:</label></div>
																<div class="col-md-10">
																	<?=$form->field($modelFeed, 'title')->textInput()->label(false)?>
																</div>
															</div>
														</div>
														<div class="col-md-12">
															<div class="row">
																<div class="col-md-4"><label>Đánh giá của bạn:</label></div>
																<div class="col-md-8">
																	<?=
																	 StarRating::widget([
																	'model' =>$modelFeed,
																    'name' => 'rating',
																    'attribute' => 'rating',
																    'pluginOptions' => [
																    'showClear' => false,
        															'showCaption' => false,
																    'step' => 1,
			        												'size' => 'xs',
			        												'min' => 0,
        															'max' => 5,
			        												]
																]); 
																?>
																 </div>
															</div>
														</div>
														<div class="col-md-12">
															
															<?= $form->field($modelFeed, 'comment')->textarea(['rows' => 6]) ?>
															
														</div>
														<div class="col-md-12">
															<div class="form-group">
															    <?= Html::submitButton('Gửi đánh giá', ['class' =>  'btn btn-success']) ?>
															</div>
															
														</div>

														<?php ActiveForm::end(); ?>
													</div>
												<?php } ?>	
												</div>
												
												<div class="col-md-5">
													
													
												</div>

											</div>
											
									</div>
									<div class="row">
									<h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">
										Bình luận từ Facebook
									</h4>
										<?php echo FacebookPlugin::widget(['appId'=>'216084928883683']); ?>
									</div>
									
									<!--CONTACT US WRAP END-->
								</div>
							</div>


						</div>
						<!--BOOK TABS 2 WRAP END-->
					</div>
				</div>
				<section>
					<div class="container">
						<div class="heading-inner">
							<h2>Related Books</h2>
							<span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euis</span><span>mod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span>
						</div>
						<!--BOOK RELATED START-->
						<div class="tabs-slider-wrap tabs-slider-wrap6">
							<div class="owl-carousel owl-theme" id="tabs-slider7" style="opacity: 1; display: block;">
								<!--BOOK DEC START-->
								<div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2280px; left: 0px; display: block; transition: all 1000ms ease 0s; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 285px;"><div class="item">
									<div class="book-tab-dec">
										<figure>
											<img src="extra-images/bookstore27.jpg" alt="">
											<figcaption class="ribbon-wrap">
												<span class="ribbon">Sale</span>
											</figcaption>
										</figure>
										<div class="text">
											<small>Fiction</small>
											<h5><a href="#">Spells</a></h5>
											<span class="price-tag red">
												<del> $350.00 </del>
												<sub>$</sub>230.00
											</span>
											<a class="add-cart" href="#">Mua Ngay</a>
										</div>
									</div>
								</div></div><div class="owl-item" style="width: 285px;"><div class="item">
								<div class="book-tab-dec">
									<figure>
										<img src="extra-images/bookstore28.jpg" alt="">
										<figcaption class="ribbon-wrap">
											<span class="ribbon">Sale</span>
										</figcaption>
									</figure>
									<div class="text">
										<small>Romance</small>
										<h5><a href="#">By The Time You Read</a></h5>
										<span class="price-tag red">
											<del> $350.00 </del>
											<sub>$</sub>58.00
										</span>
										<a class="add-cart" href="#">Mua ngay</a>
									</div>
								</div>
							</div></div><div class="owl-item" style="width: 285px;"><div class="item">
							<div class="book-tab-dec">
								<figure>
									<img src="extra-images/bookstore29.jpg" alt="">
									<figcaption class="ribbon-wrap">
										<span class="ribbon new">Sale</span>
									</figcaption>
								</figure>
								<div class="text">
									<small>Non Fiction</small>
									<h5><a href="#">You Are Not Here</a></h5>
									<span class="price-tag black">
										<sub>$</sub>58.00
									</span>
									<a class="add-cart" href="#">Mua ngay</a>
								</div>
							</div>
						</div></div><div class="owl-item" style="width: 285px;"><div class="item">
						<div class="book-tab-dec">
							<figure>
								<img src="extra-images/bookstore30.jpg" alt="">
							</figure>
							<div class="text">
								<small>Inspiration</small>
								<h5><a href="#">And Then I Found Out</a></h5>
								<span class="price-tag black">
									<sub>$</sub>99.00
								</span>
								<a class="add-cart" href="#">Mua ngay</a>
							</div>
						</div>
					</div></div></div></div>

					<div class="owl-controls clickable" style="display: none;"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div></div></div></div>
				</div>
				<!--BOOK RELATED END-->
			</div>
		</section>
	</div>
	<!--TRACKING BAR START-->
	<div class="tracking-bar">
		<div class="container">
			<div class="text">
				<i class="icon-clock"></i>
				<h3>Where is my order/shipment?</h3>
			</div>
			<div class="text2">
				<div class="input-text">
					<input placeholder="Email id" type="text">
				</div>
				<div class="input-text">
					<input placeholder="Purchase id" type="text">
				</div>
				<a class="track" href="#">TRACK MY ORDER</a>
			</div>
		</div>
	</div>
	<!--TRACKING BAR END-->
</div>

<?php 
 
