<?php

namespace backend\controllers;

use Yii;
use backend\models\Product;
use backend\models\ProductSearch;
use backend\models\Images;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Category;
use backend\models\Publisher;
use backend\models\Supplier;;
use backend\models\Author;
use backend\models\Translator;
use backend\models\User;
use yii\web\UploadedFile;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;




/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],

        ];
    }

    /**
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Product model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     *
     * giải pháp update là xóa hết rồi create lại
     */
    public function actionCreate()
    {
        $modelTranslator=new Translator();
        $modelAuthor = new Author();
        $modelPublisher = new Publisher();
        $modelSupplier = new Supplier();
        $modelCategory = new Category();
        $modleUser = new User;

        $dataTranslator = $modelTranslator->getAllTranslator();
        $dataAuthor = $modelAuthor->getAllAuthor();
        $dataPublisher =$modelPublisher->getAllPublisher();
        $dataSupplier = $modelSupplier->getAllSupplier();
        $dataCategory = $modelCategory->getAllParentCategory();
        $dataAllSub = $modelCategory->getSubCategory();
       

        $listTranslator = array();
        $listAuthor = array();
        $listPublisher = array();
        $listSupplier = array();
        $catParent = array();
        $catSub = array();
        // $listUserRole = array();

        foreach ($dataTranslator as $key => $value) {
            $listTranslator[$value['translator_id']]=$value['translator_name'];
        }
        foreach ($dataAuthor as $key => $value) {
            $listAuthor[$value['author_id']]=$value['author_name'];
        }
        foreach ($dataPublisher as $key => $value) {
            $listPublisher[$value['publisher_id']]=$value['publisher_name'];
        }
        foreach ($dataSupplier as $key => $value) {
            $listSupplier[$value['supplier_id']]=$value['supplier_name'];
        }
        foreach ($dataCategory as $key => $value) {
            $catParent[$value['cat_id']]=$value['cat_name'];
        }
        foreach ($dataAllSub as $key => $value) {
            $catSub[$value['cat_id']]=$value['cat_name'];
        }
        


        $model = new Product();
        $time=time();
        $model->created_at=$time;
        $model->updated_at=$time;

        if ($model->load(Yii::$app->request->post()))
        {

            $_post=Yii::$app->request->post();
            // echo "<pre>";print_r($_post);die();
            if($_post['Product']['cat_id'])
            {
                $model->cat_id=$_post['Product']['cat_id'];
            }
            else{
                $model->cat_id=$_post['Product']['catParent'];
            }
            $model->price_out=(int)$_post['Product']['price_out'];

            if($model->save())
            {
                $product_id=$model->product_id;
                
                $model->attachment = UploadedFile::getInstances($model, 'attachment');
                
                if ($model->attachment) {

                    foreach ($model->attachment as $attachment) {
                        $modelImage= new Images();
                        $modelImage->product_id=$product_id;
                        $path = '../../source/' . $attachment->baseName . '.' . $attachment->extension;
                        $count = 0;
                        
                        while(file_exists($path)) {
                           $path = '../../source/' . $attachment->baseName . '_'.$count.'.' . $attachment->extension;
                           $count++;
                        
                        }
                        
                        $attachment->saveAs($path);
                        
                        $modelImage->img_link=$path;

                        $modelImage->save(false);
                    } 
                    
                }
                 Yii::$app->getSession()->setFlash(
                            'success','Thêm mới sách thành công'
                        );
                return $this->redirect('index');
            }else 
            return $this->render('create', [
                'model' => $model,
                'listTranslator'=>$listTranslator,
                'listAuthor'=>$listAuthor,
                'listPublisher'=>$listPublisher,
                'listSupplier'=>$listSupplier,
                'catParent' =>$catParent,
                'catSub' =>$catSub,
               
            ]);
        
        }
         else {
            return $this->render('create', [
                'model' => $model,
                'listTranslator'=>$listTranslator,
                'listAuthor'=>$listAuthor,
                'listPublisher'=>$listPublisher,
                'listSupplier'=>$listSupplier,
                'catParent' =>$catParent,
                'catSub' =>$catSub,
               
            ]);
        }
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        $time=time();
        $model->updated_at=$time;

        $modelTranslator=new Translator();
        $modelAuthor = new Author();
        $modelPublisher = new Publisher();
        $modelSupplier = new Supplier();
        $modelCategory = new Category();
        // $modleUser = new User;

        $dataTranslator = $modelTranslator->getAllTranslator();
        $dataAuthor = $modelAuthor->getAllAuthor();
        $dataPublisher =$modelPublisher->getAllPublisher();
        $dataSupplier = $modelSupplier->getAllSupplier();
        $dataCategory = $modelCategory->getAllParentCategory();
        $dataAllSub = $modelCategory->getSubCategory();
        // $dataUser = $modleUser->getUserByRole(Yii::$app->user->id);

        $listTranslator = array();
        $listAuthor = array();
        $listPublisher = array();
        $listSupplier = array();
        $catParent = array();
        $catSub = array();
        // $listUserRole = array();

        foreach ($dataTranslator as $key => $value) {
            $listTranslator[$value['translator_id']]=$value['translator_name'];
        }
        foreach ($dataAuthor as $key => $value) {
            $listAuthor[$value['author_id']]=$value['author_name'];
        }
        foreach ($dataPublisher as $key => $value) {
            $listPublisher[$value['publisher_id']]=$value['publisher_name'];
        }
        foreach ($dataSupplier as $key => $value) {
            $listSupplier[$value['supplier_id']]=$value['supplier_name'];
        }
        foreach ($dataCategory as $key => $value) {
            $catParent[$value['cat_id']]=$value['cat_name'];
        }
        foreach ($dataAllSub as $key => $value) {
            $catSub[$value['cat_id']]=$value['cat_name'];
        }
        // foreach ($dataUser as $key => $value) {
        //     $listUserRole[$value['id']]=$value['username'];
        // }

        $cat_id=Product::find()->where('status=1 AND product_id=:proId',['proId'=>$id])->one();
        $Cat=Category::find()->where('status=1 AND cat_id=:catId',['catId'=>$cat_id['cat_id']])->one();
        $valueCat=Category::getParentCategory($Cat['parent_id']);
        // echo $valueCat['cat_id'];die();
        
        //print_r($model->catParent);die();
        
        $groupImg=new Images();

        $listImage=ArrayHelper::map(Images::find()->asArray()->where('product_id=:id',['id'=>$id])->all(), 'img_id', 'img_link');
        
        $image_before=$model->image;
        $image_after=$model->image_after;
        if ($model->load(Yii::$app->request->post())){
            if($model->save()) {

                $product_id=$model->product_id;
                
                $model->attachment = UploadedFile::getInstances($model, 'attachment');
                
                if ($model->attachment) {

                    foreach ($model->attachment as $attachment) {
                        $modelImage= new Images();
                        $modelImage->product_id=$product_id;
                        $path = '../../source/' . $attachment->baseName . '.' . $attachment->extension;
                        $count = 0;
                        
                        while(file_exists($path)) {
                           $path = '../../source/' . $attachment->baseName . '_'.$count.'.' . $attachment->extension;
                           $count++;
                        
                        }
                        
                        $attachment->saveAs($path);
                        
                        $modelImage->img_link=$path;

                        $modelImage->save(false);
                    } 
                    
                }
                return $this->redirect(['index']);
            }
            else{
                $model->catParent=$valueCat;
                return $this->render('update', [
                    'model' => $model,
                    'listTranslator'=>$listTranslator,
                    'listAuthor'=>$listAuthor,
                    'listPublisher'=>$listPublisher,
                    'listSupplier'=>$listSupplier,
                    'catParent' =>$catParent,
                    'catSub' =>$catSub,
                    // 'listUserRole' => $listUserRole,
                    'valueCat'=>$valueCat,
                    'listImage'=>$listImage,
                    'image_after'=>$image_after,
                    'image_before'=>$image_before,
                    
                ]);
            }
        } else {
            $model->catParent=$valueCat;
            return $this->render('update', [
                'model' => $model,
                'listTranslator'=>$listTranslator,
                'listAuthor'=>$listAuthor,
                'listPublisher'=>$listPublisher,
                'listSupplier'=>$listSupplier,
                'catParent' =>$catParent,
                'catSub' =>$catSub,
                // 'listUserRole' => $listUserRole,
                'valueCat'=>$valueCat,
                'listImage'=>$listImage,
                'image_after'=>$image_after,
                'image_before'=>$image_before,
                
            ]);
        }
    }
    //xóa ảnh 
    public function actionDeleteImage($id){
        Images::findOne($id)->delete();
        return Json::encode('{}');//trả về chuỗi json rỗng khi xóa ảnh
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionGetsubcat($cat_id){
        $modelcat = new Category;
        
        $dataSubCat =  $modelcat->getAllSubCategory($cat_id);
        return $this->renderpartial("getsubcat",['dataSubCat'=>$dataSubCat]);
    }

    

    public function actionCreateAuthor(){
        $time = time();
        
        $modelAuthor = new Author();

        $modelAuthor->created_at=$time;
        $modelAuthor->updated_at=$time;
        $modelAuthor->status=1;

        if ($modelAuthor->load(Yii::$app->request->post()) && $modelAuthor->save()) {
            //
        } else {
            return $this->renderpartial('createAuthor', [
                'modelAuthor' => $modelAuthor,
                
            ]);
        }
    }
}
