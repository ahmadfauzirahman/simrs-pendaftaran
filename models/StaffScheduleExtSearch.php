<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffScheduleExt;

/**
 * StaffScheduleExtSearch represents the model behind the search form of `app\models\StaffScheduleExt`.
 */
class StaffScheduleExtSearch extends StaffScheduleExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['schedule_id', 'seq', 'id_day', 'staff_id', 'status_id', 'unit_id', 'view_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['schedule_date', 'schedule_time', 'end_time', 'created_time', 'modified_time'], 'safe'],
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
        $query = StaffScheduleExt::find();

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
            'schedule_id' => $this->schedule_id,
            'seq' => $this->seq,
            'schedule_date' => $this->schedule_date,
            'id_day' => $this->id_day,
            'schedule_time' => $this->schedule_time,
            'end_time' => $this->end_time,
            'staff_id' => $this->staff_id,
            'status_id' => $this->status_id,
            'unit_id' => $this->unit_id,
            'view_id' => $this->view_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        return $dataProvider;
    }
}
