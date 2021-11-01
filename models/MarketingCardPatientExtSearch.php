<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarketingCardPatientExt;

/**
 * MarketingCardPatientExtSearch represents the model behind the search form of `app\models\MarketingCardPatientExt`.
 */
class MarketingCardPatientExtSearch extends MarketingCardPatientExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card_id', 'patient_id', 'created_user_id'], 'integer'],
            [['notes', 'created_time'], 'safe'],
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
        $query = MarketingCardPatientExt::find();

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
            'card_id' => $this->card_id,
            'patient_id' => $this->patient_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
