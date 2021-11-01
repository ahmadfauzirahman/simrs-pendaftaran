<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sorder;

/**
 * SorderSearch represents the model behind the search form of `app\models\Sorder`.
 */
class SorderSearch extends Sorder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'customer_id', 'carrier_id', 'salesman_id', 'order_status', 'printed', 'currency_id', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'num_of_shipments', 'authorized_user_id', 'created_user_id', 'modified_user_id', 'disc_days', 'net_days', 'cod', 'dp_invoiced'], 'integer'],
            [['order_no', 'order_date', 'req_shipped_date', 'purchase_order_no', 'shipto_name', 'shipto_address', 'notes', 'authorized_reason', 'created_time', 'modified_time'], 'safe'],
            [['items_net_amount', 'order_amount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'order_disc_pc', 'order_disc_amount', 'disc_pc', 'dp_amount'], 'number'],
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
        $query = Sorder::find();

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
            'order_id' => $this->order_id,
            'order_date' => $this->order_date,
            'customer_id' => $this->customer_id,
            'req_shipped_date' => $this->req_shipped_date,
            'carrier_id' => $this->carrier_id,
            'salesman_id' => $this->salesman_id,
            'order_status' => $this->order_status,
            'printed' => $this->printed,
            'currency_id' => $this->currency_id,
            'items_net_amount' => $this->items_net_amount,
            'order_amount' => $this->order_amount,
            'tax1_id' => $this->tax1_id,
            'tax2_id' => $this->tax2_id,
            'tax1_rate' => $this->tax1_rate,
            'tax2_rate' => $this->tax2_rate,
            'tax1_amount' => $this->tax1_amount,
            'tax2_amount' => $this->tax2_amount,
            'taxable_tax1_id' => $this->taxable_tax1_id,
            'taxable_tax2_id' => $this->taxable_tax2_id,
            'taxable_tax3_id' => $this->taxable_tax3_id,
            'taxable_amount1' => $this->taxable_amount1,
            'taxable_amount2' => $this->taxable_amount2,
            'taxable_amount3' => $this->taxable_amount3,
            'num_of_shipments' => $this->num_of_shipments,
            'order_disc_pc' => $this->order_disc_pc,
            'order_disc_amount' => $this->order_disc_amount,
            'authorized_user_id' => $this->authorized_user_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'disc_days' => $this->disc_days,
            'net_days' => $this->net_days,
            'disc_pc' => $this->disc_pc,
            'cod' => $this->cod,
            'dp_amount' => $this->dp_amount,
            'dp_invoiced' => $this->dp_invoiced,
        ]);

        $query->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'purchase_order_no', $this->purchase_order_no])
            ->andFilterWhere(['like', 'shipto_name', $this->shipto_name])
            ->andFilterWhere(['like', 'shipto_address', $this->shipto_address])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'authorized_reason', $this->authorized_reason]);

        return $dataProvider;
    }
}
