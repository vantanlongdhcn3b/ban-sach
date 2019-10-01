<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "communication".
 *
 * @property integer $communicate_id
 * @property string $title
 * @property integer $status
 * @property integer $created_at
 */
class Communication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'communication';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'icon'], 'string'],
            [['status', 'created_at','id'], 'integer'],
            [['url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'communicate_id' => 'Communicate ID',
            'title' => 'Title',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
