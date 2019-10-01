<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Widget;

/**
 * WidgetSearch represents the model behind the search form about `backend\models\Widget`.
 */
class WidgetSearch extends Widget
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['widget_id', 'cat_parent',  'status', 'create_at'], 'integer'],
            [['widget_name', 'condition'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Widget::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'widget_id' => $this->widget_id,
            'cat_parent' => $this->cat_parent,
            'status' => $this->status,
            'create_at' => $this->create_at,
        ]);

        $query->andFilterWhere(['like', 'widget_name', $this->widget_name])
            ->andFilterWhere(['like', 'condition', $this->condition]);

        return $dataProvider;
    }
}
