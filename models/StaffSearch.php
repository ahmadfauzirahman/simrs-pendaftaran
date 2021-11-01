<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Staff;

/**
 * StaffSearch represents the model behind the search form of `app\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['staff_id', 'staff_type_id', 'staff_group_id', 'created_user_id', 'modified_user_id', 'disabled', 'vendor_id', 'refer_doctor_bpjs'], 'integer'],
            [['staff_name', 'job_title', 'created_time', 'modified_time', 'profile', 'photo', 'refer_doctor_hfis'], 'safe'],
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
        $query = Staff::find();

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
            'staff_id' => $this->staff_id,
            'staff_type_id' => $this->staff_type_id,
            'staff_group_id' => $this->staff_group_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'disabled' => $this->disabled,
            'vendor_id' => $this->vendor_id,
            'refer_doctor_bpjs' => $this->refer_doctor_bpjs,
        ]);

        $query->andFilterWhere(['like', 'staff_name', $this->staff_name])
            ->andFilterWhere(['like', 'job_title', $this->job_title])
            ->andFilterWhere(['like', 'profile', $this->profile])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'refer_doctor_hfis', $this->refer_doctor_hfis]);

        return $dataProvider;
    }
}
