<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ActivityMntnc;

/**
 * ActivityMntncSearch represents the model behind the search form of `app\models\ActivityMntnc`.
 */
class ActivityMntncSearch extends ActivityMntnc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id', 'staff_id', 'staff_id2', 'staff_id3', 'staff_id4', 'unit_request', 'activity_type', 'object_asset', 'status', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['activity_no', 'activity_date', 'start_activity', 'end_activity', 'end_durasi', 'object_other', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = ActivityMntnc::find();

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
            'activity_id' => $this->activity_id,
            'staff_id' => $this->staff_id,
            'staff_id2' => $this->staff_id2,
            'staff_id3' => $this->staff_id3,
            'staff_id4' => $this->staff_id4,
            'activity_date' => $this->activity_date,
            'unit_request' => $this->unit_request,
            'start_activity' => $this->start_activity,
            'end_activity' => $this->end_activity,
            'activity_type' => $this->activity_type,
            'object_asset' => $this->object_asset,
            'status' => $this->status,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'activity_no', $this->activity_no])
            ->andFilterWhere(['like', 'end_durasi', $this->end_durasi])
            ->andFilterWhere(['like', 'object_other', $this->object_other])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
