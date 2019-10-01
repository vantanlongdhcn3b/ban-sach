<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "widget".
 *
 * @property integer $widget_id
 * @property string $widget_name
 * @property integer $cat_parent
 * @property string $condition
 * @property integer $status
 * @property integer $create_at
 */
class Widget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'widget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['widget_name', 'condition'], 'required'],
            [['cat_parent', 'status', 'create_at'], 'integer'],
            [['widget_name', 'condition'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'widget_name' => 'Tên widget',
            'cat_parent' => 'Danh mục',
            
            'condition' => 'Điều kiện',
            'status' => 'Trạng thái',
        ];
    }
    
}
