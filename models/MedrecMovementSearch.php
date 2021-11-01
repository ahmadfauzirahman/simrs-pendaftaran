<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MedrecMovement;

/**
 * MedrecMovementSearch represents the model behind the search form of `app\models\MedrecMovement`.
 */
class MedrecMovementSearch extends MedrecMovement
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medrec_movement_id', 'folio_id', 'registration_id', 'from_location_id', 'to_location_id', 'posted_by_user_id'], 'integer'],
            [['movement_date'], 'safe'],
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
        $query = MedrecMovement::find();

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
            'medrec_movement_id' => $this->medrec_movement_id,
            'folio_id' => $this->folio_id,
            'registration_id' => $this->registration_id,
            'from_location_id' => $this->from_location_id,
            'to_location_id' => $this->to_location_id,
            'movement_date' => $this->movement_date,
            'posted_by_user_id' => $this->posted_by_user_id,
        ]);

        return $dataProvider;
    }
}
