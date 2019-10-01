<?php

namespace frontend\models;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;

use Yii;


class Product extends \yii\db\ActiveRecord
{
    const LIMIT_NUMBER = 7;
    const PAGE_SIZE = 8;
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
            [['product_name', 'cat_id', 'price_out', 'sale', 'qty', 'status', 'user_create', 'created_at', 'updated_at'], 'required'],
            [['cat_id', 'author_id', 'translator_id', 'supplier_id', 'publisher_id', 'price_out', 'qty', 'status', 'republish', 'qty_page', 'barcode', 'created_at', 'updated_at'], 'integer'],
            [['sale', 'weight'], 'number'],
            [['sale_startdate', 'sale_enddate', 'published', 'date_release'], 'safe'],
            [['description'], 'string'],
            [['product_name', 'size', 'image', 'made_in', 'language', 'metakeyword', 'metadescription', 'user_create'], 'string', 'max' => 255],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'author_id']],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'cat_id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['publisher_id' => 'publisher_id']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'supplier_id']],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'cat_id' => 'Cat ID',
            'author_id' => 'Author ID',
            'translator_id' => 'Translator ID',
            'supplier_id' => 'Supplier ID',
            'publisher_id' => 'Publisher ID',
           
            'price_out' => 'Price Out',
            'sale' => 'Sale',
            'sale_startdate' => 'Sale Startdate',
            'sale_enddate' => 'Sale Enddate',
            'qty' => 'Qty',
            
            'status' => 'Status',
            'republish' => 'Republish',
            'qty_page' => 'Qty Page',
            'weight' => 'Weight',
            'size' => 'Size',
            'barcode' => 'Barcode',
            'image' => 'Image',
            'made_in' => 'Made In',
            'language' => 'Language',
            'description' => 'Description',
            'published' => 'Published',
            'date_release' => 'Date Release',
            'metakeyword' => 'Metakeyword',
            'metadescription' => 'Metadescription',
            'user_create' => 'User Create',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
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



    public function totalProductByCat($parent_id){//tìm tổng sách của danh mục cha
        $data=Product::find()->select(['COUNT(product_id) as count_pro', 'product.cat_id']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id')  
            ->where('product.status=1 AND category.status = 1 AND parent_id='.$parent_id)   
            ->groupBy(['product.cat_id'])
            ->asArray()
            ->all();  
        return $data; 
    }

    public function totalProductByCatSup($cat_id){
        $data=Product::find()->asArray()->select(['COUNT(product_id) as count_pro'])
        ->where('cat_id=:id',['id'=>$cat_id])->one();
        return $data['count_pro'];
    }

    public function getPagerProduct($id){
        // $pagerparams = $_GET; 
        // $pagerparams['view'] = 'grid';
        // $pagerparams['status'] = 'az';
        // $pagerparams['num_page'] = '8';

        $data = Product::find()->asArray()->where('cat_id=:catId',['catId'=>$id]);
        $pages = new Pagination(['totalCount' => $data->count(), 'pageSize'=>8]);
        return $pages;
    }

    public function getProductByCatId($id){//Tìm tất cả sách của danh mục con
        $pager=$this->getPagerProduct($id);
        $data = Product::find()->asArray()->select(['product.*','author_name']) 
        ->from('product')
        ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
        ->where('cat_id=:catId',['catId'=>$id])
        ->offset($pager->offset)
        ->limit($pager->limit)
        ->all();
        return $data;
    }
    //show product by category parent
    public function getPagerIndex($id){
        $data=Product::find()->asArray()->select(['product.*', 'parent_id']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id')  
            ->where('product.status=1 AND category.status = 1 AND parent_id='.$id);  
        $pages = new Pagination(['totalCount' => $data->count(), 'pageSize'=>8]);
        return $pages;
    }
    public function getProductByParentId($id){//tim tất cả sách của danh mục cha
        $pager=$this->getPagerIndex($id);
        $data=Product::find()->asArray()->select(['product.*', 'parent_id','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->where('product.status=1 AND category.status = 1 AND parent_id='.$id)  
            ->offset($pager->offset)
            ->limit($pager->limit)
            ->all();  
        return $data;
    }

    public function getDataprovider($id){//Tìm tất cả sách của danh mục con
        $query = Product::find()->asArray()->where('cat_id=:catId',['catId'=>$id])->all();
        
        $pageSize = isset($params['per-page']) ? intval($params['per-page']) : 10;
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' =>  ['pageSize' => $pageSize,],
        ]);

        return $dataProvider;
    }

    public function getProById($id){

        $data=Product::find()->asArray()->select(['product.*', 'product.author_id','author_name','author.description as author_desc', 'publisher_name', 'supplier_name','author_img']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id')
            ->join('LEFT JOIN', 'publisher',
                        'publisher.publisher_id =product.publisher_id') 
            ->join('LEFT JOIN', 'supplier',
                        'supplier.supplier_id =product.supplier_id')   
            ->where('product.status=1 and product_id=:id',['id'=>$id])->one();
             
        return $data;
    }

    public function getProNewPublished($id,$limit){//lấy sách mới phát hành của từng danh mục con cat_id
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 AND category.status = 1 AND product.cat_id=:catid',['catid'=>$id])
            ->orderBy(['date_release'=>SORT_DESC])
            ->limit($limit)
            ->all();  
        return $data;
    }

    public function getProNewPublishedIndex($id,$limit){//tim tất cả sách mới phát hành của danh mục cha
        $pager=$this->getPagerIndex($id);
        $data=Product::find()->asArray()->select(['product.*', 'parent_id','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->where('product.status=1 AND category.status = 1 AND parent_id='.$id)  
            ->orderBy(['date_release'=>SORT_DESC])
            ->limit($limit)
            ->all();  
        return $data;
    }

    
    public function getPagerNewProIndex($id){
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*', 'parent_id','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->where('product.status=1 AND category.status = 1 AND parent_id=:id',['id'=>$id])
            ->andWhere(['between', 'date_release', $date_start, $date_end ])  
            ->orderBy(['date_release'=>SORT_DESC])
            ->all();    
        $pages = new Pagination(['totalCount' => count($data), 'pageSize'=>8]);
        return $pages;
    }

    public function getAllProNewPublishedIndex($id){//tim tất cả sách mới phát hành của danh mục cha trong 2 tháng
        $pager=$this->getPagerNewProIndex($id);
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*', 'parent_id','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->where('product.status=1 AND category.status = 1 AND parent_id=:id',['id'=>$id])
            ->andWhere(['between', 'date_release', $date_start, $date_end ])  
            ->orderBy(['date_release'=>SORT_DESC])
            ->offset($pager->offset)
            ->limit($pager->limit)
            ->all();  
        return $data;
    }

    public function getAllProNewOneWeekend($id){//tim tất cả sách mới phát hành của danh mục cha trong tuần
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-1 week' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*', 'parent_id','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->where('product.status=1 AND category.status = 1 AND parent_id=:id',['id'=>$id])
            ->andWhere(['between', 'date_release', $date_start, $date_end ])  
            ->orderBy(['date_release'=>SORT_DESC])
            ->all();  
        return $data;
    }

    public function getAllProNewAll($limit){//tim tất cả sách mới phát hành của danh mục cha
       
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1')
            ->limit($limit)
            ->orderBy(['date_release'=>SORT_DESC])
            ->all();
         return $data;
    }
    //list book
    public function getPagerAllProNewListbook($id){
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 AND category.status = 1 AND product.cat_id=:catid',['catid'=>$id])
            ->andWhere(['between', 'date_release', $date_start, $date_end ]) 
            ->orderBy(['date_release'=>SORT_DESC])
            ->all(); 
        $pages = new Pagination(['totalCount' => count($data), 'pageSize'=>self::PAGE_SIZE]);
        return $pages;
    }

    public function getAllProNewListbook($id){//tim tất cả sách mới phát hành của danh mục con trong 2 tháng
        $pager=$this->getPagerAllProNewListbook($id);
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 AND category.status = 1 AND product.cat_id=:catid',['catid'=>$id])
            ->andWhere(['between', 'date_release', $date_start, $date_end ]) 
            ->orderBy(['date_release'=>SORT_DESC])
            ->offset($pager->offset)
            ->limit($pager->limit)
            ->all();  
        return $data;
    }

    public function getAllProNewOneWeekendListbook($id){//tim tất cả sách mới phát hành của danh mục cha trong 2 tháng
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-1 week' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 AND category.status = 1 AND product.cat_id=:catid',['catid'=>$id])
            ->andWhere(['between', 'date_release', $date_start, $date_end ]) 
            ->orderBy(['date_release'=>SORT_DESC])
            ->all();   
        return $data;
    }

    //lấy tất cả sách mới phát hành (không theo category)
    public function getPagerAllNewProStore(){
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1')
            ->andWhere(['between', 'date_release', $date_start, $date_end ]) 
            ->orderBy(['date_release'=>SORT_DESC])
            ->all(); 
        $pages = new Pagination(['totalCount' => count($data), 'pageSize'=>self::PAGE_SIZE]);
        return $pages;
    }

    public function getAllNewProStore(){
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );

        $pager=$this->getPagerAllNewProStore();
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1')
            ->andWhere(['between', 'date_release', $date_start, $date_end ]) 
            ->orderBy(['date_release'=>SORT_DESC])
            ->offset($pager->offset)
            ->limit($pager->limit)
            ->all();   
        return $data;
    } 

    public function getAllNewProStoreWeek(){
        $date_end=date('Y-m-d',time());
        $date_start = strtotime ( '-1 week' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1')
            ->andWhere(['between', 'date_release', $date_start, $date_end ]) 
            ->orderBy(['date_release'=>SORT_DESC])
            ->all();   
        return $data;
    } 
    /*
    select tất cả sách giảm giá từ cao xuống thấp
     */
    public function getPagerProSale(){
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 and sale>0')
            ->orderBy(['sale'=>SORT_DESC])
            ->all();
        $pages = new Pagination(['totalCount' => count($data), 'pageSize'=>self::PAGE_SIZE]);
        return $pages;
    }

    public function getProSale(){
        $pager=$this->getPagerProSale();
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 and sale>0')
            ->orderBy(['sale'=>SORT_DESC])
            ->offset($pager->offset)
            ->limit($pager->limit)
            ->all();   
        return $data;
    }

    public function getProSaleAll($limit){
        $pager=$this->getPagerProSale();
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 

            ->where('product.status=1 and sale>0')
            ->orderBy(['sale'=>SORT_DESC])
            ->limit($limit)
            ->all();   
        return $data;
    }

    public function getProSaleByCatId($id, $limit){ //lấy ra sách giảm giá theo danh mục
        $pager=$this->getPagerProSale();
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->join('INNER JOIN', 'category',
                        'category.cat_id =product.cat_id') 
            ->where('product.status=1 and parent_id=:id and sale>0',['id'=>$id])
            ->orderBy(['sale'=>SORT_DESC])
            ->limit($limit)
            ->all(); 
        
        return $data;
    }

    /*
    query sách bán chạy
     */
    public function getProBestSeller($type, $value){
        $data=array();
        if($type=="thang"){
            $data=Product::find()->asArray()->select(['product.*','author_name','SUM(order_detail.qty) as sum_qty']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->join('INNER JOIN', 'order_detail',
                        'order_detail.product_id =product.product_id') 
            ->join('INNER JOIN', 'order',
                        'order_detail.order_id =order.order_id')
            ->where('product.status=1 and MONTH(order.created_at)=:month',['month'=>$value])
            ->groupBy(['order_detail.product_id'])
            ->orderBy(['sum_qty'=>SORT_DESC])
            ->limit(100)
            // ->offset($pager->offset)
            // ->limit($pager->limit)
            ->all();  

        }
        elseif ($type=="nam") {
            $data=Product::find()->asArray()->select(['product.*','author_name','SUM(order_detail.qty) as sum_qty']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->join('INNER JOIN', 'order_detail',
                        'order_detail.product_id =product.product_id') 
            ->join('INNER JOIN', 'order',
                        'order_detail.order_id =order.order_id')
            ->where('product.status=1 and YEAR(order.created_at)=:year',['year'=>$value])
            ->groupBy(['order_detail.product_id'])
            ->orderBy(['sum_qty'=>SORT_DESC])
            ->limit(100)
            // ->offset($pager->offset)
            // ->limit($pager->limit)
            ->all(); 
        }
        elseif ($type=="tuan") {
            $date_start= date ( 'Y-m-j 00:00:00' , strtotime ( $value ) );
            $date_end = strtotime ( '+6 day' , strtotime ( $value ) ) ;
            $date_end = date ( 'Y-m-j 23:59:59' , $date_end );
            $data=Product::find()->asArray()->select(['product.*','author_name','SUM(order_detail.qty) as sum_qty']) 
            ->from('product')
            ->join('LEFT JOIN', 'author',
                        'author.author_id =product.author_id') 
            ->join('INNER JOIN', 'order_detail',
                        'order_detail.product_id =product.product_id') 
            ->join('INNER JOIN', 'order',
                        'order_detail.order_id =order.order_id')
            ->where('product.status=1')
            ->andWhere(['between', 'order.created_at', $date_start, $date_end ])
            ->groupBy(['order_detail.product_id'])
            ->orderBy(['sum_qty'=>SORT_DESC])
            ->limit(100)
            // ->offset($pager->offset)
            // ->limit($pager->limit)
            ->all(); 
        }
        return $data;
    }

    function getResultSearch($q){
        // $data=Product::find()->asArray()->select(['product.*', 'author_name', 'cat_name','supplier_name','publisher_name']) 
        //     ->from('product')
        //     ->join('LEFT JOIN', 'author',
        //                 'author.author_id =product.author_id')
        //     ->join('LEFT JOIN', 'publisher',
        //                 'publisher.publisher_id =product.publisher_id') 
        //     ->join('LEFT JOIN', 'supplier',
        //                 'supplier.supplier_id =product.supplier_id') 
        //     ->join('INNER JOIN', 'category',
        //                 'category.cat_id =product.cat_id') 

        //     ->where('product.status=1 AND (product_name LIKE :namePro OR author_name LIKE :nameAu OR publisher_name LIKE :namePub OR supplier_name LIKE :nameSup OR cat_name LIKE :nameCat)')
        //     ->addParams([
        //         'namePro'=>'%'.$q.'%',
        //         'nameAu'=>'%'.$q.'%',
        //         'namePub'=>'%'.$q.'%',
        //         'nameSup'=>'%'.$q.'%',
        //         'nameCat'=>'%'.$q.'%',
        //     ])->all();
        
        $data=Product::find()->asArray()->select(['product.*', 'author_name', 'cat_name','supplier_name','publisher_name']) 
        ->addSelect("MATCH(author.author_name) AGAINST (:query_search IN BOOLEAN MODE) as ascore")
        ->addSelect("MATCH(product.product_name,product.metakeyword) AGAINST (:query_search IN BOOLEAN MODE) as pscore")
        ->addSelect("MATCH(category.cat_name) AGAINST (:query_search IN BOOLEAN MODE) as cscore")
        ->addSelect("MATCH(supplier.supplier_name) AGAINST (:query_search IN BOOLEAN MODE) as sscore")
        ->from('product')

        ->join('LEFT JOIN', 'author',
                    'author.author_id =product.author_id')
        ->join('LEFT JOIN', 'supplier',
                    'supplier.supplier_id =product.supplier_id') 
        ->join('INNER JOIN', 'category',
                    'category.cat_id =product.cat_id') 
        ->join('LEFT JOIN', 'publisher',
                    'publisher.publisher_id =product.publisher_id')
        ->where('product.status=1')
        ->andWhere("MATCH(product.product_name,product.metakeyword) AGAINST (:query_search IN BOOLEAN MODE)")
        ->orWhere("MATCH(author.author_name) AGAINST (:query_search IN BOOLEAN MODE)")
        ->orWhere("MATCH(category.cat_name) AGAINST (:query_search IN BOOLEAN MODE)")
        ->orWhere("MATCH(supplier.supplier_name) AGAINST (:query_search IN BOOLEAN MODE)")
        ->addParams([':query_search' => $q])
        ->limit(self::LIMIT_NUMBER)
        ->orderBy('pscore,cscore,sscore,ascore DESC')
        ->all();
        return $data;
    }
    public function getProOfAuthor($id){
        $data=Product::find()->asArray()->select(['product.*','author_name']) 
            ->from('product')
            ->join('LEFT JOIN', 'author','author.author_id =product.author_id') 
            ->where('product.author_id=:id',['id'=>$id])
            ->all();
        return $data;
    }
    //lọc theo trạng thái sách(mới nhất, bán chạy, a-z,...) của danh mục con
    function filterBook($url,$status,$id,$page,$num_page){
        
        $start_page=($page-1)*$num_page;
        $data="";
        if(($url==="listbook" || $url==="index") && $id!==null){
            $cat_id="";
            if($url==="listbook"){
                $cat_id="product.cat_id";
            }
            elseif($url==="index"){
                $cat_id="parent_id";
            }
            if($status=="new"){
            $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 

                ->where('product.status=1 AND category.status = 1 AND '.$cat_id.'=:catid',['catid'=>$id])
                ->orderBy(['date_release'=>SORT_DESC])
                ->offset($start_page)
                ->limit($num_page)
                ->all();  
            }
            elseif ($status=="az") {
               $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->where('product.status=1 and '.$cat_id.'=:id',['id'=>$id])
                ->orderBy(['product_name'=>SORT_ASC])
                ->offset($start_page)
                ->limit($num_page)
                ->all();
            }
            elseif ($status=="za") {
                $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->where('product.status=1 and '.$cat_id.'=:id',['id'=>$id])
                ->orderBy(['product_name'=>SORT_DESC])
                ->offset($start_page)
                ->limit($num_page)
                ->all();
            }
            elseif ($status=="price_asc") {
                $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->where('product.status=1 and '.$cat_id.'=:id',['id'=>$id])
                ->orderBy(['price_out*(100-sale)/100'=>SORT_ASC])
                ->offset($start_page)
                ->limit($num_page)
                ->all();
            }
            elseif ($status=="price_desc") {

                $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->where('product.status=1 and '.$cat_id.'=:id',['id'=>$id])
                ->orderBy(['price_out*(100-sale)/100'=>SORT_DESC])
                ->offset($start_page)
                ->limit($num_page)
                ->all();
            }
            elseif ($status=="sale_desc") {
                $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->where('product.status=1 and sale>0 and '.$cat_id.'=:id',['id'=>$id])
                ->orderBy(['sale'=>SORT_DESC])
                ->offset($start_page)
                ->limit($num_page)
                ->all();
            }
            elseif ($status=="best_seller") {
                $time=time();
                $date_end=date('Y-m-d',$time);
                $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
                $date_start = date ( 'Y-m-j' , $date_start );
                $data=Product::find()->asArray()->select(['product.*','author_name','SUM(order_detail.qty) as sum_qty']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                ->join('INNER JOIN', 'category',
                            'category.cat_id =product.cat_id') 
                ->join('INNER JOIN', 'order_detail',
                            'order_detail.product_id =product.product_id') 
                ->join('INNER JOIN', 'order',
                            'order_detail.order_id =order.order_id')
                ->where('product.status=1 and '.$cat_id.'=:id',['id'=>$id])
                ->andWhere(['between', 'order.created_at', $date_start, $date_end ])
                ->groupBy(['order_detail.product_id'])
                ->orderBy(['sum_qty'=>SORT_DESC])
                ->offset($start_page)
                ->limit($num_page)
                ->all(); 
            }
       
        }

        elseif($url=='pro_sale' || $url=='author'){
            $strAndWhere="";
            if($url=="author"){
                $strAndWhere="and author.author_id=".$id;
            }
            $orderBy=array();
            if($status=="new"){
                $orderBy=['date_release'=>SORT_DESC];
            }
            elseif ($status=="az") {
              
                $orderBy=['product_name'=>SORT_ASC];
              
            }
            elseif ($status=="za") {
               
                $orderBy=['product_name'=>SORT_DESC];
                
            }
            elseif ($status=="price_asc") {
              
                $orderBy=['price_out*(100-sale)/100'=>SORT_ASC];
               
            }
            elseif ($status=="price_desc") {
                $orderBy=['price_out*(100-sale)/100'=>SORT_DESC];
               
            }
            elseif ($status=="sale_desc") {
                
                $orderBy=['sale'=>SORT_DESC];
                
            }
            elseif ($status=="best_seller") {

                $time=time();
                $date_end=date('Y-m-d',$time);
                $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
                $date_start = date ( 'Y-m-j' , $date_start );

                $data=Product::find()->asArray()->select(['product.*','author_name','SUM(order_detail.qty) as sum_qty']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 
                
                ->join('INNER JOIN', 'order_detail',
                            'order_detail.product_id =product.product_id') 
                ->join('INNER JOIN', 'order',
                            'order_detail.order_id =order.order_id')
                ->where('product.status=1 and sale>0 '.$strAndWhere)
                ->andWhere(['between', 'order.created_at', $date_start, $date_end ])
                ->groupBy(['order_detail.product_id'])
                ->orderBy(['sum_qty'=>SORT_DESC])
                ->offset($start_page)
                ->limit($num_page)
                ->all(); 
            }
            if($data===""){

            $data=Product::find()->asArray()->select(['product.*','author_name']) 
                ->from('product')
                ->join('LEFT JOIN', 'author',
                            'author.author_id =product.author_id') 

                ->where('product.status=1 AND sale>0 '.$strAndWhere)
                ->orderBy($orderBy)
                ->offset($start_page)
                ->limit($num_page)
                ->all();
            }
        }

        return $data;
    }
    public function getAllBestSeller($limit){//show data tại trang home
        $time=time();
        $date_end=date('Y-m-d',$time);
        $date_start = strtotime ( '-2 month' , strtotime ( $date_end ) ) ;
        $date_start = date ( 'Y-m-j' , $date_start );
        $data=Product::find()->asArray()->select(['product.*','author_name','SUM(order_detail.qty) as sum_qty']) 
        ->from('product')
        ->join('LEFT JOIN', 'author',
                    'author.author_id =product.author_id') 
        ->join('INNER JOIN', 'category',
                    'category.cat_id =product.cat_id') 
        ->join('INNER JOIN', 'order_detail',
                    'order_detail.product_id =product.product_id') 
        ->join('INNER JOIN', 'order',
                    'order_detail.order_id =order.order_id')
        ->where('product.status=1')
        ->andWhere(['between', 'order.created_at', $date_start, $date_end ])
        ->groupBy(['order_detail.product_id'])
        ->orderBy(['sum_qty'=>SORT_DESC])
        ->limit($limit)
        ->all();
        return $data;

    }
 
}
