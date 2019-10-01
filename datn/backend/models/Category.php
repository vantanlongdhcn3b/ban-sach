<?php

namespace backend\models;

use Yii;


/**
 * This is the model class for table "category".
 *
 * @property integer $cat_id
 * @property string $cat_name
 * @property integer $parent_id
 * @property integer $status
 * @property string $metakeyword
 * @property string $metadescription
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{

    public $parentCat;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_name', 'created_at', 'updated_at'], 'required'],
            [['parent_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['cat_name', 'cat_image', 'metakeyword','metadescription'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'ID',
            'cat_name' => 'Tên danh mục',
            'parent_id' => 'Danh mục cha',
            // 'parentCat' => 'Danh mục cha',
            'status' => 'Trạng thái',
            'metakeyword' => 'Meta Keyword',
            'metadescription' => 'Meta description',
            'cat_image'=>'Ảnh thể loại',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['cat_id' => 'cat_id']);
    }
    public function getAllCategory(){
        $rows = (new \yii\db\Query())
            ->select(['cat_id', 'cat_name', 'parent_id', 'status'])
            ->from('category')
           
            ->all();

        return $rows;
    }

    public function getAllParentCategory(){// lấy tât cả danh mục cha
        $data = Category::find()->asArray()->orderBy('cat_name')->where('status=1 AND parent_id=0')->all();
        return $data;
    }

    public function getParentCategory($parent_id){
        $data = Category::find()->asArray()->where('status=1 AND cat_id=:catId',['catId'=>$parent_id])->one();
        return $data;
    }


    public function getAllSubCategory($cat_id){
        $data = Category::find()->where('status=1 AND parent_id='.$cat_id)->all();
        return $data;
    }
    public function getSubCategory(){
        $data = Category::find()->where('status=1 AND parent_id!= 0')->all();
        return $data;
    }
    public function getCategoryById($cat_id){
        $data = Category::find()->where('status=1 AND cat_id='.$cat_id)->one();
        return $data['cat_name'];
    }

}
