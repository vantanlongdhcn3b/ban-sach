<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\AppAssetFix;
use kartik\select2\Select2;

AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Images */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->widget(Select2::classname(), [
                                                'data'=>$listProduct,
                                                'options' => ['placeholder' => '--Chọn sách--'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                             ]); 
                    ?>

    
    <div class="row">
      <div class="col-lg-12">
        <img src="" id="preview_imagepro">
      </div>
      <div class="col-lg-8" >
        <?= $form->field($model, 'img_link')->textInput(['maxlength' => true, 'id'=>'img_link']) ?>
      </div>
      <div class="col-lg-4" style="padding-top: 24px;">
          <button type="button" id="select_imagepro" class="btn btn-default" >
          <i class="fa fa-picture-o" aria-hidden="true"></i>
          Chọn</button>
          <button type="button" id="remove_imagepro" class="btn btn-default" >
          <i class="fa fa-trash-o" aria-hidden="true"></i>
          Xóa</button>
      </div>
    </div>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
