<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ArInvOther;

/**
 * ArInvOtherSearch represents the model behind the search form of `app\models\ArInvOther`.
 */
class ArInvOtherSearch extends ArInvOther
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['invoice_id', 'seq', 'staff_id'], 'integer'],
            [['source_1', 'source_2', 'source_3', 'item_name', 'description', 'uom'], 'safe'],
            [['quantity', 'unit_price', 'disc_pc', 'disc_amount'], 'number'],
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
        $query = ArInvOther::find();

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
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price,
            'disc_pc' => $this->disc_pc,
            'disc_amount' => $this->disc_amount,
            'staff_id' => $this->staff_id,
        ]);

        $query->andFilterWhere(['like', 'source_1', $this->source_1])
            ->andFilterWhere(['like', 'source_2', $this->source_2])
            ->andFilterWhere(['like', 'source_3', $this->source_3])
            ->andFilterWhere(['like', 'item_name', $this->item_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'uom', $this->uom]);

        return $dataProvider;
    }
}
