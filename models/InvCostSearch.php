<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InvCost;

/**
 * InvCostSearch represents the model behind the search form of `app\models\InvCost`.
 */
class InvCostSearch extends InvCost
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cos_id', 'item_id'], 'integer'],
            [['quantity', 'unit_cost', 'used_qty'], 'number'],
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
        $query = InvCost::find();

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
            'cos_id' => $this->cos_id,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'unit_cost' => $this->unit_cost,
            'used_qty' => $this->used_qty,
        ]);

        return $dataProvider;
    }
}
