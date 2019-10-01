<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */

$this->title = $model->banner_id;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->banner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->banner_id], [
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
            'banner_id',
            'product_id',
            'status',
            'cat_id',
        ],
    ]) ?>

</div>
