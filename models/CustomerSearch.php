<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Customer;

/**
 * CustomerSearch represents the model behind the search form of `app\models\Customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'cus_type_id', 'cus_group_id', 'tax1_id', 'tax2_id', 'currency_id', 'credit_limit_enabled', 'credit_limit_restriction', 'disc_days', 'net_days', 'cod', 'disabled', 'print_message', 'allow_backorders', 'salesman_id', 'shipment_contact_seq', 'created_user_id', 'modified_user_id', 'carrier_id'], 'integer'],
            [['customer_no', 'customer_name', 'address_line1', 'address_line2', 'city', 'state_prov', 'zipcode', 'country', 'contact', 'phone', 'fax', 'email', 'webpage', 'tax1_exemption_no', 'tax2_exemption_no', 'tax_no', 'message_line1', 'message_line2', 'notes', 'created_time', 'modified_time'], 'safe'],
            [['credit_limit_amount', 'disc_pc'], 'number'],
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
        $query = Customer::find();

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
            'cus_type_id' => $this->cus_type_id,
            'cus_group_id' => $this->cus_group_id,
            'tax1_id' => $this->tax1_id,
            'tax2_id' => $this->tax2_id,
            'currency_id' => $this->currency_id,
            'credit_limit_enabled' => $this->credit_limit_enabled,
            'credit_limit_amount' => $this->credit_limit_amount,
            'credit_limit_restriction' => $this->credit_limit_restriction,
            'disc_pc' => $this->disc_pc,
            'disc_days' => $this->disc_days,
            'net_days' => $this->net_days,
            'cod' => $this->cod,
            'disabled' => $this->disabled,
            'print_message' => $this->print_message,
            'allow_backorders' => $this->allow_backorders,
            'salesman_id' => $this->salesman_id,
            'shipment_contact_seq' => $this->shipment_contact_seq,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'carrier_id' => $this->carrier_id,
        ]);

        $query->andFilterWhere(['like', 'customer_no', $this->customer_no])
            ->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'address_line1', $this->address_line1])
            ->andFilterWhere(['like', 'address_line2', $this->address_line2])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'state_prov', $this->state_prov])
            ->andFilterWhere(['like', 'zipcode', $this->zipcode])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'webpage', $this->webpage])
            ->andFilterWhere(['like', 'tax1_exemption_no', $this->tax1_exemption_no])
            ->andFilterWhere(['like', 'tax2_exemption_no', $this->tax2_exemption_no])
            ->andFilterWhere(['like', 'tax_no', $this->tax_no])
            ->andFilterWhere(['like', 'message_line1', $this->message_line1])
            ->andFilterWhere(['like', 'message_line2', $this->message_line2])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
