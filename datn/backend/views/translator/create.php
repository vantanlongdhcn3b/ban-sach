<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Translator */

$this->title = 'Create Translator';
$this->params['breadcrumbs'][] = ['label' => 'Translators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translator-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
