<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InvHistory;

/**
 * InvHistorySearch represents the model behind the search form of `app\models\InvHistory`.
 */
class InvHistorySearch extends InvHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['history_id', 'item_id', 'warehouse_id', 'trans_type', 'trans_id'], 'integer'],
            [['trans_date', 'trans_no', 'original_uom', 'description'], 'safe'],
            [['quantity', 'original_qty', 'uom_conversion', 'wgt_avg_cost'], 'number'],
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
        $query = InvHistory::find();

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
            'history_id' => $this->history_id,
            'item_id' => $this->item_id,
            'warehouse_id' => $this->warehouse_id,
            'trans_date' => $this->trans_date,
            'trans_type' => $this->trans_type,
            'trans_id' => $this->trans_id,
            'quantity' => $this->quantity,
            'original_qty' => $this->original_qty,
            'uom_conversion' => $this->uom_conversion,
            'wgt_avg_cost' => $this->wgt_avg_cost,
        ]);

        $query->andFilterWhere(['like', 'trans_no', $this->trans_no])
            ->andFilterWhere(['like', 'original_uom', $this->original_uom])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
