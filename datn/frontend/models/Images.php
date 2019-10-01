<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property integer $img_id
 * @property integer $product_id
 * @property string $img_link
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Product $product
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'img_link', 'created_at', 'updated_at'], 'required'],
            [['product_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['img_link'], 'string', 'max' => 255],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'img_id' => 'Img ID',
            'product_id' => 'Product ID',
            'img_link' => 'Img Link',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }
}
