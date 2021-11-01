<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlJournalExt;

/**
 * GlJournalExtSearch represents the model behind the search form of `app\models\GlJournalExt`.
 */
class GlJournalExtSearch extends GlJournalExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['j_id', 'posted', 'gl_periode', 'gl_year', 'created_user_id', 'completed', 'pc'], 'integer'],
            [['j_no', 'j_date', 'description', 'created_time'], 'safe'],
            [['amount', 'gl_balance'], 'number'],
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
        $query = GlJournalExt::find();

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
            'j_id' => $this->j_id,
            'j_date' => $this->j_date,
            'amount' => $this->amount,
            'posted' => $this->posted,
            'gl_periode' => $this->gl_periode,
            'gl_year' => $this->gl_year,
            'gl_balance' => $this->gl_balance,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'completed' => $this->completed,
            'pc' => $this->pc,
        ]);

        $query->andFilterWhere(['like', 'j_no', $this->j_no])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
