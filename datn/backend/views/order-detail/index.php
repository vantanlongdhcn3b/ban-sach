<?php

use frontend\models\Category;
use frontend\models\Product;
use frontend\models\Feedback;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use kartik\rating\StarRating;

use backend\assets\AppAssetFix;
AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Details';
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="order-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'detail_id',
            'order_id',
            'product_id',
            'price',
            'qty',
            // 'status',
            // 'created_at',
            // 'updated_at',
            // 'user_check',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
