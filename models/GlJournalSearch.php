<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJournal;

/**
 * GlJournalSearch represents the model behind the search form of `app\models\GlJournal`.
 */
class GlJournalSearch extends GlJournal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_id', 'journal_type_id', 'posted', 'gl_period', 'gl_year', 'source', 'source_trans_id', 'reverse', 'by_system', 'created_user_id', 'modified_user_id'], 'integer'],
            [['journal_no', 'journal_date', 'description', 'reverse_date', 'created_time', 'modified_time'], 'safe'],
            [['amount'], 'number'],
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
        $query = GlJournal::find();

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
            'journal_date' => $this->journal_date,
            'journal_type_id' => $this->journal_type_id,
            'amount' => $this->amount,
            'posted' => $this->posted,
            'gl_period' => $this->gl_period,
            'gl_year' => $this->gl_year,
            'source' => $this->source,
            'source_trans_id' => $this->source_trans_id,
            'reverse' => $this->reverse,
            'reverse_date' => $this->reverse_date,
            'by_system' => $this->by_system,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'journal_no', $this->journal_no])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
