<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    
    <?= $form->field($model, 'cat_id')->textInput() ?>

    <div class="row">
      <div class="col-lg-12">
        <img src="" id="preview_image_banner">
      </div>
      <div class="col-lg-8" >
        <?= $form->field($model, 'banner_img')->textInput(['maxlength' => true, 'id'=>'banner_img']) ?>
      </div>
      <div class="col-lg-4" style="padding-top: 24px;">
          <button type="button" id="select_image_banner" class="btn btn-default" >
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          Chọn</button>
          <button type="button" id="remove_image_banner" class="btn btn-default" >
          <i class="fa fa-trash-o" aria-hidden="true"></i>
          Xóa</button>
      </div>
    </div>

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
