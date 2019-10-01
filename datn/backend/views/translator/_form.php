<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\AppAssetFix;
use kartik\switchinput\SwitchInput;

AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Translator */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="translator-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'translator_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>

    <?= $form->field($model, 'metakeyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'metadescription')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
