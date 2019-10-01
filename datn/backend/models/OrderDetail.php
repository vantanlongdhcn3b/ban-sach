<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_detail".
 *
 * @property integer $detail_id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $price
 * @property integer $qty
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $user_check
 *
 * @property Order $order
 * @property Product $product
 */
class OrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'price', 'qty', 'created_at', 'updated_at'], 'required'],
            [['order_id', 'product_id', 'price', 'qty', 'status', 'created_at', 'updated_at', 'user_check'], 'integer'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'order_id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'product_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'detail_id' => 'Detail ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'qty' => 'Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_check' => 'User Check',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['order_id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['product_id' => 'product_id']);
    }
}
