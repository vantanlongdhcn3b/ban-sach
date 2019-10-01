<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use backend\models\User;
use kartik\date\DatePicker;
use yii\kartik\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
$status=array('1' => 'Mới đặt hàng','2'=>'Đang giao','3'=>'Đã giao', '4'=>'Hủy' );
$gridColumns = [
    [
        'class' => 'kartik\grid\SerialColumn',
        'contentOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'36px',
        'header'=>'',
        'headerOptions'=>['class'=>'kartik-sheet-style']
    ],
    'order_id',

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'user_id',
        'width'=>'10%',
        'label' => 'Tài khoản KH',
        'encodeLabel' => false,
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        
        'value' => function ($data) {
                            $name=User::getUserById($data['user_id']);
                            return $name['username'];
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(User::getAllUser(), 'id', 'username'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        'group' => true,
    ],

    [
        'attribute'=>'username',
        'width'=>'10%',
        'vAlign'=>'middle',
        'label' => '<span class="">Khách mua hàng',
        'encodeLabel' => false,
        'format'=>'raw',
        'group' => true,

    ],
    [
        'attribute'=>'email',
        'width'=>'10%',
        'vAlign'=>'middle',
        'label' => '<span class="">Email mua hàng',
        'encodeLabel' => false,
        'format'=>'raw',
        'group' => true,

    ],

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute' => 'created_at',
        'width' =>'10%',
        'label' => '<span class="">Ngày đặt hàng',
       'encodeLabel' => false,
        'options' => ['style' => 'max-width:200px;'],
        'value' => function ($data) {
                    $date_buy = strtotime($data['created_at']);
                   return date("d-m-Y H:i:s",$date_buy);
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
        'group' => true,
            
    ],
    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'total', 
        'label' => '<span class="">Tổng tiền thanh toán',
        'encodeLabel' => false,
        'hAlign'=>'right', 
        'vAlign'=>'middle',
        'width'=>'7%',
        'format'=>['decimal', 0],
        'pageSummary'=>true
    ],

    [
        'class' => '\kartik\grid\EditableColumn',
        'attribute'=>'status',
        'width'=>'25%',
        'label' => 'Trạng thái đơn hàng',
        'content'=>function($model) {
            if($model->status==1){
                return "<span class='label label-primary'>Đang duyệt</span>";        
            }
            else if($model->status==2){
                return "<span class='label label-warning'>Đang giao<span>";
            }
            else if($model->status==3){
                
                return "<span class='label label-success'>Đã giao</span>"; 
            }else if($model->status==4){
                return "<span class='label label-danger'>Hủy<span>";
            }
        },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>$status, 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',

        'editableOptions'=>[
        'header'=>'Check trạng thái đơn hàng', 
        'size'=>'md',

        'inputType'=>\kartik\editable\Editable::INPUT_SELECT2,
         'formOptions' => ['action' => ['/order/check_order']],
        'options'=>[
            'data'=>$status,
            'options'=>[
                'pluginOptions'=>[
                    'autoclose'=>true
                    ]
                ]
            ]
        ],
    ],

    [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'user_check',
        'label' => 'Nhân viên check',
        'encodeLabel' => false,
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        
        'value' => function ($data) {
                            $name=User::getUserByRole($data['user_check']);
                            return $name['username'];
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(User::getAllUserByRole(), 'id', 'username'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',
        
    ],

    [
    'class' => 'kartik\grid\ActionColumn',
    'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['order/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['order/view', 'id' => $key]);
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
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'showPageSummary' => true,
        // 'floatHeader'=>true,
        'pjax'=>true,
        'pjaxSettings'=>[
            'neverTimeout'=>true,
            'options'=>[
                'id'=>'kv-pjax-container',

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
       
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Hóa đơn mua hàng</h4>',
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
                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['index'], [
                    'data-pjax'=>0, 
                    'class' => 'btn btn-default', 
                    'title'=>Yii::t('kvgrid', 'reset')
                ])
            ],

        ]
    ]); ?>
</div>
