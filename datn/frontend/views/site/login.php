<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\social\GooglePlugin;

?>
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title">Đăng nhập</h4>
    </div>
    <div class="user-box">
        <!--FORM FIELD START-->
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
         <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="input-dec3">
                <div class="row">
                    <div class="col-lg-3">
                        Email<span style="color: red"> *</span>
                    </div>
                    <div class="col-lg-9">
                        <?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder'=>'Email'])->label(false) ?>
                    </div>
                </div>
            </div>

            <div class="input-dec3">
                <div class="row">
                    <div class="col-lg-3">
                        Mật khẩu<span style="color: red"> *</span>
                    </div>
                    <div class="col-lg-9">
                        <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Mật khẩu'])->label(false) ?>
                    </div>
                </div>
            </div>
            <div class="input-dec3">
                <div class="row">
                <div class="col-lg-3"></div>
                    <div class="col-lg-5">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
                    <div class="col-lg-4">
                        <div style="color:#999;margin:1em 0">
                            <?= Html::a('Quên mật khẩu?', ['site/request-password-reset']) ?>
                        </div>
                    </div>
                </div>   
            </div>
            <div class="dialog-footer">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary dialog-button" onclick="checkLogin()">Đăng nhập</button>
                        
                    </div>
                </div>
                
            </div>
           
                
                
            </div>
        <?php ActiveForm::end(); ?>
      
        
                  
        <!--FORM FIELD END-->
    </div>
            

                

                

                

                

                

            
