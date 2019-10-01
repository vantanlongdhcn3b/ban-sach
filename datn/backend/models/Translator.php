<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "translator".
 *
 * @property integer $translator_id
 * @property string $translator_name
 * @property string $description
 * @property string $metakeyword
 * @property string $metadescription
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Product[] $products
 */
class Translator extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'translator';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['translator_name', 'created_at', 'updated_at'], 'required'],
            [['description'], 'string'],
            [['status','created_at', 'updated_at'], 'integer'],
            [['translator_name', 'metakeyword', 'metadescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'translator_id' => 'Translator ID',
            'translator_name' => 'Translator Name',
            'description' => 'Description',
            'metakeyword' => 'Metakeyword',
            'metadescription' => 'Metadescription',
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
        return $this->hasMany(Product::className(), ['translator_id' => 'translator_id']);
    }

    public function getAllTranslator(){
        $data = Translator::find()->orderBy('translator_name')->where('status=1')->all();
        return $data;
    }
}
