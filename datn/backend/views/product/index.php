<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use backend\models\Category;
use backend\models\User;
use kartik\date\DatePicker;
use backend\models\Author;

use yii\widgets\Pjax;





/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sách';
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
        'attribute'=>'product_name',
       'label' => '<span class="">Tên sách',
       'encodeLabel' => false,
        'pageSummary'=>'Total',
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Tên sách', 
                'size'=>'md',
            ];
        },


    ],

    [
        'class'=>'kartik\grid\FormulaColumn', 
        'attribute' => 'image',
        'format' => 'html',
        'value' => function ($data) {
            return Html::img($data['image'],
                ['width' => '100px', 'alt' =>""]);
        },
        'header'=>'Avatar', 
        'vAlign'=>'middle',
        'headerOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'7%',
        'mergeHeader'=>true,
        'pageSummary'=>true,
        'footer'=>true
    ],

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'author_id',
        'label' => '<span class="">Tác giả',
        'encodeLabel' => false,
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Tác giả', 
                'size'=>'md',
            ];
        },
        'value' => function ($data) {
                            $name=Author::getAuthorById($data['author_id']);
                            return $name;
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Author::getAllAuthor(), 'author_id', 'author_name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group' => true,
    ],

    [
        'attribute'=>'cat_id',
        
        'vAlign'=>'middle',
        'label' => '<span class="">Danh mục',
        'encodeLabel' => false,
        'options' => ['style' => 'max-width:250px;'],
        'value' => function ($data) {
                            $name=Category::getCategoryById($data['cat_id']);
                            return $name;
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Category::find()->orderBy('cat_name')->asArray()->all(), 'cat_id', 'cat_name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group' => true,

    ],
    
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'status', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:150px;'],
        
    ], 

     [
        'class'=>'kartik\grid\EditableColumn',
        'attribute' => 'date_release',
        'label' => '<span class="">Ngày phát hành',
       'encodeLabel' => false,
        'options' => ['style' => 'max-width:200px;'],
        'value' => function ($data) {
                    $date_release = strtotime($data['date_release']);
                   return date("d-m-Y",$date_release);
                    },
        'filterType' => GridView::FILTER_DATE,
        'filterWidgetOptions' => [
            'options' => ['placeholder' => 'Enter date ...'], //this code not giving any changes in browser
            'type' => DatePicker::TYPE_COMPONENT_APPEND, //this give error Class 'DatePicker' not found
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-mm-yyyy'
            ],
        ],
        'editableOptions'=>[
        'header'=>'Ngày phát hành', 
        'size'=>'md',
        'inputType'=>\kartik\editable\Editable::INPUT_WIDGET,
        'widgetClass'=> 'kartik\datecontrol\DateControl',
        'options'=>[
            'type'=>\kartik\datecontrol\DateControl::FORMAT_DATE,
            'displayFormat'=>'dd-MM-yyyy',
            'saveFormat'=>'php:Y-m-d',
            'options'=>[
                'pluginOptions'=>[
                    'autoclose'=>true
                    ]
                ]
            ]
        ],
        'group' => true,
            
    ],
    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'price_out', 
        'label' => '<span class="">Giá bán',
        'encodeLabel' => false,
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=>[
            'header'=>'Giá bán', 
            'inputType'=>\kartik\editable\Editable::INPUT_SPIN,
            'options'=>[
                'pluginOptions'=>['min'=>0, 'max'=>5000]
            ]
        ],
        'hAlign'=>'right', 
        'vAlign'=>'middle',
        'width'=>'7%',
        'format'=>['decimal', 0],
        'pageSummary'=>true
    ],

    [
        'attribute'=>'sale',
        'vAlign'=>'middle',
        'label' => '<span class="">Giảm giá(%)',
        'encodeLabel' => false,
    ],

    [
    'class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['product/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['product/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['product/delete', 'id' => $key]);
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
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php 
    Pjax::begin([
    'enablePushState' => false ,// to disable push state
    'enableReplaceState' => false ,// to disable replace state
    ]);
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'showPageSummary' => true,
        // 'floatHeader'=>true,
        'pjax'=>true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
            'options'=>[
                'id'=>'kv-unique-id-1',

            ]
        ],

        'filterSelector' => "select[name='".$dataProvider->getPagination()->pageSizeParam."'],input[name='".$dataProvider->getPagination()->pageParam."']",
        'pager' => [
            'class' => \liyunfang\pager\LinkPager::className(),
            'template' => '{pageButtons} {customPage} {pageSize}',
            'pageSizeList' => [10, 20, 30, 50],
            'customPageWidth' => 50,
            'customPageBefore' => ' Đi tới trang',
            'customPageAfter' => ' Page ',
        ],

        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'responsive' => true,
        'hover' => true,
        
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Thông tin sách</h4>',
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
                    
                    'title'=>Yii::t('kvgrid', 'Add user'), 
                    'class'=>'btn btn-success',
                    
                ]) . ' '.
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], [
                    'data-pjax'=>0, 
                    'class' => 'btn btn-default', 
                    'title'=>Yii::t('kvgrid', 'reset')
                ])
            ],

        ]
    ]);
    Pjax::end();
     ?>
</div>
