<?php

namespace backend\controllers;
use backend\models\Communication;

class CommunicationController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$model = new Communication();
    	$dataAllComm = $model->getAllComm();
        return $this->render('index',['dataAllComm'=>$dataAllComm]);
    }

}
