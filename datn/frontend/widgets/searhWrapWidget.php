<?php 

namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use frontend\models\Category;

class searhWrapWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();        
    }

    public function run()
    {
    	$modelCategory=new Category();
    	$dataCat= $modelCategory->getCategory();
        return $this->render('searhWrapWidget',[
        	'dataCat'=>$dataCat,
        	]);
    }
}
