<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TranslatorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="translator-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'translator_id') ?>

    <?= $form->field($model, 'translator_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'metakeyword') ?>

    <?= $form->field($model, 'metadescription') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
