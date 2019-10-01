<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Supplier */

$this->title = $model->supplier_id;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->supplier_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->supplier_id], [
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
            'supplier_id',
            'supplier_name',
            'email:email',
            'mobile',
            'address',
            'description',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
