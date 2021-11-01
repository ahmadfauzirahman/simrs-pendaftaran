<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ambulance;

/**
 * AmbulanceSearch represents the model behind the search form of `app\models\Ambulance`.
 */
class AmbulanceSearch extends Ambulance
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ambulance_id', 'created_user_id', 'modified_user_id', 'disabled'], 'integer'],
            [['ambulance_name', 'plat_nomor', 'address_line', 'city', 'created_time', 'modified_user_time'], 'safe'],
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
        $query = Ambulance::find();

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
            'ambulance_id' => $this->ambulance_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_user_time' => $this->modified_user_time,
            'disabled' => $this->disabled,
        ]);

        $query->andFilterWhere(['like', 'ambulance_name', $this->ambulance_name])
            ->andFilterWhere(['like', 'plat_nomor', $this->plat_nomor])
            ->andFilterWhere(['like', 'address_line', $this->address_line])
            ->andFilterWhere(['like', 'city', $this->city]);

        return $dataProvider;
    }
}
