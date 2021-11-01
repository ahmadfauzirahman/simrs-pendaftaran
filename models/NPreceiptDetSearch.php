<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NPreceiptDet;

/**
 * NPreceiptDetSearch represents the model behind the search form of `app\models\NPreceiptDet`.
 */
class NPreceiptDetSearch extends NPreceiptDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'seq', 'item_id', 'order_id', 'order_seq', 'original'], 'integer'],
            [['qty_received', 'uom_conversion'], 'number'],
            [['uom', 'remark', 'expiry_date', 'batch_no'], 'safe'],
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
        $query = NPreceiptDet::find();

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
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'order_id' => $this->order_id,
            'order_seq' => $this->order_seq,
            'qty_received' => $this->qty_received,
            'uom_conversion' => $this->uom_conversion,
            'expiry_date' => $this->expiry_date,
            'original' => $this->original,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'remark', $this->remark])
            ->andFilterWhere(['like', 'batch_no', $this->batch_no]);

        return $dataProvider;
    }
}
