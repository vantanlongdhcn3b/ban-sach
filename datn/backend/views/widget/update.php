<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Widget */

$this->title = 'Update Widget: ' . $model->widget_id;
$this->params['breadcrumbs'][] = ['label' => 'Widgets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->widget_id, 'url' => ['view', 'id' => $model->widget_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="widget-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
