<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $supplier_id
 * @property string $supplier_name
 * @property string $email
 * @property string $mobile
 * @property string $address
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Product[] $products
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'email', 'message'=>'không đúng định dạng'],
            [['supplier_name', 'created_at', 'updated_at'], 'required'],
            [['status','created_at', 'updated_at'], 'integer'],
            [['supplier_name', 'email', 'mobile', 'address', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'supplier_name' => 'Supplier Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'address' => 'Address',
            'description' => 'Description',
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
        return $this->hasMany(Product::className(), ['supplier_id' => 'supplier_id']);
    }

    public function getAllSupplier(){
        $data = Supplier::find()->orderBy('supplier_name')->where('status=1')->all();
        return $data;
    }
}
