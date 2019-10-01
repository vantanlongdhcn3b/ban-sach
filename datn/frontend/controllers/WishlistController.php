<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Wishlist;
use frontend\models\WishlistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WishlistController implements the CRUD actions for Wishlist model.
 */
class WishlistController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }



    /**
     * Creates a new Wishlist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionAdd($id)
    {
        $model = new Wishlist();
        $model->user_id= Yii::$app->user->identity->id;
        $model->product_id=$id;
        $model->status=1;
        $model->date_created= time();

        $isWish = Wishlist::find()->asArray()->where('product_id=:id and user_id=:id_u',['id'=>$id,'id_u'=>Yii::$app->user->identity->id])->one();
        if(!$isWish){
            if(!$model->save()){
                echo "<pre>";
                print_r($model->errors);
                die();
            }
        }

    }

    public function actionGetwishlist(){
        $model = new Wishlist();
        $dataWishlist=$model->getWishlist();
        return $this->renderpartial("getWishlist",['dataWishlist'=>$dataWishlist]);
    }

    

    /**
     * Deletes an existing Wishlist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDeletewish($id)
    {
        $model = new Wishlist();
        $model->deleteWish($id);
        
    }

    /**
     * Finds the Wishlist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Wishlist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Wishlist::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
