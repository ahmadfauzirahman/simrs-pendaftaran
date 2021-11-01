<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Unit;

/**
 * UnitSearch represents the model behind the search form of `app\models\Unit`.
 */
class UnitSearch extends Unit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['unit_id', 'dept_id', 'sub_unit_availability', 'created_user_id', 'modified_user_id', 'tax1_id', 'tax2_id', 'med_status_open', 'med_status_close', 'patient_ar_gl_acc_id', 'order_entry_after_reg', 'readonly_order_entry', 'gl_jtype_id', 'undetermined_end_servicedate', 'use_web_reservation', 'q_no', 'q_play', 'q_view', 'sex', 'q_mark'], 'integer'],
            [['unit_name', 'sub_unit_caption', 'person_in_charge', 'status_available', 'status_used', 'status_housekeep', 'status_maintenance', 'created_time', 'modified_time', 'small_icon', 'large_icon', 'description', 'refer_unit_code', 'q_date'], 'safe'],
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
        $query = Unit::find();

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
            'unit_id' => $this->unit_id,
            'dept_id' => $this->dept_id,
            'sub_unit_availability' => $this->sub_unit_availability,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'tax1_id' => $this->tax1_id,
            'tax2_id' => $this->tax2_id,
            'med_status_open' => $this->med_status_open,
            'med_status_close' => $this->med_status_close,
            'patient_ar_gl_acc_id' => $this->patient_ar_gl_acc_id,
            'order_entry_after_reg' => $this->order_entry_after_reg,
            'readonly_order_entry' => $this->readonly_order_entry,
            'gl_jtype_id' => $this->gl_jtype_id,
            'undetermined_end_servicedate' => $this->undetermined_end_servicedate,
            'use_web_reservation' => $this->use_web_reservation,
            'q_no' => $this->q_no,
            'q_date' => $this->q_date,
            'q_play' => $this->q_play,
            'q_view' => $this->q_view,
            'sex' => $this->sex,
            'q_mark' => $this->q_mark,
        ]);

        $query->andFilterWhere(['like', 'unit_name', $this->unit_name])
            ->andFilterWhere(['like', 'sub_unit_caption', $this->sub_unit_caption])
            ->andFilterWhere(['like', 'person_in_charge', $this->person_in_charge])
            ->andFilterWhere(['like', 'status_available', $this->status_available])
            ->andFilterWhere(['like', 'status_used', $this->status_used])
            ->andFilterWhere(['like', 'status_housekeep', $this->status_housekeep])
            ->andFilterWhere(['like', 'status_maintenance', $this->status_maintenance])
            ->andFilterWhere(['like', 'small_icon', $this->small_icon])
            ->andFilterWhere(['like', 'large_icon', $this->large_icon])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'refer_unit_code', $this->refer_unit_code]);

        return $dataProvider;
    }
}
