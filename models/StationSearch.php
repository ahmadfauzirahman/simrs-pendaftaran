<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Station;

/**
 * StationSearch represents the model behind the search form of `app\models\Station`.
 */
class StationSearch extends Station
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'station_post_x', 'station_pos_y', 'station_group_id'], 'integer'],
            [['station_no', 'station_name'], 'safe'],
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
        $query = Station::find();

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
            'station_id' => $this->station_id,
            'station_post_x' => $this->station_post_x,
            'station_pos_y' => $this->station_pos_y,
            'station_group_id' => $this->station_group_id,
        ]);

        $query->andFilterWhere(['like', 'station_no', $this->station_no])
            ->andFilterWhere(['like', 'station_name', $this->station_name]);

        return $dataProvider;
    }
}
