<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use frontend\models\Order;
use frontend\models\Payment;
use frontend\models\Transport;
use yii\helpers\ArrayHelper;
use kartik\social\GooglePlugin;


use frontend\common\Cart;
$Cart=new Cart();

$this->title="Thanh toán";

 ?>
<?php 
if (!Yii::$app->user->isGuest) {?>
<div class="kf_content_wrap" >
	
	<div class="container-fluid" style="background: #F6F6F6">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="<?= Yii::$app->homeUrl?>">
	    				<img class="icon-logo" src="<?php echo Yii::$app->homeUrl; ?>source/LOGO.png" alt=""/>
	    			</a>
				</div>
				<div class="col-md-6">
					
				</div>
			</div>
		</div>
	</div>
	<div class="check-out">
			<div class="container">
				<div id="contentCheckout">
					<div class="row">
					<div class="panel panel-default">
					  <div class="panel-heading classfont" style="color:#fff;font-size: 20px;height: 50px;background-color: #1ABC9C">
					  		<i class="icon-shopping-cart"></i>  Xem giỏ hàng
					  </div>
					  <div class="panel-body">
					  	<div class="col-md-12 col-sm-12" >
						<div class="order-table">
							<div class="order-hd">
								<table class="tbody" style="font-size: 15px">
									<tbody>	
									<?php 
									foreach ($cart as $key => $value) {
									 ?>
										<tr>
											<td class="product-img"><img src="<?php echo $value['image']?>"></td>
											<td class="produt-name classfont" style="font-size: 16px"><?php echo $value['product_name']?></td>
											<td class="produt-price">
												<span class="">
													<?php echo number_format($value['price'],0,"",".").' đ';?>
												</span>
											</td>
											<td class="produt-quantity">
												<div class="input-stepper">
													<button data-input-stepper-decrease="" onclick="itemdown(<?= $key?>)">-</button>
													<input type="text" id="amount_<?php echo $key;?>" name="amount_<?php $key;?>" value="<?php echo $value['amount'];?>">
													<button data-input-stepper-increase="" onclick="itemup(<?= $key?>)">+</button>
												</div>
											</td>
											<td class="produt-total">
												<span class="blue">
													<?php echo number_format($value['price']*$value['amount'],0,"",".").' đ';?>
												</span>
											</td>
											<td class="product-del"><span class="icon-del"><i class="fa fa-trash-o" title="click để xóa giỏ hàng" aria-hidden="true" style="font-size: 26px;color: #1ABC9C" onclick="deleteItem(<?= $key?>)"></i></span></td>
										</tr>
										
									<?php } ?>
									</tbody>
								</table>
								<div class="row">
									<div class="col-md-12">
										<ul class="sub-total" >
											<li>
											<span style="color: #000">Tổng tiền tạm tính:</span>
												<span class="price-tag black" style="font-size: 18px; color: #">
													<?php echo number_format($total,0,"",".").' đ'; ?>
												</span>
											</li>
											<li>
												Bằng chữ:
												<span class="price-tag" style="color: #000;font-size: 16px">
													<i><?php

													 echo $Cart->convert_number_to_words($total).' đồng';
													 ?></i>
												</span>
											</li>
											
										</ul>
									</div>
								</div>
							</div>

						</div>
					</div>
					  </div>
					</div>
				</div>
				</div>
				
				<?php $form = ActiveForm::begin(); ?>
				<div class="row " style="margin-top: 30px">
					<div class="panel panel-default">
					  <div class="panel-heading classfont" style="color:#fff;font-size: 20px;height: 50px;background-color: #1ABC9C">
					  <i class="fa fa-check-square-o" aria-hidden="true"></i>  Thanh toán đơn hàng
					 
					  </div>

					  <div class="panel-body">
					  		<div class="col-md-7 col-sm-7" style="border-right: 1px solid #ccc;font-size: 15px">
					  		<h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">Thông tin giao hàng</h4>
							
								<div class="row">
									<div class="col-md-3 classfont"><span>Họ tên<small class="red">*</small></span></div>
									<div class="col-md-9">
											<?= $form->field($model, 'username')->textInput(['placeholder'=>'Họ tên'])->label(false) ?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3 classfont"><span>Email<small class="red">*</small></span></div>
									<div class="col-md-9">
											<?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3 classfont"><span>Điện thoại<small class="red">*</small></span></div>
									<div class="col-md-9">
											<?= $form->field($model, 'mobile')->textInput(['placeholder'=>'Điện thoại'])->label(false) ?>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3 classfont"><span>Địa chỉ<small class="red">*</small></span></div>
									<div class="col-md-9">
											<?= $form->field($model, 'address')->textArea(['placeholder'=>'vd: 33/37 ngõ 194 đường Đội Cấn quận Ba Đình, Hà Nội','row'=>6])->label(false) ?>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 classfont"><span>Ghi chú cho đơn hàng<small class="red">*</small></span></div>
									<div class="col-md-8">
											<?= $form->field($model, 'request')->textArea(['placeholder'=>'','row'=>6])->label(false) ?>
									</div>
								</div>
							</div>
							<div class="col-md-5 row">
								<h4 class="title-book" style="border-bottom: dashed 1px #ccc; padding: 10px">Hình thức thanh toán</h4>
								<div class="col-md-12">
									<div class="order-payment">
										<?php
										$payment = ArrayHelper::map(Payment::getAllPayment(), 'payment_id', 'payment_name');
										echo $form->field($model, 'payment_id')->radioList($payment)->label(false) ?>
									</div>
								</div>
							</div>
							

					  </div>
					</div>

				</div>
				<div class="row">
					<div class="col-md-8">
						<a href="<?= Yii::$app->homeUrl?>" style="float: right;" class="blue ahover"><i style="font-size: 22px; margin-right: 6px" class="fa fa-angle-left" aria-hidden="true"></i>Tiếp tục mua hàng</a>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<?= Html::submitButton('Thanh toán',['class' => 'btn btnTT','style'=>'float:right;width:60%;float:right;background-color:#ffc705;height:60px;font-size:18px']) ?>
							    </div>
							<?php ActiveForm::end(); ?>
							</div>
					</div>
				</div>
				
		
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

<?php }
else{
?>
<div class="kf_content_wrap">
	<div class="container">
		<div class="col-md-6">
			<div class="modal-dialog login1 login5 login5-1">
				<div class="modal-tab">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#sign-In1" aria-controls="sign-In1" role="tab" data-toggle="tab" aria-expanded="true">Đăng nhập</a></li>
						<li role="presentation" class=""><a href="#sign-up2" aria-controls="sign-up2" role="tab" data-toggle="tab" aria-expanded="false">Đăng kí</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="sign-In1">
							<div class="modal-content">
								<div class="user-box">
									<!--FORM FIELD START-->
									<?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
										<div class="input-dec3">
											<div class="row">
							                    <div class="col-lg-3">
							                        Email<span style="color: red"> *</span>
							                    </div>
							                    <div class="col-lg-9">
							                        <?= $form->field($modelLogin, 'email')->textInput(['autofocus' => true,'placeholder'=>'Email'])->label(false) ?>
							                    </div>
							                </div>
										</div>
										<div class="input-dec3">
											<div class="row">
							                    <div class="col-lg-3">
							                        Mật khẩu<span style="color: red"> *</span>
							                    </div>
							                    <div class="col-lg-9">
							                        <?= $form->field($modelLogin, 'password')->passwordInput(['placeholder'=>'Mật khẩu'])->label(false) ?>
							                    </div>
							                </div>
										</div>
										<div class="dialog-footer">
											<div class="input-container">
												<label>
													<?= $form->field($modelLogin, 'rememberMe')->checkbox() ?>
												</label>
												<?= Html::a('Quên mật khẩu?', ['site/request-password-reset']) ?>
											</div>
											<div class="row">
								                <div class="col-md-3">
								                									                </div>
								                <div class="col-md-6">
								                    <div class="form-group">
									                    <div class="form-group">
										                    <?= Html::submitButton('Đăng nhập', ['class' => 'dialog-button', 'name' => 'login-button']) ?>
										                </div>
									                </div>
								                </div>
								                <div class="col-md-3"></div>
								            </div>
										</div>
									<?php ActiveForm::end(); ?>
									Hoặc đăng nhập bằng <?= yii\authclient\widgets\AuthChoice::widget([
								                         'baseAuthUrl' => ['site/auth']
								                	]) ?>
								    <?php 
								 //    echo GooglePlugin::widget([
									// 'type'=>GooglePlugin::SIGNIN, 
									// 'tag'=>'span', 
									// 'signinOptions'=>['id'=>'signinButton'],
									// 'settings' => [
									//     'callback'=>'signinCallback',
									//     'cookiepolicy' => 'single_host_origin',
									//     'requestvisibleactions' => 'http://schemas.google.com/AddActivity',
									//     'scope'=>'https://www.googleapis.com/auth/plus.login'
									// ]
									// ]);
								     ?>           	
									<!--FORM FIELD END-->
								</div>
							</div>   
						</div>
						<div role="tabpanel" class="tab-pane" id="sign-up2">
							<div class="modal-content">
								<div class="user-box">
									<!--FORM FIELD START-->
									<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
										<div class="input-dec3">
											<div class="row">
								                    <div class="col-lg-4">
								                        Họ tên<span style="color: red"> *</span>
								                    </div>
								                    <div class="col-lg-8">
								                        <?= $form->field($modelSignup, 'username')->textInput(['autofocus' => true,'placeholder'=>'Họ tên'])->label(false) ?>
								                    </div>
								            </div>
										</div>
										<div class="input-dec3">
											<div class="row">
								                    <div class="col-lg-4">
								                        Email<span style="color: red"> *</span>
								                    </div>
								                    <div class="col-lg-8">
								                        <?= $form->field($modelSignup, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>
								                    </div>
								            </div>
										</div>
										<div class="input-dec3">
								            <div class="row">
								                    <div class="col-lg-4">
								                        Mật khẩu<span style="color: red"> *</span>
								                    </div>
								                    <div class="col-lg-8">
								                        <?= $form->field($modelSignup, 'password')->textInput()->passwordInput(['value'=>"",'placeholder'=>'Mật khẩu'])->label(false) ?>
								                    </div>
								            </div>
								        </div>
								        <div class="input-dec3">
								            <div class="row">
								                    <div class="col-lg-4">
								                        Xác nhận mật khẩu<span style="color: red"> *</span>
								                    </div>
								                    <div class="col-lg-8">
								                        <?= $form->field($modelSignup, 'password_repeat')->passwordInput(['value'=>"",'placeholder'=>'Xác nhận mật khẩu'])->label(false) ?>
								                    </div>
								            </div>
								        </div>
										<div class="dialog-footer">
											<div class="row">
								                <div class="col-md-4"></div>
								                <div class="col-md-6">
								                    <div class="form-group">
									                    <?= Html::submitButton('Đăng kí', ['class' => 'dialog-button', 'name' => 'signup-button']) ?>
									                </div>
								                </div>
								                <div class="col-md-2"></div>
								            </div>
											
											
										</div>
									<?php ActiveForm::end(); ?>
									<!--FORM FIELD END-->
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
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
		<aside class="col-md-4">
			<div class="widget widget-featured widget-inforcart" style="margin-top: 30px;">
				
				<div class="aside-widget-hd">
					<h5>Thông tin đơn hàng</h5>
				</div>
				<!--WIDGET HEADING END-->
				<div class="widget-padding" style="background-color: #fff">
					<?php 
						foreach ($cart as $key => $value) {
						 ?>
						<div class="row" style="margin-right: 0px;margin-left: 0px;">

							<div class="col-md-12">
								<div class="col-md-4"><a href="<?= Yii::$app->homeUrl.'product/detail/'.$value['product_id']?>"><img src="<?php echo $value['image']?>"></a></div>
								<div class="col-md-8">
									<a class="a-infoCat" href="<?= Yii::$app->homeUrl.'product/detail/'.$value['product_id']?>"><?php echo $value['product_name'];?></a>
								<div class="col-md-12"><span class="red"><?= number_format($value['price']).' đ' ?></span></div>
								<div class="col-md-12"><span>Số lượng:<?= $value['amount'] ?></span></div>
									
								</div>

								
									

							</div>
						</div>
						<?php } ?>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-10" style="border-top: 1px dashed #ccc">
								Tổng cộng: <span class="red"><?= number_format($total).' đ'?></span>
							</div>
						</div>

				</div>
			</div>
		</aside>
	</div>
</div>
<?php } ?>