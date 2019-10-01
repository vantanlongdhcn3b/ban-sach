<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Province */

$this->title = $model->province_name;
$this->params['breadcrumbs'][] = ['label' => 'Tỉnh Thành', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="province-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->province_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->province_id], [
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
            'province_id',
            'province_name',
            [
                'attribute' => 'created_at',
                'label' => 'Ngày tạo',
                'value' => function ($data) {
                           return date("d-m-Y H:i:s", $data['created_at']);
                            }
                    
            ],
            [
                'attribute' => 'updated_at',
                'label' => 'Ngày cập nhật',
                'value' => function ($data) {
                           return date("d-m-Y H:i:s", $data['updated_at']);
                            }
                    
            ],
        ],
    ]) ?>

</div>
