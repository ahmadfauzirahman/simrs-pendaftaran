<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArInv;

/**
 * ArInvSearch represents the model behind the search form of `app\models\ArInv`.
 */
class ArInvSearch extends ArInv
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'gl_year', 'gl_period', 'customer_id', 'warehouse_id', 'salesman_id', 'currency_id', 'location_id', 'disc_days', 'net_days', 'cod', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'posted', 'printed', 'return_invoice', 'return_ref_invoice_id', 'authorized_user_id', 'pic_pay_id', 'created_user_id', 'modified_user_id', 'invoice_type', 'invoice_content', 'staff_id'], 'integer'],
            [['invoice_no', 'invoice_date', 'purchase_order_no', 'shipto_name', 'shipto_address', 'return_ref_invoice_no', 'authorized_reason', 'notes', 'created_time', 'modified_time', 'tax_invoice_no', 'tax_invoice_date', 'invoice_send_date', 'invoice_receive_date', 'invoice_return_date', 'ship_from', 'ship_until'], 'safe'],
            [['exchange_rate', 'taxation_rate', 'disc_pc', 'items_net_amount', 'invoice_disc_pc', 'invoice_disc_amount', 'invoice_amount', 'writeoff_amount', 'owing_amount', 'payment_discount', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'dp_amount'], 'number'],
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
        $query = ArInv::find();

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
            'invoice_id' => $this->invoice_id,
            'invoice_date' => $this->invoice_date,
            'gl_year' => $this->gl_year,
            'gl_period' => $this->gl_period,
            'customer_id' => $this->customer_id,
            'warehouse_id' => $this->warehouse_id,
            'salesman_id' => $this->salesman_id,
            'currency_id' => $this->currency_id,
            'location_id' => $this->location_id,
            'exchange_rate' => $this->exchange_rate,
            'taxation_rate' => $this->taxation_rate,
            'disc_days' => $this->disc_days,
            'disc_pc' => $this->disc_pc,
            'net_days' => $this->net_days,
            'cod' => $this->cod,
            'items_net_amount' => $this->items_net_amount,
            'invoice_disc_pc' => $this->invoice_disc_pc,
            'invoice_disc_amount' => $this->invoice_disc_amount,
            'invoice_amount' => $this->invoice_amount,
            'writeoff_amount' => $this->writeoff_amount,
            'owing_amount' => $this->owing_amount,
            'payment_discount' => $this->payment_discount,
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
            'posted' => $this->posted,
            'printed' => $this->printed,
            'return_invoice' => $this->return_invoice,
            'return_ref_invoice_id' => $this->return_ref_invoice_id,
            'authorized_user_id' => $this->authorized_user_id,
            'pic_pay_id' => $this->pic_pay_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'invoice_type' => $this->invoice_type,
            'dp_amount' => $this->dp_amount,
            'invoice_content' => $this->invoice_content,
            'tax_invoice_date' => $this->tax_invoice_date,
            'invoice_send_date' => $this->invoice_send_date,
            'invoice_receive_date' => $this->invoice_receive_date,
            'invoice_return_date' => $this->invoice_return_date,
            'ship_from' => $this->ship_from,
            'ship_until' => $this->ship_until,
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'invoice_no', $this->invoice_no])
            ->andFilterWhere(['like', 'purchase_order_no', $this->purchase_order_no])
            ->andFilterWhere(['like', 'shipto_name', $this->shipto_name])
            ->andFilterWhere(['like', 'shipto_address', $this->shipto_address])
            ->andFilterWhere(['like', 'return_ref_invoice_no', $this->return_ref_invoice_no])
            ->andFilterWhere(['like', 'authorized_reason', $this->authorized_reason])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'tax_invoice_no', $this->tax_invoice_no]);

        return $dataProvider;
    }
}
