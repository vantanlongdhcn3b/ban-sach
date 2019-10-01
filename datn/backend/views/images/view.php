<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Images */

$this->title = $model->img_id;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="images-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->img_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->img_id], [
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
            'img_id',
            'product_id',
            'img_link',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
