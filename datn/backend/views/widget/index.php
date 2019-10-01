<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WidgetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Widgets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="widget-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Widget', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'widget_id',
            'widget_name',
            'cat_parent',
            'condition',
            'status',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
