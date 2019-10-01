<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "wishlist".
 *
 * @property integer $wishlist_id
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $status
 * @property integer $date_created
 */
class Wishlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wishlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['wishlist_id', 'user_id', 'product_id', 'status', 'date_created'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wishlist_id' => 'Wishlist ID',
            'user_id' => 'User ID',
            'product_id' => 'Product ID',
            'status' => 'Status',
            'date_created' => 'Date Created',
        ];
    }
    
    public function getWishlist(){
        $data=null;
        if(!Yii::$app->user->isGuest){
            $user_id=Yii::$app->user->identity->id;
            $data=Wishlist::find()->asArray()->select(['COUNT(wishlist.product_id) as count_pro','product.*','author_name','wishlist_id']) 
            ->distinct()
            ->from('wishlist')
            ->join('INNER JOIN', 'product',
                        'product.product_id =wishlist.product_id')  
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id')  
            ->where('product.status=1 AND user_id=:id',['id'=>$user_id]) 
            ->groupBy(['wishlist.product_id']) 
            ->all(); 
        }
        return $data;
    }

    public function deleteWish($id){
        \Yii::$app
            ->db
            ->createCommand()
            ->delete('wishlist', ['product_id' => $id])
            ->execute();
    }
}
