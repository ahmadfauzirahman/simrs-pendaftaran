<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmrPatientNotes;

/**
 * EmrPatientNotesSearch represents the model behind the search form of `app\models\EmrPatientNotes`.
 */
class EmrPatientNotesSearch extends EmrPatientNotes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'seq', 'patient_notes_id', 'notes_status', 'notes_created_by', 'notes_modified_by', 'notes_cancelled_by', 'notes_verified_by', 'notes_cosigned_by', 'notes_cosigned2_by', 'notes_cosigned3_by', 'notes_cosigned4_by', 'notes_cosigned5_by'], 'integer'],
            [['notes_description', 'notes_created_time', 'notes_modified_time', 'notes_cancelled_time', 'notes_cancellation_reason', 'notes_cancelled_signature', 'notes_verified_time', 'notes_verified_signature', 'notes_cosigned_time', 'notes_cosigned_signature', 'notes_cosigned2_time', 'notes_cosigned2_signature', 'notes_cosigned3_time', 'notes_cosigned3_signature', 'notes_cosigned4_time', 'notes_cosigned4_signature', 'notes_cosigned5_time', 'notes_cosigned5_signature'], 'safe'],
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
        $query = EmrPatientNotes::find();

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
            'seq' => $this->seq,
            'patient_notes_id' => $this->patient_notes_id,
            'notes_status' => $this->notes_status,
            'notes_created_time' => $this->notes_created_time,
            'notes_created_by' => $this->notes_created_by,
            'notes_modified_time' => $this->notes_modified_time,
            'notes_modified_by' => $this->notes_modified_by,
            'notes_cancelled_time' => $this->notes_cancelled_time,
            'notes_cancelled_by' => $this->notes_cancelled_by,
            'notes_verified_time' => $this->notes_verified_time,
            'notes_verified_by' => $this->notes_verified_by,
            'notes_cosigned_time' => $this->notes_cosigned_time,
            'notes_cosigned_by' => $this->notes_cosigned_by,
            'notes_cosigned2_time' => $this->notes_cosigned2_time,
            'notes_cosigned2_by' => $this->notes_cosigned2_by,
            'notes_cosigned3_time' => $this->notes_cosigned3_time,
            'notes_cosigned3_by' => $this->notes_cosigned3_by,
            'notes_cosigned4_time' => $this->notes_cosigned4_time,
            'notes_cosigned4_by' => $this->notes_cosigned4_by,
            'notes_cosigned5_time' => $this->notes_cosigned5_time,
            'notes_cosigned5_by' => $this->notes_cosigned5_by,
        ]);

        $query->andFilterWhere(['like', 'notes_description', $this->notes_description])
            ->andFilterWhere(['like', 'notes_cancellation_reason', $this->notes_cancellation_reason])
            ->andFilterWhere(['like', 'notes_cancelled_signature', $this->notes_cancelled_signature])
            ->andFilterWhere(['like', 'notes_verified_signature', $this->notes_verified_signature])
            ->andFilterWhere(['like', 'notes_cosigned_signature', $this->notes_cosigned_signature])
            ->andFilterWhere(['like', 'notes_cosigned2_signature', $this->notes_cosigned2_signature])
            ->andFilterWhere(['like', 'notes_cosigned3_signature', $this->notes_cosigned3_signature])
            ->andFilterWhere(['like', 'notes_cosigned4_signature', $this->notes_cosigned4_signature])
            ->andFilterWhere(['like', 'notes_cosigned5_signature', $this->notes_cosigned5_signature]);

        return $dataProvider;
    }
}
