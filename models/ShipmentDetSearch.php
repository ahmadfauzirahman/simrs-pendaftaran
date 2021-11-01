<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ShipmentDet;

/**
 * ShipmentDetSearch represents the model behind the search form of `app\models\ShipmentDet`.
 */
class ShipmentDetSearch extends ShipmentDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shipment_id', 'seq', 'item_id', 'order_id', 'order_seq'], 'integer'],
            [['qty_shipped', 'uom_conversion'], 'number'],
            [['uom', 'remark'], 'safe'],
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
        $query = ShipmentDet::find();

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
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'order_id' => $this->order_id,
            'order_seq' => $this->order_seq,
            'qty_shipped' => $this->qty_shipped,
            'uom_conversion' => $this->uom_conversion,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
