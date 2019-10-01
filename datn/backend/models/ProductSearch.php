<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_id', 'cat_id', 'author_id', 'translator_id', 'supplier_id', 'publisher_id', 'price_out', 'qty', 'republish', 'qty_page', 'barcode', 'created_at', 'updated_at'], 'integer'],
            [['product_name', 'status', 'image', 'made_in', 'language', 'size','user_create','description', 'date_release', 'metakeyword', 'metadescription'], 'safe'],
            [['sale', 'weight'], 'number'],
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
        $query = Product::find();

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
            'product_id' => $this->product_id,
            'cat_id' => $this->cat_id,
            'author_id' => $this->author_id,
            'translator_id' => $this->translator_id,
            'supplier_id' => $this->supplier_id,
            'publisher_id' => $this->publisher_id,
           
            'price_out' => $this->price_out,
            'sale' => $this->sale,
            'qty' => $this->qty,
            'republish' => $this->republish,
            'qty_page' => $this->qty_page,
            'weight' => $this->weight,
            'size' => $this->size,
            
            'barcode' => $this->barcode,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user_create' => $this->user_create,
        ]);

        $query->andFilterWhere(['like', 'product_name', $this->product_name])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'made_in', $this->made_in])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'date_release', $this->date_release])
            ->andFilterWhere(['like', 'metakeyword', $this->metakeyword])
            ->andFilterWhere(['like', 'metadescription', $this->metadescription]);

        return $dataProvider;
    }
}
