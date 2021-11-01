<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Department;

/**
 * DepartmentSearch represents the model behind the search form of `app\models\Department`.
 */
class DepartmentSearch extends Department
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id', 'created_user_id', 'modified_user_id', 'tab_charges', 'tab_auto_charges', 'tab_anamnesis', 'tab_physical_exam', 'tab_other_exam', 'tab_diagnosis', 'tab_therapy', 'tab_procedure', 'tab_prognosis', 'tab_alergy', 'tab_degenerative', 'tab_chronic', 'tab_diet', 'tab_notes', 'gl_jtype_id', 'col_staff'], 'integer'],
            [['dept_name', 'person_in_charge', 'created_time', 'modified_time', 'unit_caption', 'sub_unit_caption', 'small_icon', 'large_icon', 'description', 'refer_dept_code'], 'safe'],
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
        $query = Department::find();

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
            'dept_id' => $this->dept_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'tab_charges' => $this->tab_charges,
            'tab_auto_charges' => $this->tab_auto_charges,
            'tab_anamnesis' => $this->tab_anamnesis,
            'tab_physical_exam' => $this->tab_physical_exam,
            'tab_other_exam' => $this->tab_other_exam,
            'tab_diagnosis' => $this->tab_diagnosis,
            'tab_therapy' => $this->tab_therapy,
            'tab_procedure' => $this->tab_procedure,
            'tab_prognosis' => $this->tab_prognosis,
            'tab_alergy' => $this->tab_alergy,
            'tab_degenerative' => $this->tab_degenerative,
            'tab_chronic' => $this->tab_chronic,
            'tab_diet' => $this->tab_diet,
            'tab_notes' => $this->tab_notes,
            'gl_jtype_id' => $this->gl_jtype_id,
            'col_staff' => $this->col_staff,
        ]);

        $query->andFilterWhere(['like', 'dept_name', $this->dept_name])
            ->andFilterWhere(['like', 'person_in_charge', $this->person_in_charge])
            ->andFilterWhere(['like', 'unit_caption', $this->unit_caption])
            ->andFilterWhere(['like', 'sub_unit_caption', $this->sub_unit_caption])
            ->andFilterWhere(['like', 'small_icon', $this->small_icon])
            ->andFilterWhere(['like', 'large_icon', $this->large_icon])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'refer_dept_code', $this->refer_dept_code]);

        return $dataProvider;
    }
}
