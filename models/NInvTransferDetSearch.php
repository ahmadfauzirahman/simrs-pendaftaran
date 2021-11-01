<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NInvTransferDet;

/**
 * NInvTransferDetSearch represents the model behind the search form of `app\models\NInvTransferDet`.
 */
class NInvTransferDetSearch extends NInvTransferDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transfer_id', 'seq', 'item_id'], 'integer'],
            [['qty_requested', 'quantity', 'uom_conversion'], 'number'],
            [['uom', 'description', 'jenis_id'], 'safe'],
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
        $query = NInvTransferDet::find();

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
            'transfer_id' => $this->transfer_id,
            'seq' => $this->seq,
            'item_id' => $this->item_id,
            'qty_requested' => $this->qty_requested,
            'quantity' => $this->quantity,
            'uom_conversion' => $this->uom_conversion,
        ]);

        $query->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'jenis_id', $this->jenis_id]);

        return $dataProvider;
    }
}
