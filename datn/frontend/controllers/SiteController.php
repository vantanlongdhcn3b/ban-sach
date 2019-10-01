<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use frontend\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    public $successUrl = 'Success';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['changepassword'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [ 'login', 'error', 'auth' ],
                        'allow'   => true,
                    ],
                ],
                    
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
                // 'successUrl' => Yii::$app->homeUrl,
            ],
        ];
    }

    public function successCallback($client)
    {
        $attributes = $client->getUserAttributes();
            // user login or signup comes here
            /*
            Checking facebook email registered yet?
            Maxsure your registered email when login same with facebook email
            die(print_r($attributes)); for debug
            */
            
             $user = \common\models\User::find()->where(['email'=>$attributes['email']])->one();
            
            if(!empty($user)){
                Yii::$app->user->login($user);
                
            }else{
                
                // Save session attribute user from FB
                $session = Yii::$app->session;
                $session['attributes']=$attributes;
               // die(print_r($session['attributes']));
                // redirect to form signup, variabel global set to successUrl
                $this->successUrl = \yii\helpers\Url::to(['signup']);

                

            }
    }
    

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        
        return $this->render('index');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {

            return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
        } else {
            return $this->renderpartial('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null)); 
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Cảm ơn bạn đã liện hệ với chúng tôi. Chúng tôi sẽ trả lời vẫn đề của bạn sớm nhất.');
            } else {
                Yii::$app->session->setFlash('error', 'Có lỗi khi gửi email của bạn.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {

        $model = new SignupForm();
        
        if ($model->load(Yii::$app->request->post())) {
            
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goBack((!empty(Yii::$app->request->referrer) ? Yii::$app->request->referrer : null));
                }
            }
        }

        return $this->renderpartial('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Kiểm tra email của bạn đê lấy mật khẩu');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Xin lỗi, chúng tối không thể nhận dạng được email của bạn');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

     public function actionChangepassword(){
        if(!Yii::$app->user->isGuest){
            $modeluser = User::find()->where([
                'email'=>Yii::$app->user->identity->email
            ])->one();
            // $modeluser->gender=
            if($modeluser->load(Yii::$app->request->post())){
                    if($modeluser->validate()){
                        try{
                            if($_POST['User']['newpass']!=""){
                                $modeluser->password = $_POST['User']['newpass'];
                                $modeluser->setPassword($modeluser->password);
                                $modeluser->generateAuthKey();
                            }
                            if($modeluser->save()){
                                
                                return $this->redirect(['changepassword']);
                            }else{
                                Yii::$app->getSession()->setFlash(
                                    'error','Password not changed'
                                );
                                return $this->redirect(['changepassword']);
                            }
                        }catch(Exception $e){
                            Yii::$app->getSession()->setFlash(
                                'error',"{$e->getMessage()}"
                            );
                            return $this->render('changepassword',[
                                'model'=>$modeluser
                            ]);
                        }
                    }else{
                        return $this->render('changepassword',[
                            'model'=>$modeluser
                        ]);
                    }
                
            }else{
                return $this->render('changepassword',[
                    'model'=>$modeluser
                ]);
            }
        }
        else{
            return $this->render('index');
        }
    }

     
    
}
