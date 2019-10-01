<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\OrderIn */

$this->title = $model->order_in_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-in-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->order_in_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->order_in_id], [
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
            'order_in_id',
            'product_id',
            'qty',
            'date',
            'status',
            'user_create',
        ],
    ]) ?>

</div>
