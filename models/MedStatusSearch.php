<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedStatus;

/**
 * MedStatusSearch represents the model behind the search form of `app\models\MedStatus`.
 */
class MedStatusSearch extends MedStatus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['med_status_id', 'status_type', 'patient_condition', 'eklaim_status', 'created_user_id', 'modified_user_id'], 'integer'],
            [['med_status_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = MedStatus::find();

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
            'med_status_id' => $this->med_status_id,
            'status_type' => $this->status_type,
            'patient_condition' => $this->patient_condition,
            'eklaim_status' => $this->eklaim_status,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'med_status_name', $this->med_status_name]);

        return $dataProvider;
    }
}
