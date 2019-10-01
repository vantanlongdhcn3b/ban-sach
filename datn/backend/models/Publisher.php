<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property integer $publisher_id
 * @property string $publisher_name
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Product[] $products
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publisher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['publisher_name', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['publisher_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'publisher_id' => 'Publisher ID',
            'publisher_name' => 'Publisher Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' =>'Trạng thái',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['publisher_id' => 'publisher_id']);
    }

    public function getAllPublisher(){
        $data = Publisher::find()->orderBy('publisher_name')->where('status=1')->all();
        return $data;
    }
}
