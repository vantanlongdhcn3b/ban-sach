<?php 

namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class homeBestSellerWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();        
    }

    public function run()
    {
        return $this->render('homeBestSellerWidget');
    }
}
