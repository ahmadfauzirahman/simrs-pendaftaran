<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MonthlyCost;

/**
 * MonthlyCostSearch represents the model behind the search form of `app\models\MonthlyCost`.
 */
class MonthlyCostSearch extends MonthlyCost
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['inv_date'], 'safe'],
            [['item_id'], 'integer'],
            [['wgt_avg_cost'], 'number'],
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
        $query = MonthlyCost::find();

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
            'inv_date' => $this->inv_date,
            'item_id' => $this->item_id,
            'wgt_avg_cost' => $this->wgt_avg_cost,
        ]);

        return $dataProvider;
    }
}
