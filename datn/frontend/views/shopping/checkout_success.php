<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;


$this->title = 'Thanh toán thành công';
?>
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
<div class="kf_content_wrap" style="margin: 50px 0;">
    <div class="container" style="border: 1px solid #e5e5e5;border-radius: 5px;margin-bottom: 30px;">
        <div style="margin: 15px 0px;"><span style="color: #000;font-size: 20px;font-weight: bold;">ĐẶT HÀNG THÀNH CÔNG</div>
        CẢM ƠN BẠN ĐÃ ĐẶT HÀNG VỚI HỆ THỐNG CỦA CHÚNG TÔI <br/>
        Mã đơn hàng của bạn là: #<?= $modelOrder->order_id;?> <br/>
        Chúng tôi đã gửi thông tin đơn hàng về mail của bạn là  <a class="blue ahover" href="<?= $modelOrder->email?>"><?= $modelOrder->email?> </a><br/>
        Nếu có bất kì thắc mắc nào liên quan đến dịch vụ vui lòng liên hệ Hotline: <a href="javascript:;" class="blue ahover">0975 738 903</a> <br/>
        Xin chân thành cảm ơn!!

        <a href="<?= Yii::$app->homeUrl?>" style="float: right;" class="blue ahover"><i style="font-size: 22px; margin-right: 70px" class="fa fa-angle-left" aria-hidden="true"></i>Tiếp tục mua hàng</a>

    </div>
  
</div>