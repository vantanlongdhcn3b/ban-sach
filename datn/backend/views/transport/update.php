<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Transport */

$this->title = 'Update Transport: ' . $model->transport_id;
$this->params['breadcrumbs'][] = ['label' => 'Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transport_id, 'url' => ['view', 'id' => $model->transport_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transport-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
