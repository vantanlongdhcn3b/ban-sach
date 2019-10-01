<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\assets\AppAssetFix;
AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\OrderDetail */

$this->title = $model->detail_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-detail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->detail_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->detail_id], [
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
            'detail_id',
            'order_id',
            'product_id',
            'price',
            'qty',
            'status',
            'created_at',
            'updated_at',
            'user_check',
        ],
    ]) ?>

</div>
