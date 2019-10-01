<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Widget */

$this->title = $model->widget_id;
$this->params['breadcrumbs'][] = ['label' => 'Widgets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widget-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->widget_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->widget_id], [
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
            'widget_id',
            'widget_name',
            'cat_parent',
            
            'condition',
            'status',
            'create_at',
        ],
    ]) ?>

</div>
