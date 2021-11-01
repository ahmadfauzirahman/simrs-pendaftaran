<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FstmtLine;

/**
 * FstmtLineSearch represents the model behind the search form of `app\models\FstmtLine`.
 */
class FstmtLineSearch extends FstmtLine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id', 'line_seq', 'line_no', 'line_type', 'parent_line_seq', 'reverse', 'get_bal'], 'integer'],
            [['line_description'], 'safe'],
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
        $query = FstmtLine::find();

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
            'stmt_id' => $this->stmt_id,
            'line_seq' => $this->line_seq,
            'line_no' => $this->line_no,
            'line_type' => $this->line_type,
            'parent_line_seq' => $this->parent_line_seq,
            'reverse' => $this->reverse,
            'get_bal' => $this->get_bal,
        ]);

        $query->andFilterWhere(['like', 'line_description', $this->line_description]);

        return $dataProvider;
    }
}
