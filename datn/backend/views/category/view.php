<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Category */

$this->title = $model->cat_id;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cat_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cat_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn chắc chắn muốn xóa?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cat_id',
            'cat_name',
            'parent_id',
            'cat_image',
            'status',
            'metakeyword',
            'metadescription',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
