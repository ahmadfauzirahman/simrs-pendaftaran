<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shipment;

/**
 * ShipmentSearch represents the model behind the search form of `app\models\Shipment`.
 */
class ShipmentSearch extends Shipment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipment_id', 'customer_id', 'order_id', 'warehouse_id', 'shipment_type', 'carrier_id', 'posted', 'printed', 'created_user_id', 'modified_user_id'], 'integer'],
            [['shipment_no', 'shipment_date', 'order_no', 'shipto_name', 'shipto_address', 'notes', 'created_time', 'modified_time'], 'safe'],
            [['freight_cost'], 'number'],
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
        $query = Shipment::find();

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
            'shipment_id' => $this->shipment_id,
            'shipment_date' => $this->shipment_date,
            'customer_id' => $this->customer_id,
            'order_id' => $this->order_id,
            'warehouse_id' => $this->warehouse_id,
            'shipment_type' => $this->shipment_type,
            'carrier_id' => $this->carrier_id,
            'freight_cost' => $this->freight_cost,
            'posted' => $this->posted,
            'printed' => $this->printed,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'shipment_no', $this->shipment_no])
            ->andFilterWhere(['like', 'order_no', $this->order_no])
            ->andFilterWhere(['like', 'shipto_name', $this->shipto_name])
            ->andFilterWhere(['like', 'shipto_address', $this->shipto_address])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
