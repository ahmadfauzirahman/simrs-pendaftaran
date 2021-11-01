<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ExamRefValue;

/**
 * ExamRefValueSearch represents the model behind the search form of `app\models\ExamRefValue`.
 */
class ExamRefValueSearch extends ExamRefValue
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exam_id', 'seq', 'sex', 'age_range1', 'age_range2', 'age_unit', 'plusmin'], 'integer'],
            [['operator1', 'conj', 'operator2', 'reference_value', 'description'], 'safe'],
            [['value1', 'value2'], 'number'],
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
        $query = ExamRefValue::find();

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
            'exam_id' => $this->exam_id,
            'seq' => $this->seq,
            'sex' => $this->sex,
            'age_range1' => $this->age_range1,
            'age_range2' => $this->age_range2,
            'age_unit' => $this->age_unit,
            'value1' => $this->value1,
            'value2' => $this->value2,
            'plusmin' => $this->plusmin,
        ]);

        $query->andFilterWhere(['like', 'operator1', $this->operator1])
            ->andFilterWhere(['like', 'conj', $this->conj])
            ->andFilterWhere(['like', 'operator2', $this->operator2])
            ->andFilterWhere(['like', 'reference_value', $this->reference_value])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
