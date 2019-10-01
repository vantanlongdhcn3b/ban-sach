<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Publisher */

$this->title = 'Update Publisher: ' . $model->publisher_id;
$this->params['breadcrumbs'][] = ['label' => 'Publishers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->publisher_id, 'url' => ['view', 'id' => $model->publisher_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publisher-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
