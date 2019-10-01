<?php

namespace backend\models;

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
    public $password_repeat;

    public $province_name;
    
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['email', 'trim'],
            ['email', 'email'],

            [['password'], 'required',  'on'=>'create','message' =>'{attribute} không được trống'],
            ['password', 'string', 'min' => 6],
            [['password_repeat'], 'required', 'on'=>'create', 'message' =>'{attribute} không được trống'],
            ['password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>"Mật khẩu không khớp" ], 
            ['password_repeat', 'string', 'min' => 6],

            [['username', 'password_hash','role','auth_key', 'email', 'created_at', 'updated_at'], 'required','message' => 'Không được để trống.'],
            [['status', 'created_at', 'updated_at', 'province_id', 'gender', 'role'], 'integer'],
            [['birthday'], 'safe'],
            [['username', 'province_name','password_hash', 'password_reset_token', 'email', 'avata', 'address', 'fullname'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['phone'], 'string', 'max' => 11],
            [['username'], 'unique','message' => '{attribute} đã được dùng.'],
            [['email'], 'unique','message' => '{attribute} đã được dùng.'],
            // password is validated by validatePassword()
            // ['password', 'validatePassword'],
            [['password_reset_token'], 'unique'],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'province_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Mật khẩu',
            'password_repeat' => 'Xác nhận mật khẩu',
            'email' => 'Email',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
            'province_id' => 'Tỉnh/Thành phố',
            'province_name' => 'Tỉnh/Thành phố',
            'avata' => 'URL',
            'phone' => 'Số điện thoại',
            'address' => 'Địa chỉ',
            'gender' => 'Giới tính',
            'birthday' => 'Ngày sinh',
            'role' => 'Quyền',
            'fullname' => 'Họ tên',
        ];
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

    public function getUserByRole($id){
        $data = User::find()->where('status=1 AND (role=1 OR role=2) and id=:idu',['idu'=>$id])->one();
        return $data;
    }

    public function getUserById($id){
        $data = User::find()->where('status=1 AND id=:idu',['idu'=>$id])->one();
        return $data;
    }
    public function getAllUser(){
        $data = User::find()->where('status=1')->all();
        return $data;
    }
    
    public function getAllUserByRole(){
        $data = User::find()->where('status=1 and role!=1')->all();
        return $data;
    }

}
