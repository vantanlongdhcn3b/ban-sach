<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WidgetSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="widget-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'widget_id') ?>

    <?= $form->field($model, 'widget_name') ?>

    <?= $form->field($model, 'cat_parent') ?>

    <?= $form->field($model, 'cat_sup') ?>

    <?= $form->field($model, 'condition') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
