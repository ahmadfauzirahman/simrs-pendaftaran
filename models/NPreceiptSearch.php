<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NPreceipt;

/**
 * NPreceiptSearch represents the model behind the search form of `app\models\NPreceipt`.
 */
class NPreceiptSearch extends NPreceipt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'vendor_id', 'order_id', 'receipt_type', 'warehouse_id', 'posted', 'printed', 'ap_invoice_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['receipt_no', 'receipt_date', 'order_no', 'notes', 'received_by', 'created_time', 'modified_time'], 'safe'],
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
        $query = NPreceipt::find();

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
            'receipt_id' => $this->receipt_id,
            'vendor_id' => $this->vendor_id,
            'receipt_date' => $this->receipt_date,
            'order_id' => $this->order_id,
            'receipt_type' => $this->receipt_type,
            'warehouse_id' => $this->warehouse_id,
            'posted' => $this->posted,
            'printed' => $this->printed,
            'ap_invoice_id' => $this->ap_invoice_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'receipt_no', $this->receipt_no])
            ->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'received_by', $this->received_by]);

        return $dataProvider;
    }
}
