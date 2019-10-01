<?php
    namespace backend\models;
   
    use Yii;
    use yii\base\Model;
    use backend\models\User;
   
    class PasswordForm extends Model{
        public $oldpass;
        public $newpass;
        public $repeatnewpass;
        public $email;
        private $_user;
       
        public function rules(){
            return [
                [['oldpass','newpass','repeatnewpass'],'required'],
                ['oldpass','findPasswords'],
                ['repeatnewpass','compare','compareAttribute'=>'newpass'],
                
            ];
        }

       
        public function findPasswords($attribute, $params){
            $user = User::find()->where([
                'username'=>Yii::$app->user->identity->username
            ])->one();

            if (!$this->hasErrors()) {
            if (!$user || !$user->validatePassword($this->oldpass)) {
                $this->addError($attribute, 'mật khẩu không chính xác.');
            }
        }
        }
       
        public function attributeLabels(){
            return [
                'oldpass'=>'Mật khẩu cũ',
                'newpass'=>'Mật khẩu mới',
                'repeatnewpass'=>'Nhập lại mật khẩu',
            ];
        }
    } 