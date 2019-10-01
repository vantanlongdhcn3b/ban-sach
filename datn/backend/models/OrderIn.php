<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_in".
 *
 * @property integer $order_in_id
 * @property integer $product_id
 * @property integer $qty
 * @property integer $date
 * @property integer $status
 * @property integer $user_id
 *
 * @property Product $product
 * @property User $user
 */
class OrderIn extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_in';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'qty', 'date', 'user_create'], 'required'],
            
            [['product_id', 'qty', 'date', 'status','price_in'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'product_id']],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_in_id' => 'Order In ID',
            'product_id' => 'Tên sản sản phẩm',
            'qty' => 'Số lượng nhập',
            'date' => 'Ngày Nhập',
            'status' => 'Trạng thái',
            'user_create' => 'Người nhập',
            'price_in'=>'Giá nhập',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    
}
