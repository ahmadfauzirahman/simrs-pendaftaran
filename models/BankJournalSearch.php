<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BankJournal;

/**
 * BankJournalSearch represents the model behind the search form of `app\models\BankJournal`.
 */
class BankJournalSearch extends BankJournal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'bank_id', 'gl_period', 'gl_year', 'trans_type', 'currency_id', 'posted', 'printed', 'reconciled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['journal_no', 'check_no', 'journal_date', 'issue_rcv_by', 'description', 'due_date', 'created_time', 'modified_time'], 'safe'],
            [['amount', 'exchange_rate'], 'number'],
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
        $query = BankJournal::find();

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
            'bank_id' => $this->bank_id,
            'journal_date' => $this->journal_date,
            'gl_period' => $this->gl_period,
            'gl_year' => $this->gl_year,
            'trans_type' => $this->trans_type,
            'amount' => $this->amount,
            'currency_id' => $this->currency_id,
            'exchange_rate' => $this->exchange_rate,
            'due_date' => $this->due_date,
            'posted' => $this->posted,
            'printed' => $this->printed,
            'reconciled' => $this->reconciled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'journal_no', $this->journal_no])
            ->andFilterWhere(['like', 'check_no', $this->check_no])
            ->andFilterWhere(['like', 'issue_rcv_by', $this->issue_rcv_by])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
