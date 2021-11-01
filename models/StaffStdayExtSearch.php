<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\StaffStdayExt;

/**
 * StaffStdayExtSearch represents the model behind the search form of `app\models\StaffStdayExt`.
 */
class StaffStdayExtSearch extends StaffStdayExt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_day'], 'integer'],
            [['day_name', 'day_name2'], 'safe'],
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
        $query = StaffStdayExt::find();

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
            'id_day' => $this->id_day,
        ]);

        $query->andFilterWhere(['like', 'day_name', $this->day_name])
            ->andFilterWhere(['like', 'day_name2', $this->day_name2]);

        return $dataProvider;
    }
}
