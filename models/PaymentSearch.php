<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payment;

/**
 * PaymentSearch represents the model behind the search form of `app\models\Payment`.
 */
class PaymentSearch extends Payment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'customer_id', 'created_user_id', 'modified_user_id', 'cash', 'rounding', 'disabled', 'only_for_customer', 'self_payment'], 'integer'],
            [['payment_name', 'payment_description', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = Payment::find();

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
            'customer_id' => $this->customer_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'cash' => $this->cash,
            'rounding' => $this->rounding,
            'disabled' => $this->disabled,
            'only_for_customer' => $this->only_for_customer,
            'self_payment' => $this->self_payment,
        ]);

        $query->andFilterWhere(['like', 'payment_name', $this->payment_name])
            ->andFilterWhere(['like', 'payment_description', $this->payment_description])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
