<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FstmtTotal;

/**
 * FstmtTotalSearch represents the model behind the search form of `app\models\FstmtTotal`.
 */
class FstmtTotalSearch extends FstmtTotal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id', 'line_seq', 'total_line_seq'], 'integer'],
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
        $query = FstmtTotal::find();

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
            'total_line_seq' => $this->total_line_seq,
        ]);

        return $dataProvider;
    }
}
