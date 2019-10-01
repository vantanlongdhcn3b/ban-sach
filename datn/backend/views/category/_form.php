<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\widgets\MaskedInput;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_name')->textInput(['maxlength' => true]) ?>

    <?=$model->isNewRecord ? $form->field($model, 'parent_id')->widget(Select2::classname(), [
                                                'data' => $listParentCat,
                                                'options' => ['placeholder' => 'Chọn danh mục cha'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                    ]):$form->field($model, 'parent_id')->widget(Select2::classname(), [
                                                'value' => $parentCat,
                                                'data' => $listParentCat,
                                                'options' => ['placeholder' => 'Chọn danh mục cha'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                    ]);
    ?>
    
    <div class="row">
      <div class="col-lg-12">
      <?php 
      if($model->isNewRecord){
       ?>
        <img src="" id="preview_image_cat">
        <?php 
        }else{
         ?>
         <img src="<?= $image_before;?>" id="preview_image_cat">
        <?php } ?>
      </div>
      <div class="col-lg-8" >
        <?= $form->field($model, 'cat_image')->textInput(['maxlength' => true, 'id'=>'cat_image']) ?>
      </div>
      <div class="col-lg-4" style="padding-top: 24px;">
          <button type="button" id="select_image_cat" class="btn btn-default" >
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          Chọn</button>
          <button type="button" id="remove_image_cat" class="btn btn-default" >
          <i class="fa fa-trash-o" aria-hidden="true"></i>
          Xóa</button>
      </div>
    </div>

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <?= $form->field($model, 'metakeyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metadescription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
