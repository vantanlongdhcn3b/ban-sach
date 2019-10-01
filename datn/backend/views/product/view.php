<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Product */

$this->title = $model->product_id;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->product_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->product_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'product_id',
            'product_name',
            'cat_id',
            'author_id',
            'translator_id',
            'supplier_id',
            'publisher_id',
           
            'price_out',
            'sale',
            'qty',
            'status',
            'republish',
            'qty_page',
            'weight',
            'size',
            
            'barcode',
            'image',
            'made_in',
            'language',
            'description:ntext',
            'descript_short:ntext',
            'date_release',
            'metakeyword',
            'metadescription',
            'created_at',
            'updated_at',
            'user_create',
        ],
    ]) ?>

</div>
