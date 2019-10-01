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
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
$arrayGender= [
   
          ['key' => '0', 'name' => 'Nữ'],
          ['key' => '1', 'name' => 'Nam'],
        ];
$arrayRole= [
          ['key' => '1', 'name' => 'khách hàng'],
          ['key' => '2', 'name' => 'manager'],
          ['key' => '3', 'name' => 'admin'],
        ];

$gridColumns = [
    [
        'class' => 'kartik\grid\SerialColumn',
        'contentOptions'=>['class'=>'kartik-sheet-style'],
        'width'=>'36px',
        'header'=>'',
        'headerOptions'=>['class'=>'kartik-sheet-style']
    ],
    //avatar
    [
        'class'=>'kartik\grid\FormulaColumn', 
        'attribute' => 'avata',
        'format' => 'html',
        'value' => function ($data) {
            return Html::img($data['avata'],
                ['width' => '60px', 'alt' =>""]);
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
        'attribute'=>'username',
        
        'vAlign'=>'middle',
        'headerOptions' => ['style' => 'width:20%'],
        'readonly'=>function($model, $key, $index, $widget) {
            return (!$model->status); // do not allow editing of inactive records
        },
        'editableOptions'=> function ($model, $key, $index){
            return [
                'header'=>'Họ tên', 
                'size'=>'md',
            ];
        }
    ],
    'email:email',
    
    [
        'class'=>'kartik\grid\BooleanColumn',
        'attribute'=>'status', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:150px;'],
    ], 
    'phone',
    
    [
        'attribute'=>'address',
        'width' => '350px',
        
    ],

    [
        'attribute'=>'province_id', 
        'vAlign'=>'middle',
        'options' => ['style' => 'max-width:250px;'],
        'value' => function ($data) {
                            $name=Province::getProvinceName($data['province_id']);
                            return $name;
                            },
        'filterType'=>GridView::FILTER_SELECT2,
        'filter'=>ArrayHelper::map(Province::find()->orderBy('province_name')->asArray()->all(), 'province_id', 'province_name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw',

    ],

    [
        'attribute' => 'gender',
        'label' => 'Giới tính',
        'options' => ['style' => 'max-width:150px;'],
        'value' => function ($data) {
                   return $data['gender']==1?"Nam":"Nữ";
                    },
        'filterType'=>GridView::FILTER_SELECT2,
        
        'filter'=>ArrayHelper::map($arrayGender, 'key', 'name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw'
            
    ],
     
    [

        'attribute' => 'birthday',
        'label' => 'Ngày sinh',
        'options' => ['style' => 'max-width:200px;'],
        'value' => function ($data) {
                    $birthday = strtotime($data['birthday']);
                   return date("d-m-Y",$birthday);
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
        'attribute' => 'role',
        'label' => 'Quyền',
        'options' => ['style' => 'max-width:200px;'],
        'value' => function ($data) {
                   return $data['role']==1?"Khách hàng":($data['role']==2?"Manager":"Admin");
                    },
        'filterType'=>GridView::FILTER_SELECT2,
        
        'filter'=>ArrayHelper::map($arrayRole, 'key', 'name'), 
        'filterWidgetOptions'=>[
            'pluginOptions'=>['allowClear'=>true],
        ],
        'filterInputOptions'=>['placeholder'=>'search...'],
        'format'=>'raw'
            
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
                    return Url::toRoute(['user/update', 'id' => $key]);
                }
                if ($action == 'view' ) {
                    return Url::toRoute(['user/view', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['user/delete', 'id' => $key]);
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

<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="fa fa-plus" aria-hidden="true"></i> Tạo mới', ['create'], ['class' => 'btn btn-success']) ?>
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
            'heading' => '<h4 class="panel-title"><i class="glyphicon glyphicon-book"></i> Danh sách tỉnh thành</h4>',
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
                    'title'=>Yii::t('kvgrid', 'Show all')
                ])
            ],

        ]
    ]); ?>
</div>


