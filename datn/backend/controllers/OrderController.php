<?php

namespace backend\controllers;
use kartik\grid\EditableColumnAction;

use Yii;
use backend\models\Order;
use backend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
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
     * Lists all Order models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // if (Yii::$app->request->post('hasEditable')) {
        // // instantiate your book model for saving
        //     $orderId = Yii::$app->request->post('editableKey');
        //     $model = Order::findOne($orderId);

        //     // store a default json response as desired by editable
        //     $out = Json::encode(['output'=>'', 'message'=>'']);

        //     // fetch the first entry in posted data (there should only be one entry 
        //     // anyway in this array for an editable submission)
        //     // - $posted is the posted data for Book without any indexes
        //     // - $post is the converted array for single model validation
        //     $posted = current($_POST['Order']);
        //     $post = ['Order' => $posted];

        //     // load model like any single model validation
        //     if ($model->load($post)) {
        //     // can save model or do something before saving model
        //     $model->save();

        //     // custom output to return to be displayed as the editable grid cell
        //     // data. Normally this is empty - whereby whatever value is edited by
        //     // in the input by user is updated automatically.
        //     $output = '';

        //     // specific use case where you need to validate a specific
        //     // editable column posted when you have more than one
        //     // EditableColumn in the grid view. We evaluate here a
        //     // check to see if buy_amount was posted for the Book model
        //     if (isset($posted['status'])) {
        //     $output = $model->status;
        //     }

        //     // similarly you can check if the name attribute was posted as well
        //     // if (isset($posted['name'])) {
        //     // $output = ''; // process as you need
        //     // }
        //     $out = Json::encode(['output'=>$output, 'message'=>'']);
        //     }
        //     // return ajax json encoded response and exit
        //     echo $out;
        //     return;
        // }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Order model.
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
     * Creates a new Order model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Order();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Order model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Order model.
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
     * Finds the Order model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Order the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Order::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'check_order' => [                                       // identifier for your editable action
               'class' => EditableColumnAction::className(),     // action class name
               'modelClass' => Order::className(),                // the update model class
               'outputValue' => function ($model, $attribute, $key, $index) {
                    $status=array('1' => '<span class="label label-primary">Đang duyệt</span>',
                                  '2'=>'<span class="label label-warning">Đang giao<span>',
                                  '3'=>'<span class="label label-success">Đã giao</span>',
                                  '4'=>'<span class="label label-danger">Hủy<span>' );
                    $value_status = $model->$attribute;                 // your attribute value
                    if ($attribute == 'status') {           // selective validation by attribute
                        foreach ($status as $key => $value) {
                            if($value_status ==$key){
                                
                                return $value;
                            }
                        }
                    }
                    
                    $model->uesr_check = Yii::$app->user->identity->id;
                    $model->save();
                       // return formatted value if desired
                    return '';                                   // empty is same as $value
               },
               'outputMessage' => function($model, $attribute, $key, $index) {
                     return '';                                  // any custom error after model save
               },                // the update model class
            ]
        ]);
    }
}
