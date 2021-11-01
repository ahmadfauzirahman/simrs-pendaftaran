<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\InternDiag;

/**
 * InternDiagSearch represents the model behind the search form of `app\models\InternDiag`.
 */
class InternDiagSearch extends InternDiag
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intern_diag_id', 'icd_id'], 'integer'],
            [['intern_diag_name', 'intern_diag_descr'], 'safe'],
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
        $query = InternDiag::find();

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
            'intern_diag_id' => $this->intern_diag_id,
            'icd_id' => $this->icd_id,
        ]);

        $query->andFilterWhere(['like', 'intern_diag_name', $this->intern_diag_name])
            ->andFilterWhere(['like', 'intern_diag_descr', $this->intern_diag_descr]);

        return $dataProvider;
    }
}
