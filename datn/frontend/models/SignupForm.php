<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_repeat;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required','message' =>'Vui lòng nhập {attribute}'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Tài khoản này đã được dùng.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required','message' =>'Vui lòng nhập {attribute}'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Địa chỉ email này đã được dùng.'],

            ['password', 'required', 'message' =>'Vui lòng nhập {attribute}'],
            ['password', 'string', 'min' => 6],
            ['password_repeat', 'required', 'message' =>'Vui lòng nhập {attribute}'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Mật khẩu không khớp" ], 
            ['password_repeat', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);

        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
