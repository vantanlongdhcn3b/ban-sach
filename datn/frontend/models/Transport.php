<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "transport".
 *
 * @property integer $transport_id
 * @property string $transport_name
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Order[] $orders
 */
class Transport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transport_name', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['transport_name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'transport_id' => 'Transport ID',
            'transport_name' => 'Transport Name',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['transport_id' => 'transport_id']);
    }
    public function getAllTransport(){
        $data = Transport::find()->asArray()->all();
    }
}
