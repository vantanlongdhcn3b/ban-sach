<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);
use miloschuman\highcharts\Highcharts;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'banner_id',
            'product_id',
            'status',
            'cat_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

 <?php 

 
            echo Highcharts::widget([
               'options'=>'{
                  "title": { "text": "Fruit Consumption" },
                  "xAxis": {
                     "categories": ["Apples", "Bananas", "Oranges"]
                  },
                  "yAxis": {
                     "title": { "text": "Fruit eaten" }
                  },
                  "series": [
                     { "name": "Jane", "data": [1, 0, 4] },
                     { "name": "John", "data": [5, 7,3] }
                  ]
               }'
            ]);
         ?>
