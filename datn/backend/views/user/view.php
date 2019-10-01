<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\assets\AppAssetFix;

AppAssetFix::register($this);
/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$src_avata=$model->avata;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            [
                'attribute' => 'avata',
                'format' => 'html',
                'label' => 'Ảnh đại diện',
                'value' => Html::img($src_avata,
                        ['width' => '100px']),
                
            ],
            'fullname',
            'username',
            
            'email:email',
            [
                'attribute' => 'province_name',
                'value'=>$province_name,
                'label' =>'Tỉnh thành',
            ],
            'phone',
            'address',
            //gender
            [
                'attribute' => 'gender',
                'label' => 'Giới tính',
                'value' => function ($data) {
                           return $data['gender']==1?"Nam":"Nữ";
                            }
                    
            ],
            //birthday
             
             [
                'attribute' => 'birthday',
                'label' => 'Ngày sinh',
                'value' => function ($data) {
                            $birthday = strtotime($data['birthday']);
                           return date("d-m-Y",$birthday);
                            }
                    
            ],
            //status
            [
                'attribute' => 'status',
                'label' => 'Trạng thái',
                'value' => function ($data) {
                           return $data['status']==1?"Active":"InActive";
                            }
                    
            ],
            //role
            [
                'attribute' => 'role',
                'label' => 'Quyền',
                'value' => function ($data) {
                           return $data['role']==1?"Khách hàng":($data['role']==2?"Manager":"Admin");
                            }
                    
            ],
            [
                'attribute' => 'created_at',
                'value'=>$created_at,
                'label' =>'Là thành viên ngày:',
            ],
            [
                'attribute' => 'updated_at',
                'value'=>$updated_at,
                'label' =>'Ngày cập nhật',
            ],
        ],
    ]) ?>

</div>
