<?php 

namespace backend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class userLeftBoxWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();        
    }

    public function run()
    {
        return $this->render('userLeftBoxWidget');
    }
}
