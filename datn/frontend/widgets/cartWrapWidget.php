<?php 

namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\common\Cart;
use Yii;
use yii\web\Session;


class cartWrapWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();        
    }

    public function run()
    {
    	$session = Yii::$app->session;
    	$cartInfor=$session['cart'];
        return $this->render('cartWrapWidget',['cartInfor'=>$cartInfor]);
    }
}
