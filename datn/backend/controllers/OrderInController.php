<?php

namespace backend\controllers;

use Yii;
use backend\models\OrderIn;
use backend\models\OrderInSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Product;

/**
 * OrderInController implements the CRUD actions for OrderIn model.
 */
class OrderInController extends Controller
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
     * Lists all OrderIn models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderInSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OrderIn model.
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
     * Creates a new OrderIn model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OrderIn();
        $time=time();
        $model->date=time();
        $model->user_create=Yii::$app->user->identity->username;
        $model->status=1;

        if ($model->load(Yii::$app->request->post())){
            if($model->save()) {

                $id=$model->product_id;
                
                $modelPro = new Product();
                $modelPro = Product::findOne($id);
                
                $modelPro->qty=$modelPro->qty + $model->qty;// mỗi lần nhập thêm sản phẩm thì sản phẩm có id tương ứng bên bảng cũng được update tăng lên
                
                $modelPro->save();
                // print_r($modelPro->errors);die;
                Yii::$app->getSession()->setFlash(
                        'success','Nhập hàng thành công'
                    );
                return $this->redirect('create');
                
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OrderIn model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $qty_old=$model->qty;
        $model->user_create=Yii::$app->user->identity->username;
        if ($model->load(Yii::$app->request->post())){
            $qty_new=$_POST['OrderIn']['qty'];
            $model->save();
            
            if($model->save()) {
                $modelPro = Product::findOne($model->product_id);
                $modelPro->qty=$modelPro->qty - $qty_old + $qty_new;
                // echo "<pre>";print_r($modelPro->qty);die;
                $modelPro->save();

                Yii::$app->getSession()->setFlash(
                            'success','Cập nhật nhập hàng thành công'
                        );
                return $this->redirect('index');
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OrderIn model.
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
     * Finds the OrderIn model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OrderIn the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = OrderIn::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
