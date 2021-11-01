<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Morder;

/**
 * MorderSearch represents the model behind the search form of `app\models\Morder`.
 */
class MorderSearch extends Morder
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'order_status', 'printed', 'item_id', 'num_of_receipts', 'created_user_id', 'modified_user_id', 'warehouse_id'], 'integer'],
            [['order_no', 'order_date', 'req_receipt_date', 'notes', 'created_time', 'modified_time', 'uom'], 'safe'],
            [['qty_ordered', 'qty_received', 'uom_conversion'], 'number'],
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
        $query = Morder::find();

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
            'req_receipt_date' => $this->req_receipt_date,
            'order_status' => $this->order_status,
            'printed' => $this->printed,
            'item_id' => $this->item_id,
            'qty_ordered' => $this->qty_ordered,
            'qty_received' => $this->qty_received,
            'num_of_receipts' => $this->num_of_receipts,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'uom_conversion' => $this->uom_conversion,
            'warehouse_id' => $this->warehouse_id,
        ]);

        $query->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
