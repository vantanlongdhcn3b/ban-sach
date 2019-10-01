<?php

namespace frontend\models;

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
            [['metadescription'], 'string'],
            [['cat_name', 'metakeyword','cat_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_name' => 'Cat Name',
            'parent_id' => 'Parent ID',
            'status' => 'Status',
            'metakeyword' => 'Metakeyword',
            'metadescription' => 'Metadescription',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'cat_image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['cat_id' => 'cat_id']);
    }

    public function getCategory($parent_id=0){
        $data=Category::find()->asArray()->where('parent_id=:parent_id AND status=1',['parent_id'=>$parent_id])->all();
        return $data;
    }

    public function findCatSub($id){
        $data=Category::find()->select(['category.cat_id', 'parent_id', 'cat_name']) 
            ->from('category')
            ->join('INNER JOIN', 'product',
                        'category.cat_id =product.cat_id')  
            ->where('product.status=1 AND category.status = 1 AND product_id='.$id)   
            
            ->asArray()
            ->one();  
        return $data; 
    }
    public function findCatParent($id){//tìm thằng cha là thằng có cat_id bằng parent_id của thằng con...
        $data = Category::find()->asArray()->where('cat_id=:catId and status=1',['catId'=>$id])->one();
        return $data;
    }

    public function getCatByParent($id){//tìm tất cả thằng con có thằng cha là $id
        $data=Category::find()->asArray()->where('parent_id=:id',['id'=>$id])->all();
        return $data;
    }

}
