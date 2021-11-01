<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJfoDet;

/**
 * GlJfoDetSearch represents the model behind the search form of `app\models\GlJfoDet`.
 */
class GlJfoDetSearch extends GlJfoDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'seq', 'account_id', 'location_id', 'currency_id', 'department_id', 'item_id', 'item_mtl_id', 'item_kits_id', 'folio_id', 'folio_seq', 'folio_mtl_seq', 'folio_kits_seq', 'tax1_id', 'tax2_id', 'posted', 'processed'], 'integer'],
            [['foreign_amount', 'exchange_rate', 'amount', 'folio_line_amount', 'tax1_amount', 'tax2_amount'], 'number'],
            [['description'], 'safe'],
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
        $query = GlJfoDet::find();

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
            'journal_id' => $this->journal_id,
            'seq' => $this->seq,
            'account_id' => $this->account_id,
            'location_id' => $this->location_id,
            'currency_id' => $this->currency_id,
            'foreign_amount' => $this->foreign_amount,
            'exchange_rate' => $this->exchange_rate,
            'department_id' => $this->department_id,
            'amount' => $this->amount,
            'item_id' => $this->item_id,
            'item_mtl_id' => $this->item_mtl_id,
            'item_kits_id' => $this->item_kits_id,
            'folio_id' => $this->folio_id,
            'folio_seq' => $this->folio_seq,
            'folio_mtl_seq' => $this->folio_mtl_seq,
            'folio_kits_seq' => $this->folio_kits_seq,
            'folio_line_amount' => $this->folio_line_amount,
            'tax1_id' => $this->tax1_id,
            'tax1_amount' => $this->tax1_amount,
            'tax2_id' => $this->tax2_id,
            'tax2_amount' => $this->tax2_amount,
            'posted' => $this->posted,
            'processed' => $this->processed,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
