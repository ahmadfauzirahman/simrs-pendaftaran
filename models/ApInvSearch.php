<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ApInv;

/**
 * ApInvSearch represents the model behind the search form of `app\models\ApInv`.
 */
class ApInvSearch extends ApInv
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'vendor_id', 'gl_year', 'gl_period', 'currency_id', 'location_id', 'cod', 'disc_days', 'net_days', 'tax1_id', 'tax2_id', 'taxable_tax1_id', 'taxable_tax2_id', 'taxable_tax3_id', 'posted', 'return_ref_invoice_id', 'detail_items', 'created_user_id', 'modified_user_id', 'invoice_type'], 'integer'],
            [['invoice_no', 'invoice_date', 'orders_no', 'receipts_no', 'return_ref_invoice_no', 'notes', 'created_time', 'modified_time', 'tax_invoice_no', 'tax_invoice_date'], 'safe'],
            [['exchange_rate', 'taxation_rate', 'items_net_amount', 'invoice_disc_pc', 'invoice_disc_amount', 'invoice_amount', 'owing_amount', 'payment_discount', 'disc_pc', 'tax1_rate', 'tax2_rate', 'tax1_amount', 'tax2_amount', 'taxable_amount1', 'taxable_amount2', 'taxable_amount3', 'dp_amount'], 'number'],
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
        $query = ApInv::find();

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
            'vendor_id' => $this->vendor_id,
            'gl_year' => $this->gl_year,
            'gl_period' => $this->gl_period,
            'currency_id' => $this->currency_id,
            'location_id' => $this->location_id,
            'exchange_rate' => $this->exchange_rate,
            'taxation_rate' => $this->taxation_rate,
            'items_net_amount' => $this->items_net_amount,
            'invoice_disc_pc' => $this->invoice_disc_pc,
            'invoice_disc_amount' => $this->invoice_disc_amount,
            'invoice_amount' => $this->invoice_amount,
            'owing_amount' => $this->owing_amount,
            'payment_discount' => $this->payment_discount,
            'cod' => $this->cod,
            'disc_pc' => $this->disc_pc,
            'disc_days' => $this->disc_days,
            'net_days' => $this->net_days,
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
            'return_ref_invoice_id' => $this->return_ref_invoice_id,
            'detail_items' => $this->detail_items,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'invoice_type' => $this->invoice_type,
            'dp_amount' => $this->dp_amount,
            'tax_invoice_date' => $this->tax_invoice_date,
        ]);

        $query->andFilterWhere(['like', 'invoice_no', $this->invoice_no])
            ->andFilterWhere(['like', 'orders_no', $this->orders_no])
            ->andFilterWhere(['like', 'receipts_no', $this->receipts_no])
            ->andFilterWhere(['like', 'return_ref_invoice_no', $this->return_ref_invoice_no])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'tax_invoice_no', $this->tax_invoice_no]);

        return $dataProvider;
    }
}
