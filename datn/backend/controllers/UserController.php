<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use backend\models\UserSearch;
use backend\models\Province;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        

        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $modelProvince = new Province();

        $province=$modelProvince->getProvinceId($id);
        $provinceArray=array();

        foreach ($province as $key => $value) {
            $provinceArray[$value["province_id"]]=$value["province_name"];
        }

        $created_at=date("d-m-Y H:i:s", $this->findModel($id)->created_at);
        $updated_at=date("d-m-Y H:i:s", $this->findModel($id)->updated_at);

        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'province_name' => $provinceArray["$id"],
            'created_at' => $created_at,
            'updated_at' => $updated_at,

        ]);
    }
    
    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     *
     
     */
    
    public function actionCreate()
    {
        $time=time();

        $model = new User();

        $model->scenario = 'create';//require only in action create
        

        $model->created_at=$time;
        $model->updated_at=$time;
        

        $modelProvince = new Province();
        $dataProvince=$modelProvince->getAllProvince();
        $listProvince=array();

        foreach ($dataProvince as $key => $value) {
            $listProvince[$value['province_id']]=$value['province_name'];
        }
        $model->role=2;
        if ($model->load(Yii::$app->request->post())){
            try{

                $model->password = $_POST['User']['password'];
                $model->setPassword($model->password);
                $model->generateAuthKey();
                if($model->save()){
                    Yii::$app->getSession()->setFlash(
                        'success','Thêm mới User thành công'
                    );
                    return $this->redirect(['index']);
                }else{
                    Yii::$app->getSession()->setFlash(
                        'error','Lỗi, không thêm được User'
                    );
                    return $this->render('create',[
                        'model'=>$model,
                        'listProvince' => $listProvince,
                    ]);
                }
            }catch(Exception $e){
                Yii::$app->getSession()->setFlash(
                    'error',"{$e->getMessage()}"
                );
                return $this->render('create',[
                    'model'=>$model,
                    'listProvince' => $listProvince,
                ]);
            }
            
        
        } else {
            return $this->render('create', [
                'model' => $model,
                'listProvince' => $listProvince,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        
        $modelProvince = new Province();
        $dataProvince=$modelProvince->getAllProvince();
        $listProvince=array();

        foreach ($dataProvince as $key => $value) {
            $listProvince[$value['province_id']]=$value['province_name'];
        }

        $model = $this->findModel($id);
        $time=time();
        $model->updated_at=$time;
        $srcAvatar=$model->avata;
        if($srcAvatar==""){
            $srcAvatar="/hocphp/datn/backend/web/img/avata_default.png";
        }
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'listProvince' => $listProvince,
                'srcAvatar' => $srcAvatar,
                
            ]);
        }
    }

    /**
     * Deletes an existing User model.
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
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    
}
