<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use backend\models\Product;
use kartik\date\DatePicker;



/* @var $this yii\web\View */
/* @var $searchModel backend\models\ImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Images';
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
    [
        'class' => 'kartik\grid\SerialColumn',
        'contentOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'36px',
        'header'=>'',
        'headerOptions'=>['class'=>'kartik-sheet-style']
    ],
    [
        'attribute'=>'product_id', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:250px;'],
        'value' => function ($data) {
                            $name=Product::find()->asArray()->where('product_id='.$data['product_id'])->one();
                            return $name['product_name'];
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Product::find()->orderBy('product_name')->asArray()->all(), 'product_id', 'product_name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group'=>true,

    ],
    [
        'class'=>'kartik\grid\FormulaColumn', 
        'attribute' => 'img_link',
        'format' => 'html',
        'value' => function ($data) {
            return Html::img($data['img_link'],
                ['width' => '60px', 'alt' =>""]);
        },
        'header'=>'Ảnh sách', 
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'7%',
        'mergeHeader'=>true,
        'pageSummary'=>true,
        'footer'=>true
    ],
    
    
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'status', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:150px;'],
    ], 


    [
    'class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['images/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['images/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['images/delete', 'id' => $key]);
                }
            },
    ],
];

?>
<div class="images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,

        'pjax' => true,
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Bảng ảnh sách</h4>',
        ],
        // your toolbar can include the additional full export menu
    ]); ?>
</div>
