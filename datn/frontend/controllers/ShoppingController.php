<?php

namespace frontend\controllers;
use frontend\models\Product;
use frontend\common\Cart;
use Yii;
use yii\web\Session;

use frontend\models\Order;
use frontend\models\OrderDetail;
use frontend\models\OrderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Province;

use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\Communication;

class ShoppingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionAddcart($id){//product_id
    	$modelPro=new Product();
    	$productInfor=$modelPro->getProById($id);

    	$cart=new Cart();
    	$cart->addCart($id,$productInfor);
    	$session = Yii::$app->session;
    	$cartInfor=$session['cart'];

    	$totalAmount = $total = 0;
    	foreach ($cartInfor as $key => $value) {
    		$totalAmount+=$value['amount'];
    		$total+=$value['price']*$value['amount'];
    	}
    	return $this->renderAjax('cart',[
    		'cartInfor'=>$cartInfor,
    		'totalAmount'=>$totalAmount,
    		'total'=>$total,
    		]);
    }

    function actionShowcart(){

    	$session = Yii::$app->session;
    	$cartInfor=$session['cart'];

    	$totalAmount = $total = 0;
    	foreach ($cartInfor as $key => $value) {
    		$totalAmount+=$value['amount'];
    		$total+=$value['price']*$value['amount'];
    	}
    	return $this->renderPartial('showcart',[
    		'cartInfor'=>$cartInfor,
    		'totalAmount'=>$totalAmount,
    		'total'=>$total,
    		]);
    }
    public function actionDelcart($id){
    	
    	$cart=new Cart();
    	$cart->delCart($id);
    	$session = Yii::$app->session;
    	$cartInfor=$session['cart'];

    	$totalAmount = $total = 0;
    	foreach ($cartInfor as $key => $value) {
    		$totalAmount+=$value['amount'];
    		$total+=$value['price']*$value['amount'];
    	}
    	return $this->renderAjax('cart',[
    		'cartInfor'=>$cartInfor,
    		'totalAmount'=>$totalAmount,
    		'total'=>$total,
    		]);
    }
    public function actionCheckout(){

        $this->layout="cartlayout";

        $time=time();

        $model = new Order();
        $modelLogin = new LoginForm();
        $modelSignup = new SignupForm();

        $session = Yii::$app->session;
        $cartInfor=$session['cart'];

        $totalAmount = $total = 0;
        foreach ($cartInfor as $key => $value) {
            $totalAmount+=$value['amount'];
            $total+=$value['price']*$value['amount'];
        }

        $modelProvince = new Province();
        $dataProvince=$modelProvince->getAllProvince();
        $listProvince=array();

        foreach ($dataProvince as $key => $value) {
            $listProvince[$value['province_id']]=$value['province_name'];
        }
        $model->user_id=0;
        
        $model->total=$total;
        $model->status=1;
        $model->created_at=date("Y-m-d H:i:s", $time);
        $model->updated_at=$time;
        if(!Yii::$app->user->isGuest){
                $model->username=Yii::$app->user->identity->username;
                $model->email= Yii::$app->user->identity->email;
                $model->mobile=Yii::$app->user->identity->phone;
                $model->user_id=Yii::$app->user->identity->id;
                $model->address=Yii::$app->user->identity->address;
        }
        if ($model->load(Yii::$app->request->post())){
            if($model->save()) {
                $infoPost=Yii::$app->request->post();
                $Body = '<table><tr class="cart_menu"><td class="image">Item</td><td class="description">Name</td>
                <td class="price">Price</td><td class="quantity">Quantity</td><td class="total">Total</td>
                <td><td class="total">ImaGE</td>
                <td></td></tr>';

                $i=1;
                //thông báo có đơn hàng mới
                $modelComm = new Communication();
                $modelComm->status = 0;
                $modelComm->created_at = time();
                $modelComm->icon = '<i class="fa fa-shopping-cart"></i>';
                $modelComm->url='order';
                $modelComm->id=$model->order_id;
                
                $modelComm->title = '<span class="content">Có đơn hàng mới</span>';
                                    
                $modelComm->save();

                $order_id=$model->order_id;
                $model->email= $_POST['Order']['email'];
                $model->mobile=$_POST['Order']['mobile'];
                $model->address=$_POST['Order']['address'];
                foreach ($cartInfor as $keyCart => $valueCart) {
                    $Body .= '<tr><td class="cart_product">'.$i++.'</td>';
                    $Body .= '<td class="cart_product">'.$valueCart["product_name"].'</td>';
                    $Body .= '<td class="cart_product">'.$valueCart["price"].'</td>';
                    $Body .= '<td class="cart_product">'.$valueCart["amount"].'</td>';
                    $Body .= '<td class="cart_product"><img src="$value["image"]" width="50" /></td>';
                    $Body .= '<td class="cart_product">'.$valueCart["price"]*$valueCart["amount"].'</td></tr>';

                    $orderDetail=new OrderDetail();
                    $orderDetail->order_id=$order_id;
                    $orderDetail->product_id=$keyCart;
                    $orderDetail->price=$valueCart['price'];
                    $orderDetail->qty=$valueCart['amount'];
                    $orderDetail->status=1;
                    $orderDetail->created_at=$time;
                    $orderDetail->updated_at=$time;
                    
                    if($orderDetail->save()){
                        //sau khi save thì số lượng sản phẩm tương ứng trong bảng product giảm
                        $modelPro = new Product();
                        $modelPro = Product::findOne($keyCart);
                        $modelPro->qty=$modelPro->qty - $valueCart['amount'];// trừ số lượng sách tương ứng

                        $modelPro->save();
                        

                        // thông báo cho admin khi số lượng hàng sắp hết hoặc đã hết bằng cách lưu thông báo vào bảng

                        if($modelPro->qty==0){
                            $modelComm = new Communication();
                            $modelComm->status = 0;
                            $modelComm->created_at = time();
                            $modelComm->icon = '';
                            $modelComm->url='product';
                            $modelComm->id=$valueCart['product_id'];
                            $modelComm->title = 'Sản phẩm <span style="color:#F4786E">'.$valueCart['product_name'].'</span> đã hết hàng';
                            $modelComm->save();
                        }
                        if($modelPro->qty>0 && $modelPro->qty<=10){
                            $modelComm = new Communication();
                            $modelComm->status = 0;
                            $modelComm->created_at = time();
                            $modelComm->icon = 'product';
                           
                            $modelComm->id=$valueCart['product_id'];
                            $modelComm->url='product';
                            $modelComm->title = 'Sản phẩm <span style="color:#F4786E">'.$valueCart['product_name'].'</span> sắp hết hàng - Còn '.$modelPro->qty.' cuốn ';                  
                            $modelComm->save();
                        }
                        

                        
                    }
                    //send email
                    // $toEmail= $infoPost["Order"]["email"]; 
                    
                    // Yii::$app->mail->compose()
                    // ->setTo($toEmail)
                    // ->setFrom(['phamdung282@gmail.com'=> 'hahaBook'])
                    // ->setSubject('Thông tin mua hàng')  
                    // ->setHtmlBody($Body)
                    // ->send();

                }
                
            }
            unset(Yii::$app->session['cart']);
            return $this->render('checkout_success',['modelOrder'=>$model]);
            
                        // Yii::$app->getSession()->setFlash(
                        //     'success','Cảm ơn bạn đã mua hàng, kiểm tra email để xem đơn hàng của bạn.'
                        // );
            

        }
        if ($modelSignup->load(Yii::$app->request->post())) {
            //die();
            if ($user = $modelSignup->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    if(!Yii::$app->user->isGuest){
                        $model->username=Yii::$app->user->identity->username;
                        $model->email= Yii::$app->user->identity->email;
                        $model->mobile=Yii::$app->user->identity->phone;
                        $model->user_id=Yii::$app->user->identity->id;
                        $model->address=Yii::$app->user->identity->address;
                    }
                    return $this->render('checkout',[
                            'cart'=>$cartInfor,
                            'totalAmount'=>$totalAmount,
                            'total'=>$total,
                            'model' => $model,
                            'modelLogin'=>$modelLogin,
                            'modelSignup'=>$modelSignup,
                        ]);
                }
            }
        }

        if ($modelLogin->load(Yii::$app->request->post()) && $modelLogin->login()) {
            if(!Yii::$app->user->isGuest){
                $model->username=Yii::$app->user->identity->username;
                $model->email= Yii::$app->user->identity->email;
                $model->mobile=Yii::$app->user->identity->phone;
                $model->user_id=Yii::$app->user->identity->id;
                $model->address=Yii::$app->user->identity->address;
            }
            return $this->render('checkout',[
                'cart'=>$cartInfor,
                'totalAmount'=>$totalAmount,
                'total'=>$total,
                'model' => $model,
                'modelLogin'=>$modelLogin,
                'modelSignup'=>$modelSignup,
                ]);
        } else {
            if(!Yii::$app->user->isGuest){
                $model->username=Yii::$app->user->identity->username;
                $model->email= Yii::$app->user->identity->email;
                $model->mobile=Yii::$app->user->identity->phone;
                $model->user_id=Yii::$app->user->identity->id;
                $model->address=Yii::$app->user->identity->address;
            }
            return $this->render('checkout',[
                'cart'=>$cartInfor,
                'totalAmount'=>$totalAmount,
                'total'=>$total,
                'model' => $model,
                'modelLogin'=>$modelLogin,
                'modelSignup'=>$modelSignup,
                ]);
        }
        return $this->render('checkout',[
            'cart'=>$cartInfor,
            'totalAmount'=>$totalAmount,
            'total'=>$total,
            'model' => $model,
            'modelLogin'=>$modelLogin,
            'modelSignup'=>$modelSignup,
            ]);
    }

    function actionUpdatecart($id,$amount){
        $model = new Order();
        $modelPro=new Product();
        $productInfor=$modelPro->getProById($id);

        $cart=new Cart();
        $cart->updateCart($id,$amount);

        $session = Yii::$app->session;
        $cartInfor=$session['cart'];
        

        $totalAmount = $total = 0;
        foreach ($cartInfor as $key => $value) {
            $totalAmount+=$value['amount'];
            $total+=$value['price']*$value['amount'];
        }
        $modelProvince = new Province();
        $dataProvince=$modelProvince->getAllProvince();
        $listProvince=array();

        foreach ($dataProvince as $key => $value) {
            $listProvince[$value['province_id']]=$value['province_name'];
        }
        if(!Yii::$app->user->isGuest){
            $model->username=Yii::$app->user->identity->username;
            $model->email= Yii::$app->user->identity->email;
            $model->mobile=Yii::$app->user->identity->phone;
            $model->user_id=Yii::$app->user->identity->id;
            $model->address=Yii::$app->user->identity->address;
        }
        return $this->renderAjax('updateCart',[
            'cart'=>$cartInfor,
            'totalAmount'=>$totalAmount,
            'total'=>$total,
           
        ]);
    }

    function actionViewAddCart($id){
        $modelPro = new Product();
        $dataview = $modelPro->getProById($id);

        $session = Yii::$app->session;
        $cartInfor=$session['cart'];
        
        $totalAmount = $total = 0;
        foreach ($cartInfor as $key => $value) {
            $totalAmount+=$value['amount'];
            $total+=$value['price']*$value['amount'];
        }

        return $this->renderpartial('viewAddCart',[
            'dataview'=>$dataview,
            'totalAmount'=>$totalAmount,
            'total'=>$total,
            ]);
    }

}
