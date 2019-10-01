<?php

namespace backend\models;
use yii\web\UploadedFile;

use Yii;

class Product extends \yii\db\ActiveRecord
{
    public $catParent;

    public $file;

    public $attachment;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['product_name', 'price_out', 'sale', 'status', 'user_create', 'created_at', 'updated_at'], 'required', 'message'=>'Vui lòng nhập {attribute}'],
            [['author_id', 'catParent','translator_id', 'supplier_id', 'publisher_id', 'price_out', 'qty', 'status', 'republish', 'qty_page', 'barcode', 'created_at', 'updated_at'], 'integer', 'message'=>'Vui lòng nhập {attribute} là số'],
            [['sale', 'weight'], 'number', 'message'=>'Vui lòng nhập {attribute} là số'],
            [['sale_startdate', 'sale_enddate', 'published', 'date_release'], 'safe'],
            [['description','descript_short'], 'string'],
            [['product_name','size', 'image', 'image_after','made_in', 'language', 'metakeyword', 'metadescription'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'author_id']],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'cat_id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['publisher_id' => 'publisher_id']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'supplier_id']],
            [['translator_id'], 'exist', 'skipOnError' => true, 'targetClass' => Translator::className(), 'targetAttribute' => ['translator_id' => 'translator_id']],

            [['attachment'], 'file','maxFiles' => 10,],
            ['qty','integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Tên sách',
            'catParent' => 'Danh mục cha',
            'cat_id' => 'Danh mục con',
            'author_id' => 'Tác giả',
            'translator_id' => 'Dịch giả',
            'supplier_id' => 'Nhà phát hành',
            'publisher_id' => 'Nhà xuất bản',
            
            'price_out' => 'Giá bán',
            'sale' => 'Giảm giá',
            'qty' => 'Số lượng còn',
            'status' => 'Trạng thái',
            'republish' => 'Số lần tái bản',
            'qty_page' => 'Số trang',
            'weight' => 'Trọng lượng',
            'descript_short'=>'Mô tả ngắn',
            
            'size' => 'Kích thước',
            'barcode' => 'Mã code',
            'image' => 'Ảnh bìa trước',
            'made_in' => 'Nguồn gốc',
            'language' => 'Ngôn ngữ',
            'description' => 'Mô tả chi tiết',
            'date_release' => 'Ngày phát hành',
            'published' => 'Ngày xuất bản',
            'metakeyword' => 'Metakeyword',
            'metadescription' => 'Metadescription',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'user_create' => 'Người tạo',
            'sale_startdate' => 'Ngày bắt đầu giảm giá',
            'sale_enddate' => 'Ngày kết thúc giảm giá',
            'attachment' =>'Ảnh sách',
            'image_after'=>'Ảnh bìa sau',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderDetails()
    {
        return $this->hasMany(OrderDetail::className(), ['product_id' => 'product_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['author_id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['publisher_id' => 'publisher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['supplier_id' => 'supplier_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTranslator()
    {
        return $this->hasOne(Translator::className(), ['translator_id' => 'translator_id']);
    }

    public function getProById($id){
        return Product::find()->asArray()->where('product_id=:id',['id'=>$id])->one();
    }

    
    
}
