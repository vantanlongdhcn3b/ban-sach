<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $feedback_id
 * @property integer $user_id
 * @property string $title
 * @property string $comment
 * @property double $point
 * @property integer $created_at
 * @property integer $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
             [['user_id', 'created_at', 'status', 'parent_cmt','product_id'], 'integer'],
            [['rating'], 'number'],
            [['title', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'feedback_id' => 'Feedback ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'comment' => 'Nội dung:',
            'rating' => 'rating',
            'created_at' => 'Created At',
            'status' => 'Status',
            'parent_cmt'=>'cha comment',
            'product_id'=>'Sach'
        ];
    }

    
    public function getFeedback($parent_cmt,$pro_id){
        $data=Feedback::find()->asArray()->select(['feedback.*','username','user.id','avata']) 
            ->from('feedback')
            ->join('INNER JOIN', 'user','user.id =feedback.user_id') 
            ->where('parent_cmt=:parent and product_id=:pro_id and feedback.status=1',['parent'=>$parent_cmt,'pro_id'=>$pro_id])
            ->all();
        return $data;
    }
    public function AVGRating($pro_id){
        
        $data=Feedback::find()->asArray()->select(['SUM(rating) as sum','COUNT(product_id) as count','product_id']) 
            ->from('feedback')
            ->where('product_id=:pro_id and status=1',['pro_id'=>$pro_id])
            ->groupBy('product_id')
            ->one();
        if($data){
            return $data['sum']/$data['count'];
        }
        
    }
    /*
    thống kê những cuốn sách được trên 5 người đánh giá trên 3.5 sao
     */
    public function reportFeedback($limit){

        $data = Feedback::find()->asArray()
        ->select([
            'product.*',
            'author_name',
            'COUNT(feedback.product_id) as count' ,
            'SUM(rating) as sum',
            '(SUM(rating)/COUNT(feedback.product_id)) as AVG',
            'count(Distinct user_id) as count_user',
            ])
        ->from('feedback')
        ->join('INNER JOIN', 'product',
                    'product.product_id =feedback.product_id')
        ->join('LEFT JOIN', 'author',
                    'author.author_id =product.author_id') 
        ->where('parent_cmt=0')
        ->groupBy('feedback.product_id')
        ->having('AVG>=1 and count_user>=1')
        ->limit($limit)
        ->orderBy(['AVG'=>SORT_DESC])
        ->all();

        return $data;

    }

    /*
    thống kê những cuốn sách được trên 5 người đánh giá trên 3.5 sao theo thể loại sách
     */
    public function reportFeedbackByCategory($id,$limit){

        $data = Feedback::find()->asArray()
        ->select([
            'product.*',
            'author_name',
            'COUNT(feedback.product_id) as count' ,
            'SUM(rating) as sum',
            '(SUM(rating)/COUNT(feedback.product_id)) as AVG',
            'count(Distinct user_id) as count_user',
            ])
        ->from('feedback')
        ->join('INNER JOIN', 'product',
                    'product.product_id =feedback.product_id')
        ->join('LEFT JOIN', 'author',
                    'author.author_id =product.author_id') 
        ->join('INNER JOIN', 'category',
                    'category.cat_id =product.cat_id')
        ->where('category.parent_id=:id and parent_cmt=0',['id'=>$id])
        ->groupBy('feedback.product_id')
        ->having('AVG>=1 and count_user>=1')
        ->limit($limit)
        ->orderBy(['AVG'=>SORT_DESC])
        ->all();
        return $data;
    }
}
