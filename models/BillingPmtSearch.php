<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BillingPmt;

/**
 * BillingPmtSearch represents the model behind the search form of `app\models\BillingPmt`.
 */
class BillingPmtSearch extends BillingPmt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bill_pmt_id', 'payment_type', 'registration_id', 'pay_by', 'print_no', 'all_print_no', 'created_user_id', 'modified_user_id'], 'integer'],
            [['bill_pmt_no', 'bill_pmt_date', 'notes', 'created_time', 'modified_time', 'bill_no', 'bill_status', 'id_bill'], 'safe'],
            [['amount'], 'number'],
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
        $query = BillingPmt::find();

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
            'bill_pmt_date' => $this->bill_pmt_date,
            'payment_type' => $this->payment_type,
            'amount' => $this->amount,
            'registration_id' => $this->registration_id,
            'pay_by' => $this->pay_by,
            'print_no' => $this->print_no,
            'all_print_no' => $this->all_print_no,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'bill_pmt_no', $this->bill_pmt_no])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'bill_no', $this->bill_no])
            ->andFilterWhere(['like', 'bill_status', $this->bill_status])
            ->andFilterWhere(['like', 'id_bill', $this->id_bill]);

        return $dataProvider;
    }
}
