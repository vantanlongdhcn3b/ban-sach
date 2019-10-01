<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OrderIn */

$this->title = 'Update Order In: ' . $model->order_in_id;
$this->params['breadcrumbs'][] = ['label' => 'Order Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->order_in_id, 'url' => ['view', 'id' => $model->order_in_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-in-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
