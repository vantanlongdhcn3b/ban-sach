<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Transport */

$this->title = 'Create Transport';
$this->params['breadcrumbs'][] = ['label' => 'Transports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transport-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
