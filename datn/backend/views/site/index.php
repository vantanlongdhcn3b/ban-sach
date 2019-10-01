<?php
use yii\base\View;


/* @var $this yii\web\View */

$this->title = 'Admin hahaBook';
?>
<div class="site-index">

    

    <div class="body-content">
        <?php 

 use miloschuman\highcharts\Highcharts;
            echo Highcharts::widget([
               'options'=>'{
                  "title": { "text": "Fruit Consumption" },
                  "xAxis": {
                     "categories": ["Apples", "Bananas", "Oranges"]
                  },
                  "yAxis": {
                     "title": { "text": "Fruit eaten" }
                  },
                  "series": [
                     { "name": "Jane", "data": [1, 0, 4] },
                     { "name": "John", "data": [5, 7,3] }
                  ]
               }'
            ]);
         ?>


    </div>
</div>

