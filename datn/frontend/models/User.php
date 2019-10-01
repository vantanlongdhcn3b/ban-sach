<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $province_id
 * @property string $avata
 * @property string $phone
 * @property string $address
 * @property integer $gender
 * @property string $birthday
 * @property integer $role
 * @property string $fullname
 *
 * @property Order[] $orders
 * @property Province $province
 */
class User extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    public $password;
    public $oldpass;
    public $newpass;
    public $repeatnewpass;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['oldpass','newpass','repeatnewpass'],'trim'],
            ['oldpass','findPasswords'],
            ['repeatnewpass','compare','compareAttribute'=>'newpass'],
            [['oldpass','newpass','repeatnewpass'], 'string', 'min' => 6,'message'=>'{attribute} phải chứa ít nhất 6 kí tự'],

            ['username', 'trim'],
            ['email', 'trim'],
            ['email', 'email'],

            [['password'], 'trim'],

            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'role'], 'required'],
            [['status', 'created_at', 'updated_at', 'province_id', 'gender', 'role'], 'integer'],
            [['birthday'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'avata', 'address', 'fullname'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 11],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            // [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'province_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Họ và tên',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'province_id' => 'Province ID',
            'avata' => 'Avata',
            'phone' => 'Phone',
            'address' => 'Địa chỉ',
            'gender' => 'Giới tính',
            'birthday' => 'Ngày sinh',
            'role' => 'Role',
            'fullname' => 'Fullname',

            'oldpass'=>'Mật khẩu',
            'newpass'=>'Mật khẩu mới',
            'repeatnewpass'=>'Xác nhận mật khẩu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['province_id' => 'province_id']);
    }

    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

     public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }
     public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

     public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
    
}
