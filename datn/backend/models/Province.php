<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $province_id
 * @property string $province_name
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User[] $users
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_name'], 'unique','message' => 'Đã có tỉnh thành này.'],
            [['province_name', 'created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['province_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'province_id' => 'ID',
            'province_name' => 'Tên Tỉnh thành',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }

    public function getAllProvince(){
        $rows = (new \yii\db\Query())
            ->select(['province_id', 'province_name'])
            ->from('province')
           
            ->all();

        return $rows;
    }

    public function getProvinceId($id)
    {
        $rows = (new \yii\db\Query())
        ->select(['province_id','province_name'])
        ->from(['province'])
        ->where(['province_id' => $id])
        
        ->all();

        return $rows;
    }

    public function getProvinceName($province_id)
    {
        $data = Province::find()->asArray()->where('province_id=:province_id',['province_id'=>$province_id] )->one();
        return $data['province_name'];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['province_id' => 'province_id']);
    }

}

