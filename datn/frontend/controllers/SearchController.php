<?php

namespace frontend\controllers;
use frontend\models\Product;
use frontend\models\Category;
use yii\helpers\Json;
use yii\db\Query;

class SearchController extends \yii\web\Controller
{
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionSearch()
    {
        $modelCat = new Category();
        $dataCatParent=$modelCat->getCategory(0);

        $modelPro = new Product();
        $question = \Yii::$app->request->queryParams['search'];//lấy ra key word khi gõ trên thanh tìm kiếm
        $dataSearch = $modelPro->getResultSearch($question);
        return $this->render('searchform',[
            'dataSearch'=>$dataSearch,
            'dataCatParent' => $dataCatParent,
            'question' => $question,
            ]);
    }
    public function actionSearchList($q = null) {
        $modelPro = new Product();
        $data=$modelPro->getResultSearch($q);
        $out = [];
        foreach ($data as $d) {
            $out[] = ['name' => $d['product_name'],
            		  'image' => $d['image'],
            		  'cat_name' => $d['cat_name'],
            		  'author' => $d['author_name'],
            		  'price_out' => number_format($d['price_out'],0,"",".") .' đ',
            		  'price' => number_format(($d['price_out']*(100-$d['sale'])/100),0,"",".").' đ',
            		  'sup_name' => $d['supplier_name'],
            		  'pub_name' =>$d['publisher_name'],
            		  'product_id' =>$d['product_id'],
                      'descript' => $d['metakeyword'],
            		];
        }
        echo Json::encode($out);
    }

}
