<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Province */

$this->title = 'Update Province: ' . $model->province_name;
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->province_name, 'url' => ['view', 'id' => $model->province_id]];
$this->params['breadcrumbs'][] = 'Update';
?>

<div class="province-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
