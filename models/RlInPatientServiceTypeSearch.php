<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RlInPatientServiceType;

/**
 * RlInPatientServiceTypeSearch represents the model behind the search form of `app\models\RlInPatientServiceType`.
 */
class RlInPatientServiceTypeSearch extends RlInPatientServiceType
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['server_id'], 'integer'],
            [['server_name'], 'safe'],
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
        $query = RlInPatientServiceType::find();

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
            'server_id' => $this->server_id,
        ]);

        $query->andFilterWhere(['like', 'server_name', $this->server_name]);

        return $dataProvider;
    }
}
