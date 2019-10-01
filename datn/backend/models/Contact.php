<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property integer $contact_id
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $detail
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $logo_link
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'address', 'phone', 'email', 'created_at', 'updated_at'], 'required'],
            [['detail'], 'string'],
            [['name', 'address', 'phone', 'email', 'logo_link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contact_id' => 'Contact ID',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'detail' => 'Detail',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'logo_link' => 'Logo Link',
        ];
    }
}
