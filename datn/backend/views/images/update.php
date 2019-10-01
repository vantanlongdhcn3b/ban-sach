<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Images */

$this->title = 'Update Images: ' . $model->img_id;
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->img_id, 'url' => ['view', 'id' => $model->img_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="images-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
