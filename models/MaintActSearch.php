<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MaintAct;

/**
 * MaintActSearch represents the model behind the search form of `app\models\MaintAct`.
 */
class MaintActSearch extends MaintAct
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_id', 'department_id', 'category_id', 'location_id', 'asset_id', 'severity_id', 'requested_by', 'responded_by', 'result_id', 'posted_by', 'created_user_id', 'modified_user_id'], 'integer'],
            [['job_no', 'request_time', 'location_mark', 'contact_name', 'request_detail', 'respond_time', 'estimated_due_date', 'result_detail', 'crew_member', 'request_photo', 'result_photo', 'posted_time', 'created_time', 'modified_time'], 'safe'],
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
        $query = MaintAct::find();

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
            'job_id' => $this->job_id,
            'department_id' => $this->department_id,
            'category_id' => $this->category_id,
            'request_time' => $this->request_time,
            'location_id' => $this->location_id,
            'asset_id' => $this->asset_id,
            'severity_id' => $this->severity_id,
            'requested_by' => $this->requested_by,
            'respond_time' => $this->respond_time,
            'responded_by' => $this->responded_by,
            'estimated_due_date' => $this->estimated_due_date,
            'result_id' => $this->result_id,
            'posted_by' => $this->posted_by,
            'posted_time' => $this->posted_time,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'job_no', $this->job_no])
            ->andFilterWhere(['like', 'location_mark', $this->location_mark])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'request_detail', $this->request_detail])
            ->andFilterWhere(['like', 'result_detail', $this->result_detail])
            ->andFilterWhere(['like', 'crew_member', $this->crew_member])
            ->andFilterWhere(['like', 'request_photo', $this->request_photo])
            ->andFilterWhere(['like', 'result_photo', $this->result_photo]);

        return $dataProvider;
    }
}
