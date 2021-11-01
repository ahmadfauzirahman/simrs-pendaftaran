<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DriverAmbulance;

/**
 * DriverAmbulanceSearch represents the model behind the search form of `app\models\DriverAmbulance`.
 */
class DriverAmbulanceSearch extends DriverAmbulance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['driver_id', 'driver_type', 'ambulance_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['driver_name', 'phone', 'created_time', 'modified_time'], 'safe'],
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
        $query = DriverAmbulance::find();

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
            'driver_id' => $this->driver_id,
            'driver_type' => $this->driver_type,
            'ambulance_id' => $this->ambulance_id,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'driver_name', $this->driver_name])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
