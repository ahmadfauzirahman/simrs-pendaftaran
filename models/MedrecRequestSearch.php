<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedrecRequest;

/**
 * MedrecRequestSearch represents the model behind the search form of `app\models\MedrecRequest`.
 */
class MedrecRequestSearch extends MedrecRequest
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mr_request_id', 'from_location_id', 'folio_id', 'request_type', 'posted', 'created_user_id', 'modified_user_id', 'status_patient', 'printed', 'bag', 'reg_id', 'return_user'], 'integer'],
            [['mr_request_date', 'description', 'mr_respond_date', 'created_time', 'modified_time', 'return_date'], 'safe'],
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
        $query = MedrecRequest::find();

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
            'mr_request_id' => $this->mr_request_id,
            'from_location_id' => $this->from_location_id,
            'mr_request_date' => $this->mr_request_date,
            'folio_id' => $this->folio_id,
            'request_type' => $this->request_type,
            'posted' => $this->posted,
            'mr_respond_date' => $this->mr_respond_date,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'status_patient' => $this->status_patient,
            'printed' => $this->printed,
            'bag' => $this->bag,
            'reg_id' => $this->reg_id,
            'return_date' => $this->return_date,
            'return_user' => $this->return_user,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
