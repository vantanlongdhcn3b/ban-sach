<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Wishlist */

$this->title = 'Update Wishlist: ' . $model->wishlist_id;
$this->params['breadcrumbs'][] = ['label' => 'Wishlists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->wishlist_id, 'url' => ['view', 'id' => $model->wishlist_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wishlist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
