<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\AppAsset;
use kartik\switchinput\SwitchInput;

AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Author */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="author-form">

    <?php $form = ActiveForm::begin(['id' => $modelAuthor->isNewRecord ? 'author-form-create' : 'author-form-update']); ?>

    <?= $form->field($modelAuthor, 'author_name')->textInput() ?>

    <div class="form-group">
        <?= $modelAuthor->isNewRecord ?Html::button('Create',['class' =>'btn btn-success','onclick'=>'checkCreateAuthor()']):Html::submitButton('Update', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>