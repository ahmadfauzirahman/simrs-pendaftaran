<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArPmt;

/**
 * ArPmtSearch represents the model behind the search form of `app\models\ArPmt`.
 */
class ArPmtSearch extends ArPmt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'gl_year', 'gl_period', 'customer_id', 'bank_id', 'currency_id', 'rounding_gl_account_id', 'posted', 'reconciled', 'void', 'deposit', 'deposit_invoice', 'deposit_payment', 'post_dated', 'created_user_id', 'modified_user_id', 'remark'], 'integer'],
            [['payment_no', 'payment_date', 'check_no', 'due_date', 'created_time', 'modified_time', 'description', 'notes'], 'safe'],
            [['exchange_rate', 'payment_amount', 'check_amount', 'rounding_amount', 'dp_amount'], 'number'],
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
        $query = ArPmt::find();

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
            'payment_id' => $this->payment_id,
            'payment_date' => $this->payment_date,
            'gl_year' => $this->gl_year,
            'gl_period' => $this->gl_period,
            'customer_id' => $this->customer_id,
            'bank_id' => $this->bank_id,
            'currency_id' => $this->currency_id,
            'exchange_rate' => $this->exchange_rate,
            'payment_amount' => $this->payment_amount,
            'check_amount' => $this->check_amount,
            'rounding_amount' => $this->rounding_amount,
            'rounding_gl_account_id' => $this->rounding_gl_account_id,
            'due_date' => $this->due_date,
            'posted' => $this->posted,
            'reconciled' => $this->reconciled,
            'void' => $this->void,
            'deposit' => $this->deposit,
            'deposit_invoice' => $this->deposit_invoice,
            'deposit_payment' => $this->deposit_payment,
            'dp_amount' => $this->dp_amount,
            'post_dated' => $this->post_dated,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'remark' => $this->remark,
        ]);

        $query->andFilterWhere(['like', 'payment_no', $this->payment_no])
            ->andFilterWhere(['like', 'check_no', $this->check_no])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
