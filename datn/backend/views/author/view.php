<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\Author */

$this->title = $model->author_id;
$this->params['breadcrumbs'][] = ['label' => 'Authors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->author_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->author_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bạn chắc chắn muỗn xóa tác giả này?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'author_id',
            'author_name',
            'description:ntext',
            'descript_long:ntext'
            'metakeyword',
            'metadescription',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
