<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsReferral;

/**
 * BpjsReferralSearch represents the model behind the search form of `app\models\BpjsReferral`.
 */
class BpjsReferralSearch extends BpjsReferral
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'bpjs_from_cause', 'verified_by', 'status', 'rujukan_intern'], 'integer'],
            [['bpjs_refer_no', 'bpjs_refer_date', 'bpjs_refer_from', 'bpjs_refer_from_name', 'bpjs_refer_to', 'bpjs_refer_to_name', 'bpjs_service', 'bpjs_service_to', 'bpjs_service_cos', 'bpjs_from_diagnose_code', 'bpjs_from_diagnose', 'bpjs_from_location', 'bpjs_notes', 'verified_time', 'no_skdp'], 'safe'],
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
        $query = BpjsReferral::find();

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
            'patient_id' => $this->patient_id,
            'bpjs_refer_date' => $this->bpjs_refer_date,
            'bpjs_from_cause' => $this->bpjs_from_cause,
            'verified_by' => $this->verified_by,
            'verified_time' => $this->verified_time,
            'status' => $this->status,
            'rujukan_intern' => $this->rujukan_intern,
        ]);

        $query->andFilterWhere(['like', 'bpjs_refer_no', $this->bpjs_refer_no])
            ->andFilterWhere(['like', 'bpjs_refer_from', $this->bpjs_refer_from])
            ->andFilterWhere(['like', 'bpjs_refer_from_name', $this->bpjs_refer_from_name])
            ->andFilterWhere(['like', 'bpjs_refer_to', $this->bpjs_refer_to])
            ->andFilterWhere(['like', 'bpjs_refer_to_name', $this->bpjs_refer_to_name])
            ->andFilterWhere(['like', 'bpjs_service', $this->bpjs_service])
            ->andFilterWhere(['like', 'bpjs_service_to', $this->bpjs_service_to])
            ->andFilterWhere(['like', 'bpjs_service_cos', $this->bpjs_service_cos])
            ->andFilterWhere(['like', 'bpjs_from_diagnose_code', $this->bpjs_from_diagnose_code])
            ->andFilterWhere(['like', 'bpjs_from_diagnose', $this->bpjs_from_diagnose])
            ->andFilterWhere(['like', 'bpjs_from_location', $this->bpjs_from_location])
            ->andFilterWhere(['like', 'bpjs_notes', $this->bpjs_notes])
            ->andFilterWhere(['like', 'no_skdp', $this->no_skdp]);

        return $dataProvider;
    }
}
