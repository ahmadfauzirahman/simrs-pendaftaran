<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJournalDet;

/**
 * GlJournalDetSearch represents the model behind the search form of `app\models\GlJournalDet`.
 */
class GlJournalDetSearch extends GlJournalDet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'seq', 'account_id', 'location_id', 'currency_id', 'department_id'], 'integer'],
            [['foreign_amount', 'exchange_rate', 'amount'], 'number'],
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
        $query = GlJournalDet::find();

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
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
