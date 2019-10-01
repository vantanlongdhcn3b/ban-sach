<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Translator;

/**
 * TranslatorSearch represents the model behind the search form about `backend\models\Translator`.
 */
class TranslatorSearch extends Translator
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['translator_id', 'created_at', 'updated_at'], 'integer'],
            [['translator_name', 'description', 'metakeyword', 'metadescription'], 'safe'],
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
        $query = Translator::find();

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
            'translator_id' => $this->translator_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'translator_name', $this->translator_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'metakeyword', $this->metakeyword])
            ->andFilterWhere(['like', 'metadescription', $this->metadescription]);

        return $dataProvider;
    }
}
