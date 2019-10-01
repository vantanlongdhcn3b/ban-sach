<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Quên mật khẩu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kf_content_wrap" style="margin-top: 60px; padding: 0 20px">
    <div class="container">
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Nhập email của bạn, chúng tôi sẽ gửi gửi mật khẩu mới tới email của bạn</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</div>
</div>