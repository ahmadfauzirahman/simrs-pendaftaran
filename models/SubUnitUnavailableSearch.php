<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SubUnitUnavailable;

/**
 * SubUnitUnavailableSearch represents the model behind the search form of `app\models\SubUnitUnavailable`.
 */
class SubUnitUnavailableSearch extends SubUnitUnavailable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sub_unit_id', 'seq'], 'integer'],
            [['unavailable_from', 'unavailable_to', 'unavailable_reason'], 'safe'],
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
        $query = SubUnitUnavailable::find();

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
            'sub_unit_id' => $this->sub_unit_id,
            'seq' => $this->seq,
            'unavailable_from' => $this->unavailable_from,
            'unavailable_to' => $this->unavailable_to,
        ]);

        $query->andFilterWhere(['like', 'unavailable_reason', $this->unavailable_reason]);

        return $dataProvider;
    }
}
