<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $feedback_id
 * @property integer $user_id
 * @property integer $product_id
 * @property string $title
 * @property string $comment
 * @property double $rating
 * @property integer $created_at
 * @property integer $status
 * @property integer $parent_cmt
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
            [['user_id', 'product_id', 'created_at', 'status', 'parent_cmt'], 'integer'],
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
            'product_id' => 'Product ID',
            'title' => 'Title',
            'comment' => 'Comment',
            'rating' => 'Rating',
            'created_at' => 'Created At',
            'status' => 'Status',
            'parent_cmt' => 'Parent Cmt',
        ];
    }
}
