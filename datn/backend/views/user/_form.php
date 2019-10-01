<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use yii\widgets\MaskedInput;
use kartik\date\DatePicker;
use backend\assets\AppAssetFix;
AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
<div class="col-lg-8">
        <div class="main-box">
            <div class="main-box-body clearfix">
                
                    <?= $form->field($model, 'fullname')->textInput(['autofocus' => true,'maxlength' => true]) ?>

                    <?= $form->field($model, 'username')->textInput(['placeholder'=>'username']) ?>

                    <?= $model->isNewRecord ?$form->field($model, 'password')->passwordInput(['placeholder'=>'password','value'=>""]):Html::tag('span') ?>

                    <?=  $model->isNewRecord ?$form->field($model, 'password_repeat')->passwordInput(['placeholder'=>'Confirm Password*','value'=>"",'class'=>'form-control col-lg-4']) :Html::tag('span')  ?>

                    <?= $form->field($model, 'email')->input('email',['placeholder'=>'example@abc.com']) ?>

                    <?= $form->field($model, 'phone')->textInput()?>

                    <?= $form->field($model, 'gender')->radioList([1 => 'Nam', 0 => 'Nữ'], ['separator' => '', 'tabindex' => 3]); ?>
                   <?=
                    $form->field($model, 'birthday')->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'yyyy-mm-dd'],
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy-mm-dd',
                        ],
                        
                    ]);

                    ?>

                    <?= $form->field($model, 'address')->textInput(['maxlength' => true,'placeholder'=>'Địa chỉ']) ?>

                    <?=  $form->field($model, 'province_id')->widget(Select2::classname(), [
                                                'data' => $listProvince,
                                                'options' => ['placeholder' => 'Chọn tỉnh/thành phố'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                             ]);
                    ?>
            </div>
        </div>

    </div>
    <div class="col-lg-4">
        <div class="main-box">
            <div class="main-box-body clearfix">
                <div class="row">
                    <?php $src=$model->isNewRecord ? Yii::$app->homeUrl.'img/avata_default.png':$srcAvatar;?>
                    <img src="<?php echo $src;?>" id="preview_avata" alt="" >
                </div>
                <div class="row" style="padding: 20px 0px 0px 22%;">
                        <button type="button" id="select_avata" class="btn btn-default" >
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                        Select</button>
                        <button type="button" id="remove_avata" class="btn btn-default" >
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                        Remover</button>
                </div>
                <div class="row">
                    <?= $form->field($model, 'avata')->textInput(['maxlength' => true,'id'=>'avata']) ?>
                </div>
                <div class="row">
                    <?= $form->field($model, 'status')->widget(SwitchInput::classname(), []); ?>
                </div>
                <div class="row">
                    <?= $form->field($model, 'role')->radioList([1 => 'khách hàng', 1 => 'manager', 2 => 'admin'])?>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm' : 'Lưu', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
