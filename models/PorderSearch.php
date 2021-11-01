<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Porder;

/**
 * PorderSearch represents the model behind the search form of `app\models\Porder`.
 */
class PorderSearch extends Porder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'vendor_id', 'carrier_id', 'warehouse_id', 'order_status', 'printed', 'currency_id', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'shipto', 'num_of_receipts', 'created_user_id', 'modified_user_id', 'ap_invoice_id', 'items_received', 'paid', 'bank_id'], 'integer'],
            [['order_no', 'order_date', 'req_received_date', 'term_payment', 'ordered_by', 'shipto_name', 'shipto_address', 'notes', 'created_time', 'modified_time', 'received_by', 'ap_invoice_no', 'tax_invoice_no', 'tax_invoice_date'], 'safe'],
            [['items_net_amount', 'order_amount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'order_disc_pc', 'order_disc_amount'], 'number'],
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
        $query = Porder::find();

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
            'vendor_id' => $this->vendor_id,
            'order_date' => $this->order_date,
            'req_received_date' => $this->req_received_date,
            'carrier_id' => $this->carrier_id,
            'warehouse_id' => $this->warehouse_id,
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
            'order_disc_pc' => $this->order_disc_pc,
            'order_disc_amount' => $this->order_disc_amount,
            'shipto' => $this->shipto,
            'num_of_receipts' => $this->num_of_receipts,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'ap_invoice_id' => $this->ap_invoice_id,
            'items_received' => $this->items_received,
            'paid' => $this->paid,
            'bank_id' => $this->bank_id,
            'tax_invoice_date' => $this->tax_invoice_date,
        ]);

        $query->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'term_payment', $this->term_payment])
            ->andFilterWhere(['like', 'ordered_by', $this->ordered_by])
            ->andFilterWhere(['like', 'shipto_name', $this->shipto_name])
            ->andFilterWhere(['like', 'shipto_address', $this->shipto_address])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'received_by', $this->received_by])
            ->andFilterWhere(['like', 'ap_invoice_no', $this->ap_invoice_no])
            ->andFilterWhere(['like', 'tax_invoice_no', $this->tax_invoice_no]);

        return $dataProvider;
    }
}
