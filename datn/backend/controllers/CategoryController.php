<?php

namespace backend\controllers;

use Yii;
use backend\models\Category;
use backend\models\CategorySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends Controller
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
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();

        $time=time();
        $model->created_at=$time;
        $model->updated_at=$time;

        $listParentCat=array();

        $dataCat= $model->getAllParentCategory();

        foreach ($dataCat as $key => $value) {
            $listParentCat[$value['cat_id']]=$value['cat_name'];
        }

        if ($model->load(Yii::$app->request->post())){
            $_post =Yii::$app->request->post();
            $model->parent_id=0;
            if($_post["Category"]["parent_id"]){
                $model->parent_id=$_post["Category"]["parent_id"];
            }
            
            if($model->save()){
                return $this->redirect(['index']);
            }
            

        }  else {
            return $this->render('create', [
                'model' => $model,
                'listParentCat' =>$listParentCat,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $time=time();
        $model->updated_at=$time;

        $listParentCat=array();

        $dataCat= $model->getAllParentCategory();

        $Cat=Category::find()->where('status=1 AND cat_id='.$id)->one();
        $parentCat=Category::getParentCategory($Cat['parent_id']);


        foreach ($dataCat as $key => $value) {
            $listParentCat[$value['cat_id']]=$value['cat_name'];
        }

        $image_before=$model->cat_image;
        
        if ($model->load(Yii::$app->request->post())){
            $model->parent_id=0;
            if($_POST["Category"]["parent_id"]){
                $model->parent_id=$_post["Category"]["parent_id"];
            }
            if( $model->save()) {
                return $this->redirect('index');
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'listParentCat' =>$listParentCat,
                'parentCat' =>$parentCat,
                'image_before'=>$image_before,
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionGetsubcat($cat_id){
        $modelSubCat = new Category;
        $dataSubCat =  $modelSubCat->getAllSubCategory($cat_id);
        return $this->renderpartial("getsubcat",['dataSubCat'=>$dataSubCat]);
    }
}
