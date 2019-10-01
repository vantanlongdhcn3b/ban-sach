<?php

namespace frontend\controllers;
use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Images;
use frontend\models\Author;
use frontend\models\Feedback;
use frontend\common\Preview;
use Yii;

class ProductController extends \yii\web\Controller
{
    public function actionIndex($id)//$id=cat_id
    {
        $modelPro = new Product();
        $modelCat = new Category();

        $pager = $modelPro->getPagerIndex($id);

        $dataAllPro = $modelPro->getProductByParentId($id);
        $dataCat = $modelCat->findCatParent($id);
        $listcatsup=$modelCat->getCatByParent($id);
        $countPro=$modelPro->totalProductByCatSup($id);
        $listPublishedIndex=$modelPro->getProNewPublishedIndex($id,4);//lấy ra sách mới phát hành, limit 4

        return $this->render('index',[
                'dataAllPro'=>$dataAllPro,
                'dataCat' => $dataCat,
                'pages'=>$pager,
                'listcatsup'=>$listcatsup,
                'countPro'=>$countPro,
                'listPublishedIndex'=>$listPublishedIndex,
            ]);
    }

    public function actionListbook($id){//$id=cat_id
    	$modelPro = new Product();

        $pager = $modelPro->getPagerProduct($id);
    	$dataPro = $modelPro->getProductByCatId($id);

    	$modelCat = new Category();
    	$dataCat = $modelCat->findCatParent($id);


        
        $listcatsup=$modelCat->getCatByParent($dataCat['parent_id']);
        $countPro=$modelPro->totalProductByCatSup($dataCat['parent_id']);

        $litsNewPublished= $modelPro->getProNewPublished($id,4);//lấy ra sách mới phát hành


        
    	return $this->render('listbook',[
    		'dataPro'=>$dataPro,
    		'dataCat'=>$dataCat,
            'litsNewPublished'=>$litsNewPublished,
            'pages'=>$pager,
            'listcatsup'=>$listcatsup,
            'countPro'=>$countPro,
    		]);
    }

    public function actionDetail($id){//$id=cat_idproduct_id

        $model=new Product();
        $modelFeed=new Feedback();
        $modelFeedSub=new Feedback();
        $dataDetail=$model->getProById($id);

        $preview=new Preview();
        $preview->addPreview($id,$dataDetail);

        $dataimage=Images::find()->asArray()->where('product_id=:id',['id'=>$id])->all();
        $dataFeed= $modelFeed->getFeedback(0,$id);
        $AVG= $modelFeed->AVGRating($id);

        $time=time();
        $modelFeed->created_at=$time;
        $modelFeed->status=0;
        $modelFeed->parent_cmt=0;
        $modelFeed->product_id=$id;
        $modelFeed->user_id=Yii::$app->user->id;
        
        if ($modelFeed->load(Yii::$app->request->post())){
            $findFeedback = Feedback::find()->asArray()
            ->where('product_id=:pdid and user_id=:uid',
                ['pdid'=>$id,
                'uid'=> Yii::$app->user->id
                ])
            ->one();

            if($findFeedback!=null){
                
                $modelFeed = Feedback::findOne($findFeedback['feedback_id']);
                $modelFeed->created_at=$time;
                $modelFeed->status=0;
                $modelFeed->parent_cmt=0;
                $modelFeed->title=$_POST['Feedback']['title'];
                $modelFeed->comment=$_POST['Feedback']['comment'];
                $modelFeed->save();
                
            }
            else{
            $modelFeed->save() ;
            }
        }

        return $this->render('detail',[
            'dataDetail'=>$dataDetail,
            'dataimage'=>$dataimage,
             'modelFeed' => $modelFeed,
             'dataFeed'=>$dataFeed,
             'modelFeedSub'=>$modelFeedSub,
             'AVG' =>$AVG,

            ]);
    }
    
    protected function findModelF($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionShowAllNewProduct($id){
        $modelPro = new Product();
        $modelCat = new Category();
        $listcatsup=$modelCat->getCatByParent($id);
        $countPro=$modelPro->totalProductByCatSup($id);
        $pager=$modelPro->getPagerNewProIndex($id);

        $dataCat = $modelCat->findCatParent($id);

        $listNewPro=$modelPro->getAllProNewPublishedIndex($id);
        $listNewProOneWeek=$modelPro->getAllProNewOneWeekend($id);

        
        return $this->render('showAllNewPublished',[
            'listNewPro'=>$listNewPro,
            'listcatsup'=>$listcatsup,
            'countPro'=>$countPro,
            'dataCat'=>$dataCat,
            'pages'=>$pager,
            'listNewProOneWeek'=>$listNewProOneWeek,
            ]);
    }

     public function actionShowAllNewProductListbook($id){
        $modelPro = new Product();

        $pager = $modelPro->getPagerAllProNewListbook($id);

        $modelCat = new Category();
        $dataCat = $modelCat->findCatParent($id);

        $listcatsup=$modelCat->getCatByParent($dataCat['parent_id']);
        $countPro=$modelPro->totalProductByCatSup($dataCat['parent_id']);

        $listNewPro=$modelPro->getAllProNewListbook($id);
        $listNewProOneWeek=$modelPro->getAllProNewOneWeekendListbook($id);
        
        return $this->render('showAllNewPublished',[
            'listNewPro'=>$listNewPro,
            'listcatsup'=>$listcatsup,
            'countPro'=>$countPro,
            'dataCat'=>$dataCat,
            'pages'=>$pager,
            'listNewProOneWeek'=>$listNewProOneWeek,
            ]);
    }

    public function actionShowAllNewProStore(){
        $modelPro = new Product();

        $pager = $modelPro->getPagerAllNewProStore();

        $modelCat = new Category();
        $dataCatParent=$modelCat->getCategory(0);

        $listNewPro=$modelPro->getAllNewProStore();
        $listNewProOneWeek=$modelPro->getAllNewProStoreWeek();
        
        return $this->render('showProNew',[
            'listNewPro'=>$listNewPro,
            'pages'=>$pager,
            'listNewProOneWeek'=>$listNewProOneWeek,
            'dataCatParent' =>$dataCatParent,
            ]);
        
    }
    public function actionKhoSachGiamGia(){
        $model = new Product();

        $modelCat = new Category();
        $dataCatParent=$modelCat->getCategory(0);

        $dataProSale = $model->getProSale();
        $pager = $model->getPagerProSale();
        return $this->render('showProSale',[
            'dataProSale'=>$dataProSale,
            'pages'=>$pager,
            'dataCatParent' =>$dataCatParent,
            
            ]);
    }
    public function actionSachBanChayNhat(){
        $thu=date('w',time());
        // 
                                                        
        $date= date('Y-m-d',time());
        $date_start="";

        if($thu==7){
            $date_start = strtotime ( '-6 day' , strtotime ( $date ) ) ;
            $date_start = date ( 'Y-m-j' , $date_start );
        }
        else{
            $a=$thu+6;
            $date_start = strtotime ( "-$a day" , strtotime ( $date ) ) ;
            $date_start = date ( 'Y-m-j' , $date_start );   
        }
        $type="tuan";
        $value=$date_start;
        $modelPro = new Product();
        $listProBest = $modelPro->getProBestSeller($type, $value);

        $modelCat=new Category();
        $dataCatParent=$modelCat->getCategory(0);
        $modelCat=new Category();
        // $dataAllPro = $modelPro->getProductByParentId($id);
        
        // echo "<pre>";print_r($listProBest);die();
        return $this->render('showProBestSeller',[
                'dataCatParent'=>$dataCatParent,
                'listProBest' =>$listProBest,
                'startDate' =>$value,
                
            ]);
    }
    public function actionSachBanChay($type, $value){
        
        $modelPro = new Product();
        $listProBest = $modelPro->getProBestSeller($type, $value);

        $modelCat=new Category();
        $dataCatParent=$modelCat->getCategory(0);
        

        return $this->render('showProBestSeller',[
                'dataCatParent'=>$dataCatParent,
                'listProBest' =>$listProBest,
               // 'listcatsup'=>$listcatsup,
                
            ]);
    }
    public function actionAuthor($id){
        $modelAu = new Author();
        $dataAu = $modelAu->getAuthorById($id);

        $modelPro = new Product();
        $proOfAu = $modelPro->getProOfAuthor($id);

         $modelCat=new Category();
        $dataCatParent=$modelCat->getCategory(0);
        return $this->render('showAuthor',[
                'dataCatParent'=>$dataCatParent,
                'dataAu' =>$dataAu,
                'proOfAu'=>$proOfAu,
                
            ]);
    }
    public function actionFilterListbook($url,$status, $id,$page,$view,$num_page){//id là cat_id của danh mục con
        $modelPro = new Product();
        $dataAllPro = $modelPro->filterBook($url,$status,$id, $page,$num_page);
        if($view=="grid"){
            return $this->renderpartial('viewgrid',['dataAllPro'=>$dataAllPro]);
        }
        elseif($view=="list"){
            return $this->renderpartial('viewlist',['dataAllPro'=>$dataAllPro]);
        }
        
        
    }

    function actionPreviewbook($id){
        $model=new Product();
        $dataimage=Images::find()->asArray()->where('product_id=:id',['id'=>$id])->all();
        $dataDetail=$model->getProById($id);

        $session = Yii::$app->session;
        $preview=$session['preview'];
        return $this->renderpartial('previewBook',['dataimage'=>$dataimage,
                                    'dataDetail'=>$dataDetail,
                                    'preview_session'=>$preview,
                                    ]);
    }
}
