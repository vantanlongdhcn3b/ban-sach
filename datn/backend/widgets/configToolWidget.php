<?php 

namespace backend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class configToolWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();        
    }

    public function run()
    {
        return $this->render('configToolWidget');
    }
}
