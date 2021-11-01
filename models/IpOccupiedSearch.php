<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IpOccupied;

/**
 * IpOccupiedSearch represents the model behind the search form of `app\models\IpOccupied`.
 */
class IpOccupiedSearch extends IpOccupied
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['act_date', 'unit_name', 'cos_name'], 'safe'],
            [['unit_id', 'cos_id', 'bed_occupied'], 'integer'],
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
        $query = IpOccupied::find();

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
            'act_date' => $this->act_date,
            'unit_id' => $this->unit_id,
            'cos_id' => $this->cos_id,
            'bed_occupied' => $this->bed_occupied,
        ]);

        $query->andFilterWhere(['like', 'unit_name', $this->unit_name])
            ->andFilterWhere(['like', 'cos_name', $this->cos_name]);

        return $dataProvider;
    }
}
