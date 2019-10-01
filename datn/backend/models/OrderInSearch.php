<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrderIn;

/**
 * OrderInSearch represents the model behind the search form about `backend\models\OrderIn`.
 */
class OrderInSearch extends OrderIn
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_in_id', 'product_id', 'qty', 'date', 'status'], 'integer'],
            [ 'user_create', 'string'],
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
        $query = OrderIn::find();

        // add conditions that should always apply here
        $pageSize = isset($params['per-page']) ? intval($params['per-page']) : 10;
        $dataProvider = new ActiveDataProvider([
            'query' => $query,

            'pagination' =>  ['pageSize' => $pageSize,],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'order_in_id' => $this->order_in_id,
            'product_id' => $this->product_id,
            'qty' => $this->qty,
            'date' => $this->date,
            'status' => $this->status,
            'user_create' => $this->user_create,
        ]);

        return $dataProvider;
    }
}
