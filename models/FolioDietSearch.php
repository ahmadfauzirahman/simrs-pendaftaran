<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioDiet;

/**
 * FolioDietSearch represents the model behind the search form of `app\models\FolioDiet`.
 */
class FolioDietSearch extends FolioDiet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'diet_id'], 'integer'],
            [['description'], 'safe'],
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
        $query = FolioDiet::find();

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
            'folio_id' => $this->folio_id,
            'seq' => $this->seq,
            'diet_id' => $this->diet_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
