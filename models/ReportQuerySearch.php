<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportQuery;

/**
 * ReportQuerySearch represents the model behind the search form of `app\models\ReportQuery`.
 */
class ReportQuerySearch extends ReportQuery
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'query_id', 'master_query_id'], 'integer'],
            [['query_name', 'sql_syntax'], 'safe'],
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
        $query = ReportQuery::find();

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
            'report_id' => $this->report_id,
            'query_id' => $this->query_id,
            'master_query_id' => $this->master_query_id,
        ]);

        $query->andFilterWhere(['like', 'query_name', $this->query_name])
            ->andFilterWhere(['like', 'sql_syntax', $this->sql_syntax]);

        return $dataProvider;
    }
}
