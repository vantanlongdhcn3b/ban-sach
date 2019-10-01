<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;

use backend\assets\AppAssetFix;
AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Widget */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="widget-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'widget_name')->textInput(['maxlength' => true]) ?>

    <?php
    $modelCat = new Category();
    $dataCat = ArrayHelper::map($modelCat->getAllCategory(), 'cat_id', 'cat_name');
    echo  $form->field($model, 'cat_parent')->widget(Select2::classname(), [
                                                'data' => $dataCat,
                                                'options' => ['placeholder' => 'Chọn danh mục'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                             ]);
                    ?>

    <?php
    $data=$arrayName = array('new' => "Mới phát hành", 'sale' =>"Giảm giá lớn nhất", 'best_seller'=>"Bán chạy nhất",'wish'=>"Yêu thích nhất");
    echo  $form->field($model, 'condition')->widget(Select2::classname(), [
                                                'data' => $data,
                                                'options' => ['placeholder' => 'Chọn điều kiện'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                             ]);
                    ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
