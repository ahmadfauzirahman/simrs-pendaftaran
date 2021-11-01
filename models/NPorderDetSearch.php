<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NPorderDet;

/**
 * NPorderDetSearch represents the model behind the search form of `app\models\NPorderDet`.
 */
class NPorderDetSearch extends NPorderDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'seq', 'item_id', 'request_id'], 'integer'],
            [['qty_ordered', 'qty_received', 'unit_price', 'uom_conversion', 'disc_pc', 'disc_amount', 'add_discount'], 'number'],
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
        $query = NPorderDet::find();

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
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'qty_ordered' => $this->qty_ordered,
            'qty_received' => $this->qty_received,
            'unit_price' => $this->unit_price,
            'uom_conversion' => $this->uom_conversion,
            'disc_pc' => $this->disc_pc,
            'disc_amount' => $this->disc_amount,
            'add_discount' => $this->add_discount,
            'request_id' => $this->request_id,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
