<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
use backend\assets\AppAssetFix;
AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'author_name')->textInput(['maxlength' => true]) ?>

    <div class="row">
      <div class="col-lg-12">
        <img src="" id="preview_image_author">
      </div>
      <div class="col-lg-8" >
        <?= $form->field($model, 'author_img')->textInput(['maxlength' => true, 'id'=>'author_img']) ?>
      </div>
      <div class="col-lg-4" style="padding-top: 24px;">
          <button type="button" id="select_image_author" class="btn btn-default" >
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          Chọn</button>
          <button type="button" id="remove_image_author" class="btn btn-default" >
          <i class="fa fa-trash-o" aria-hidden="true"></i>
          Xóa</button>
      </div>
    </div>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'descript_long')->textarea(['rows' => 6]) ?>
    

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <?= $form->field($model, 'metakeyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metadescription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
