<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;

use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\OrderIn */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-in-form">
    <div class="row">
        <div class="col-md-7">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'product_id')->textInput() ?>

            <?= $form->field($model, 'price_in')->textInput() ?>

            <?= $form->field($model, 'qty')->textInput(['type'=>'number']) ?>

            <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

            <?= $form->field($model, 'user_create')->textInput(['value'=>Yii::$app->user->identity->username,'readonly'=>true]) ?>
        </div>
    </div>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
