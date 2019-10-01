<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use backend\models\Province;
use backend\models\User;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Suppliers';
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
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'supplier_name',
        
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Tên nhà phát hành', 
                'size'=>'md',
            ];
        }
    ],

    'email:email',
    'mobile',
    'address',

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'description',
        'format' =>'ntext',
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Mô tả', 
                'size'=>'md',
            ];
        }
    ],

    [
        'attribute'=>'created_at',   
        'label' => 'Ngày tạo', 
        'hAlign'=>'center',
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:200px;'],
        'value' => function ($data) {
                   return date("d-m-Y H:i:s", $data['created_at']);
                    },
        'headerOptions'=>['class'=>'kv-sticky-column'],
        'contentOptions'=>['class'=>'kv-sticky-column'],
    ],
    
    [
        'attribute' => 'updated_at',
        'label' => 'Ngày cập nhật',
        'hAlign'=>'center',
        'vAlign'=>'middle',
        'vAlign'=>'middle',
        'value' => function ($data) {
                   return date("d-m-Y H:i:s", $data['updated_at']);
                    }
            
    ],

    [
    'class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['supplier/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['supplier/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['supplier/delete', 'id' => $key]);
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
<div class="supplier-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supplier', ['create'], ['class' => 'btn btn-success']) ?>
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
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Bảng Nhà phát hành</h4>',
        ],
        // set a label for default menu
        'export' => [
            'label' => 'Page',
            'fontAwesome' => true,
        ],
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{toggleData}',
            '{export}',
            
            $fullExportMenu,

            ['content'=>
                Html::a('<i class="glyphicon glyphicon-plus"></i>', ['create'],[
                    
                    'title'=>Yii::t('kvgrid', 'Add category'), 
                    'class'=>'btn btn-success',
                    
                ]) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], [
                    'data-pjax'=>0, 
                    'class' => 'btn btn-default', 
                    'title'=>Yii::t('kvgrid', 'Show all')
                ])
            ],

        ]
    ]); ?>
</div>
