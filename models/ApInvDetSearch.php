<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ApInvDet;

/**
 * ApInvDetSearch represents the model behind the search form of `app\models\ApInvDet`.
 */
class ApInvDetSearch extends ApInvDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'seq', 'item_id', 'receipt_id', 'order_id'], 'integer'],
            [['quantity', 'uom_conversion', 'unit_price', 'disc_pc', 'disc_amount', 'add_discount'], 'number'],
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
        $query = ApInvDet::find();

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
            'invoice_id' => $this->invoice_id,
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'quantity' => $this->quantity,
            'uom_conversion' => $this->uom_conversion,
            'unit_price' => $this->unit_price,
            'disc_pc' => $this->disc_pc,
            'disc_amount' => $this->disc_amount,
            'add_discount' => $this->add_discount,
            'receipt_id' => $this->receipt_id,
            'order_id' => $this->order_id,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
