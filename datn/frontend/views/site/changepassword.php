<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use yii\widgets\MaskedInput;


$this->title = 'Thay đổi thông tin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kf_content_wrap">
    <div class="container" style="border: 1px solid #e3e3e3;border-radius: 3px;margin-bottom: 30px;">
        <div style="border-bottom: 1px dashed #e3e3e3;height: 30px;"><h3 class="titleInfor" style="margin-top: 30px">Thông tin cá nhân</h3></div>
        <div style="margin: 13px 0px;"><span style="color: #707070;font-size: 30px">Xin chào bạn </span><span style="color: #CA3037; font-size: 37px"><?= Yii::$app->user->identity->username;?></span></div>
        <?php $form = ActiveForm::begin([
            'id'=>'changepassword-form',
            'options'=>['class'=>'form-horizontal'],

            
        ]); ?>
            <input type="text" name="user" value="chose" style="display: none" /><!--dùng để tắt comfirm của firefox khi thay đổi mật khẩu-->
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Họ và tên<span class="red">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'username')->textInput()->label(false)?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Email<span class="red">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'email')->textInput()->label(false)?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <label>Số điện thoại</label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'phone')->textInput()->label(false)?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Địa chỉ</label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'address')->textInput()->label(false)?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Ngày sinh<span class="red">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                                  'options' => ['placeholder' => 'yyyy-mm-dd'],
                                  'pluginOptions' => [
                                      'autoclose'=>true,
                                      'format' => 'yyyy-mm-dd',
                                  ],
                                  
                              ])->label(false); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Giới tính</label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model, 'gender')->inline()->radioList([1 => 'Nam', 0 => 'Nữ'], ['separator' => '', 'tabindex' => 3])->label(false)?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <span class="red" style="font-size: 16px;margin: 20px 0">Bạn có thể thay đổi mật khẩu</span>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Mật khẩu<span class="red">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'oldpass',['inputOptions'=>['placeholder'=>'Old Password']])->passwordInput()->label(false)?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Mật khẩu mới<span class="red">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'newpass',['inputOptions'=>['placeholder'=>'Mật khẩu mới']])->passwordInput()->label(false)?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <label>Xác nhận mật khẩu<span class="red">*</span></label>
                        </div>
                        <div class="col-md-7">
                            <?= $form->field($model,'repeatnewpass',['inputOptions'=>['placeholder'=>'Xác nhận mật khẩu']])->passwordInput()->label(false)?>
                        </div>
                    </div>
                </div>
            

           
            <div class="form-group">
                <div class="col-lg-offset-11 col-lg-11">
                    <?= Html::submitButton('Lưu',[
                        'class'=>'btn btn-primary'
                    ]) ?>
                </div>
            </div>
            
        <?php ActiveForm::end(); ?>
    </div>
  
</div>