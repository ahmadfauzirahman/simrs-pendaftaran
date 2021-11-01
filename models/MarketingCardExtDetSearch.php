<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarketingCardExtDet;

/**
 * MarketingCardExtDetSearch represents the model behind the search form of `app\models\MarketingCardExtDet`.
 */
class MarketingCardExtDetSearch extends MarketingCardExtDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_id', 'seq', 'personal_relation_id'], 'integer'],
            [['name', 'place_of_birth', 'birth_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = MarketingCardExtDet::find();

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
            'card_id' => $this->card_id,
            'seq' => $this->seq,
            'birth_date' => $this->birth_date,
            'personal_relation_id' => $this->personal_relation_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth]);

        return $dataProvider;
    }
}
