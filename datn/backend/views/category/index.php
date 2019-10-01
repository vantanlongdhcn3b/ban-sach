<?php

use backend\models\Category;
use kartik\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;

$gridColumnsParent = [
    [
        'class' => 'kartik\grid\SerialColumn',
        'contentOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'36px',
        'header'=>'',
        'headerOptions'=>['class'=>'kartik-sheet-style']
    ],

    [
        'attribute'=>'parent_id', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:250px;'],
        'value' => function ($data) {
                            $nameParent=Category::getParentCategory($data['parent_id']);
                            return $nameParent['cat_name'];
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Category::getAllParentCategory(), 'cat_id', 'cat_name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group'=>true,

    ],

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'cat_name',
        
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Tên danh mục', 
                'size'=>'md',
            ];
        }
    ],
  
    [
        'class'=>'kartik\grid\FormulaColumn', 
        'attribute' => 'cat_image',
        'format' => 'html',
        'value' => function ($data) {
            return Html::img($data['cat_image'],
                ['width' => '100px', 'alt' =>""]);
        },
        'header'=>'Avatar', 
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'7%',
        'footer'=>true
    ],

    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'status', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:150px;'],
    ], 

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'metakeyword',
        
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'key description', 
                'size'=>'md',
            ];
        }
    ],

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'metadescription',
        
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'meta description', 
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

    ['class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['category/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['category/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['category/delete', 'id' => $key]);
                }
            },
    ],
];

$fullExportMenu = ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumnsParent,
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
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumnsParent,

        'filterSelector' => "select[name='".$dataProvider->getPagination()->pageSizeParam."'],input[name='".$dataProvider->getPagination()->pageParam."']",
        'pager' => [
            'class' => \liyunfang\pager\LinkPager::className(),
            'template' => '{pageButtons} {customPage} {pageSize}',
            'pageSizeList' => [10, 20, 30, 50],
            'customPageWidth' => 50,
            'customPageBefore' => ' Jump to ',
            'customPageAfter' => ' Page ',
        ],

        'pjax' => true,
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Danh mục sách</h4>',
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
