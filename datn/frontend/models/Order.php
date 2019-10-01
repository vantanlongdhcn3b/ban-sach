<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $order_id
 * @property integer $user_id
 * @property string $username
 * @property string $email
 * @property string $mobile
 * @property string $address
 * @property string $request
 * @property integer $user_check
 * @property integer $total
 * @property string $status
 * @property integer $payment_id
 * @property integer $transport_id
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Payment $payment
 * @property Transport $transport
 * @property User $user
 * @property OrderDetail[] $orderDetails
 */
class Order extends \yii\db\ActiveRecord
{
    public $province;
    public $district;
    public $village;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['user_id', 'email', 'mobile', 'address', 'total', 'created_at', 'updated_at'], 'required'],
            // [['user_id', 'user_check', 'total', 'payment_id', 'transport_id', 'created_at', 'updated_at'], 'integer'],
            // [['request'], 'string'],
            // [['username', 'email', 'mobile', 'address', 'status', 'description'], 'string', 'max' => 255],
            // [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
            // [['transport_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transport::className(), 'targetAttribute' => ['transport_id' => 'transport_id']],
            // [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],

            [['user_id', 'email', 'mobile', 'address', 'total','created_at', 'updated_at'], 'required','message'=>'Vui lòng nhập {attribute} '],
            [['user_id', 'user_check', 'total', 'status', 'transport_id','payment_id', 'updated_at'], 'integer'],
            [['created_at'], 'safe'],
            [['request'], 'string'],
            [['username', 'email', 'mobile', 'address',  'description','province','district','village'], 'string', 'max' => 255],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'payment_id']],
            [['transport_id'], 'exist', 'skipOnError' => true, 'targetClass' => Transport::className(), 'targetAttribute' => ['transport_id' => 'transport_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'user_id' => 'User ID',
            'username' => 'Username',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'request' => 'Request',
            'user_check' => 'User Check',
            'total' => 'Total',
            'status' => 'Status',
            'payment',
            'transport',
            'description' => 'Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['payment_id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransport()
    {
        return $this->hasOne(Transport::className(), ['transport_id' => 'transport_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['order_id' => 'order_id']);
    }
}
