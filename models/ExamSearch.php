<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Exam;

/**
 * ExamSearch represents the model behind the search form of `app\models\Exam`.
 */
class ExamSearch extends Exam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['exam_id', 'report_seq', 'created_user_id', 'modified_user_id', 'exam_type', 'item_id', 'print_seq'], 'integer'],
            [['exam_name', 'exam_value', 'exam_method', 'int_ip_address', 'equipment_id', 'test_id', 'header_format', 'kategori1', 'created_time', 'modified_time', 'uom', 'exam_name_en', 'test_id_en', 'header_format_en', 'exam_result_m', 'exam_result_f'], 'safe'],
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
        $query = Exam::find();

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
            'report_seq' => $this->report_seq,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'exam_type' => $this->exam_type,
            'item_id' => $this->item_id,
            'print_seq' => $this->print_seq,
        ]);

        $query->andFilterWhere(['like', 'exam_name', $this->exam_name])
            ->andFilterWhere(['like', 'exam_value', $this->exam_value])
            ->andFilterWhere(['like', 'exam_method', $this->exam_method])
            ->andFilterWhere(['like', 'int_ip_address', $this->int_ip_address])
            ->andFilterWhere(['like', 'equipment_id', $this->equipment_id])
            ->andFilterWhere(['like', 'test_id', $this->test_id])
            ->andFilterWhere(['like', 'header_format', $this->header_format])
            ->andFilterWhere(['like', 'kategori1', $this->kategori1])
            ->andFilterWhere(['like', 'uom', $this->uom])
            ->andFilterWhere(['like', 'exam_name_en', $this->exam_name_en])
            ->andFilterWhere(['like', 'test_id_en', $this->test_id_en])
            ->andFilterWhere(['like', 'header_format_en', $this->header_format_en])
            ->andFilterWhere(['like', 'exam_result_m', $this->exam_result_m])
            ->andFilterWhere(['like', 'exam_result_f', $this->exam_result_f]);

        return $dataProvider;
    }
}
