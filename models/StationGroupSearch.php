<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StationGroup;

/**
 * StationGroupSearch represents the model behind the search form of `app\models\StationGroup`.
 */
class StationGroupSearch extends StationGroup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_group_id'], 'integer'],
            [['station_group'], 'safe'],
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
        $query = StationGroup::find();

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
            'station_group_id' => $this->station_group_id,
        ]);

        $query->andFilterWhere(['like', 'station_group', $this->station_group]);

        return $dataProvider;
    }
}
