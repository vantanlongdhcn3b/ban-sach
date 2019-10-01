<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = 'Cập nhật sách: ' . $model->product_name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->product_name, 'url' => ['view', 'id' => $model->product_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="product-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
                'listTranslator'=>$listTranslator,
                'listAuthor'=>$listAuthor,
                'listPublisher'=>$listPublisher,
                'listSupplier'=>$listSupplier,
                'catParent' =>$catParent,
                'catSub' =>$catSub,
                // 'listUserRole' => $listUserRole,
                'valueCat'=>$valueCat,
                'listImage'=>$listImage,
                'image_after'=>$image_after,
                'image_before'=>$image_before,
    ]) ?>

</div>
