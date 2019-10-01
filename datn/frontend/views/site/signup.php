<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title">Đăng kí tài khoản</h4>
</div>
<div class="user-box">
    <!--FORM FIELD START-->
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="input-dec3">
            <div class="row">
                    <div class="col-lg-4">
                        Họ tên<span style="color: red"> *</span>
                    </div>
                    <div class="col-lg-8">
                        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'Họ tên'])->label(false) ?>
                    </div>
            </div>
            
        </div>
        <div class="input-dec3">
            <div class="row">
                    <div class="col-lg-4">
                        Email<span style="color: red"> *</span>
                    </div>
                    <div class="col-lg-8">
                        <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email'])->label(false) ?>
                    </div>
            </div>
        </div>
        <div class="input-dec3">
            <div class="row">
                    <div class="col-lg-4">
                        Mật khẩu<span style="color: red"> *</span>
                    </div>
                    <div class="col-lg-8">
                        <?= $form->field($model, 'password')->passwordInput(['value'=>"",'placeholder'=>'Mật khẩu'])->label(false) ?>
                    </div>
            </div>
        </div>
        <div class="input-dec3">
            <div class="row">
                    <div class="col-lg-4">
                        Xác nhận mật khẩu<span style="color: red"> *</span>
                    </div>
                    <div class="col-lg-8">
                        <?= $form->field($model, 'password_repeat')->passwordInput(['value'=>"",'placeholder'=>'Xác nhận mật khẩu'])->label(false) ?>
                    </div>
            </div>
        </div>
        <div class="dialog-footer">
            <div class="row">
                <div class="col-md-4">
                    

                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary dialog-button" onclick="checkSignup()">Đăng kí</button>
                    </div>
                </div>
            </div>
        </div>
          
    <?php ActiveForm::end(); ?>
    <!--FORM FIELD END-->
</div>
