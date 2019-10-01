<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Province */

$this->title = 'Thêm tỉnh thành';
$this->params['breadcrumbs'][] = ['label' => 'Provinces', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="modal-header" style="padding: 0px">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="modal-body">
    	<?= $this->render('_form', [
	        'model' => $model,
	        
	    ]) ?>
</div>

    

    
