<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Province */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(['id' => $model->isNewRecord ? 'form-create' : 'form-update']); ?>

    <?= $form->field($model, 'province_name')->textInput() ?>

    

    <div class="form-group">
        <?= $model->isNewRecord ?Html::button('Create',['class' =>'btn btn-success','onclick'=>'checkCreateProvince()']):Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
