<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MreceiptMtl;

/**
 * MreceiptMtlSearch represents the model behind the search form of `app\models\MreceiptMtl`.
 */
class MreceiptMtlSearch extends MreceiptMtl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'seq', 'material_item_id'], 'integer'],
            [['qty_used'], 'number'],
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
        $query = MreceiptMtl::find();

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
            'material_item_id' => $this->material_item_id,
            'qty_used' => $this->qty_used,
        ]);

        return $dataProvider;
    }
}
