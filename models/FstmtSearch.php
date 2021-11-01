<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fstmt;

/**
 * FstmtSearch represents the model behind the search form of `app\models\Fstmt`.
 */
class FstmtSearch extends Fstmt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stmt_id', 'column_format', 'report_id', 'use_location', 'get_bal'], 'integer'],
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
        $query = Fstmt::find();

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
            'column_format' => $this->column_format,
            'report_id' => $this->report_id,
            'use_location' => $this->use_location,
            'get_bal' => $this->get_bal,
        ]);

        return $dataProvider;
    }
}
