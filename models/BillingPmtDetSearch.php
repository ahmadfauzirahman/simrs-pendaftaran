<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\billingPmtDet;

/**
 * BillingPmtDetSearch represents the model behind the search form of `app\models\billingPmtDet`.
 */
class BillingPmtDetSearch extends billingPmtDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_pmt_id', 'seq', 'payment_id', 'invoice_id', 'allocated_bill_pmt_id'], 'integer'],
            [['amount', 'rounding_amount', 'change_amount'], 'number'],
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
        $query = billingPmtDet::find();

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
            'bill_pmt_id' => $this->bill_pmt_id,
            'seq' => $this->seq,
            'payment_id' => $this->payment_id,
            'amount' => $this->amount,
            'rounding_amount' => $this->rounding_amount,
            'invoice_id' => $this->invoice_id,
            'change_amount' => $this->change_amount,
            'allocated_bill_pmt_id' => $this->allocated_bill_pmt_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
