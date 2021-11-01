<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FolioOtherExam;

/**
 * FolioOtherExamSearch represents the model behind the search form of `app\models\FolioOtherExam`.
 */
class FolioOtherExamSearch extends FolioOtherExam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['folio_id', 'seq', 'exam_id', 'posted'], 'integer'],
            [['exam_value', 'exam_result'], 'safe'],
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
        $query = FolioOtherExam::find();

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
            'folio_id' => $this->folio_id,
            'seq' => $this->seq,
            'exam_id' => $this->exam_id,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'exam_value', $this->exam_value])
            ->andFilterWhere(['like', 'exam_result', $this->exam_result]);

        return $dataProvider;
    }
}
