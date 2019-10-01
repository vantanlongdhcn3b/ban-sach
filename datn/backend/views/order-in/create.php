<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OrderIn */

$this->title = 'Create Order In';
$this->params['breadcrumbs'][] = ['label' => 'Order Ins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-in-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
