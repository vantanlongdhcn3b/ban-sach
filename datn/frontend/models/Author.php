<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "author".
 *
 * @property integer $author_id
 * @property string $author_name
 * @property integer $status
 * @property string $description
 * @property string $metakeyword
 * @property string $metadescription
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Product[] $products
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_name', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['description','description_long'], 'string'],
            [['author_name', 'metakeyword', 'metadescription','author_img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'author_id' => 'Author ID',
            'author_name' => 'Author Name',
            'status' => 'Status',
            'description' => 'Giới thiệu ngắn',
            'description_long' => 'Giới thiệu chi tiết',
            'metakeyword' => 'Metakeyword',
            'metadescription' => 'Metadescription',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['author_id' => 'author_id']);
    }
    public function getAuthorById($id){
        $data=Author::find()->asArray()->where('author_id=:id',['id'=>$id])->one();
        return $data;
    }
}
