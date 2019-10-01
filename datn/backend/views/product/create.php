<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = 'Tạo mới sách';
$this->params['breadcrumbs'][] = ['label' => 'Sách', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-create">

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
        
    ]) ?>

</div>
