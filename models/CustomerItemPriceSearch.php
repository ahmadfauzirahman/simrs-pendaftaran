<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomerItemPrice;

/**
 * CustomerItemPriceSearch represents the model behind the search form of `app\models\CustomerItemPrice`.
 */
class CustomerItemPriceSearch extends CustomerItemPrice
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'seq', 'item_id'], 'integer'],
            [['unit_price', 'unit_discount'], 'number'],
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
        $query = CustomerItemPrice::find();

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
            'customer_id' => $this->customer_id,
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'unit_price' => $this->unit_price,
            'unit_discount' => $this->unit_discount,
        ]);

        return $dataProvider;
    }
}
