<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiPatientXt;

/**
 * OkupasiPatientXtSearch represents the model behind the search form of `app\models\OkupasiPatientXt`.
 */
class OkupasiPatientXtSearch extends OkupasiPatientXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['ktp_no', 'created_time', 'modified_time'], 'safe'],
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
        $query = OkupasiPatientXt::find();

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
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'ktp_no', $this->ktp_no]);

        return $dataProvider;
    }
}
