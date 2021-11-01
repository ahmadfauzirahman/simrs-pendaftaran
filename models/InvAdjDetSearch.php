<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InvAdjDet;

/**
 * InvAdjDetSearch represents the model behind the search form of `app\models\InvAdjDet`.
 */
class InvAdjDetSearch extends InvAdjDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adjustment_id', 'seq', 'item_id'], 'integer'],
            [['qty_requested', 'quantity', 'uom_conversion'], 'number'],
            [['uom', 'description'], 'safe'],
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
        $query = InvAdjDet::find();

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
            'adjustment_id' => $this->adjustment_id,
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'qty_requested' => $this->qty_requested,
            'quantity' => $this->quantity,
            'uom_conversion' => $this->uom_conversion,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
