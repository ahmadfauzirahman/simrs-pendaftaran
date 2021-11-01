<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IpAvailable;

/**
 * IpAvailableSearch represents the model behind the search form of `app\models\IpAvailable`.
 */
class IpAvailableSearch extends IpAvailable
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['act_date', 'unit_name'], 'safe'],
            [['unit_id', 'bed_available'], 'integer'],
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
        $query = IpAvailable::find();

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
            'act_date' => $this->act_date,
            'unit_id' => $this->unit_id,
            'bed_available' => $this->bed_available,
        ]);

        $query->andFilterWhere(['like', 'unit_name', $this->unit_name]);

        return $dataProvider;
    }
}
