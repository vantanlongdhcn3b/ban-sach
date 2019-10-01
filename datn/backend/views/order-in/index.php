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
use backend\models\Product;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderInSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hóa đơn nhập';
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
        'label' => '<span class="">Tên sách',
        'encodeLabel' => false,
        'options' => ['style' => 'max-width:250px;'],
        'value' => function ($data) {
                            $name=Product::getProById($data['product_id']);
                            return $name['product_name'];
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Product::find()->orderBy('product_name')->asArray()->all(), 'product_id', 'product_name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group' => true,

    ],

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'price_in', 
        'label' => '<span class="">Giá nhập',

       'encodeLabel' => false,
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=>[
            'header'=>'Giá nhập', 
            'inputType'=>\kartik\editable\Editable::INPUT_SPIN,
            'options'=>[
                'pluginOptions'=>['min'=>0, 'max'=>5000]
            ]
        ],
        'hAlign'=>'right', 
        'vAlign'=>'middle',
        'width'=>'7%',
        'format'=>['decimal', 0],
        'pageSummary'=>true,
         'footer'=>true
    ],

    [
        'attribute' =>'qty',
        'label' => '<span class="">SL nhập',
       'encodeLabel' => false,
        'vAlign'=>'middle',
    ],
    [
        'class'=>'kartik\grid\FormulaColumn', 
        'header'=>'Tổng nhập<br>(giá x SL)', 
        'vAlign'=>'middle',
        'value'=>function ($model, $key, $index, $widget) { 
            $p = compact('model', 'key', 'index');
            return $widget->col(2, $p) * $widget->col(3, $p);
        },
        'headerOptions'=>['class'=>'kartik-sheet-style'],
        'hAlign'=>'right', 
        'width'=>'7%',
        'format'=>['decimal', 0],
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

        'attribute' => 'date',
        'label' => 'Ngày nhập',
        'options' => ['style' => 'max-width:200px;'],
        'value' => function ($data) {
                    $date = strtotime($data['date']);
                   return date("d-m-Y H:i:s",$date);
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
            
    ], 

    [
        'attribute'=>'user_create',
        
        'vAlign'=>'middle',
        'label' => '<span class="">Người nhập',
        'encodeLabel' => false,
        
        'options' => ['style' => 'max-width:250px;'],
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(User::find()->orderBy('username')->asArray()->all(), 'id', 'username'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group' => true,

    ],

    [
    'class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['order-in/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['order-in/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['order-in/delete', 'id' => $key]);
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
<div class="order-in-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order In', ['create'], ['class' => 'btn btn-success']) ?>
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
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Bảng hóa đơn nhập</h4>',
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
                    
                    'title'=>Yii::t('kvgrid', 'Add order in'), 
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
    Pjax::end();?>
</div>


