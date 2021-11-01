<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DownPayment;

/**
 * DownPaymentSearch represents the model behind the search form of `app\models\DownPayment`.
 */
class DownPaymentSearch extends DownPayment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_booking', 'patient_id', 'status', 'payment_id', 'pay_by_id', 'billing_id', 'registration_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['booking_date', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = DownPayment::find();

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
            'id_booking' => $this->id_booking,
            'patient_id' => $this->patient_id,
            'status' => $this->status,
            'booking_date' => $this->booking_date,
            'payment_id' => $this->payment_id,
            'pay_by_id' => $this->pay_by_id,
            'amount' => $this->amount,
            'billing_id' => $this->billing_id,
            'registration_id' => $this->registration_id,
            'created_time' => $this->created_time,
            'created_user_id' => $this->created_user_id,
            'modified_time' => $this->modified_time,
            'modified_user_id' => $this->modified_user_id,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
