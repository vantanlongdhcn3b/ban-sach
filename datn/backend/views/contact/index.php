<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'name',
        
        'vAlign'=>'middle',
        'width'=>'210px',
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Tên công ty', 
                'size'=>'md',
            ];
        }

    ],

    [
        'attribute' => 'created_at',
        'label' => 'Ngày tạo',
        'vAlign'=>'middle',

        'value' => function ($data) {
                   return date("d-m-Y H:i:s", $data['created_at']);
                    }
            
    ],
    [
        'attribute' => 'updated_at',
        'label' => 'Ngày cập nhật',
        'vAlign'=>'middle',
        'value' => function ($data) {
                   return date("d-m-Y H:i:s", $data['updated_at']);
                    }
            
    ],
    //'status',
    // ['attribute'=>'buy_amount','format'=>['decimal',2], 'hAlign'=>'right', 'width'=>'110px'],
    // ['attribute'=>'sell_amount','format'=>['decimal',2], 'hAlign'=>'right', 'width'=>'110px'],
    [
    'class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['province/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['province/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['province/delete', 'id' => $key]);
                }
            },
    ],
];

$fullExportMenu = ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'target' => ExportMenu::TARGET_BLANK,
    'fontAwesome' => true,
    'pjaxContainerId' => 'kv-pjax-container',
    'dropdownOptions' => [
        'label' => 'Full',
        'class' => 'btn btn-default',
        'itemsBefore' => [
            '<li class="dropdown-header">Export All Data</li>',
        ],
    ],
]);
?>
<div class="contact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' =>$gridColumns,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Thông tin</h4>',
        ],
        // set a label for default menu
        'export' => [
            'label' => 'Page',
            'fontAwesome' => true,
        ],
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            $fullExportMenu,
            ['content'=>
                Html::button('<i class="glyphicon glyphicon-plus"></i>', [
                    'type'=>'button', 
                    'title'=>Yii::t('kvgrid', 'Add'), 
                    'class'=>'btn btn-success',
                    'onclick' =>'openCreateProvince()',
                ]) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], [
                    'data-pjax'=>0, 
                    'class' => 'btn btn-default', 
                    'title'=>Yii::t('kvgrid', 'Reset'),
                ])
            ],
        ]
    ]); ?>
</div>
