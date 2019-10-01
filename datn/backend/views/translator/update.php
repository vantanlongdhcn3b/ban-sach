<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Translator */

$this->title = 'Update Translator: ' . $model->translator_id;
$this->params['breadcrumbs'][] = ['label' => 'Translators', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->translator_id, 'url' => ['view', 'id' => $model->translator_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="translator-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
