<?php
use yii\widgets\ListView;
?>

<div class="row">
    <?= ListView::widget([
        'options' => [
            'tag' => 'div',
        ],
        'dataProvider' => $listDataProvider,
        'itemView' => function ($model, $key, $index, $widget) {
            return '<div>' . $model['title'] . '</div>';
        },
        'itemOptions' => [
            'tag' => false,
        ],
        'summary' => '',
        'layout' => '{items} {pager}',

        'pager' => [
            // Use custom pager widget class
            'class' => frontend\widgets\demopager\DemoPager::className(),
            'firstPageLabel' => 'First',
            'lastPageLabel' => 'Last',
            'maxButtonCount' => 4,

            // Options for <ul> wrapper of default pager buttons are still available
            'options' => [
                'class' => 'pagination',
                'style' => 'display:inline-block;float:left;margin:20px 10px 20px 0;width:auto;'
            ],

            // Style for page size select
            'sizeListHtmlOptions' => [
                'class' => 'form-control',
                'style' => 'display:inline-block;float:left;margin:20px 10px 20px 0;width:auto;'
            ],

            // Style for go to page input
            'goToPageHtmlOptions' => [
                'class' => 'form-control',
                'style' => 'display:inline-block;float:left;margin:20px 10px 20px 0;width:auto;'
            ],
        ],

    ]);
    ?>
</div>
