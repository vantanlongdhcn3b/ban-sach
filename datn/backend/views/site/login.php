<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Đăng nhập';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true,'placeholder'=>"Email"]) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' =>"Mật khẩu"]) ?>
                <div class="row">

                <div class="col-lg-6"><?= $form->field($model, 'rememberMe')->checkbox() ?></div>
                
                <div class="col-lg-6">
                    <a href="forgot-password-full.html" id="login-forget-link" class="col-xs-12">
                Quên mật khẩu?
                </a>
                </div>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>


            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
