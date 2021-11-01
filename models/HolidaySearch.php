<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Holiday;

/**
 * HolidaySearch represents the model behind the search form of `app\models\Holiday`.
 */
class HolidaySearch extends Holiday
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['holiday_id'], 'integer'],
            [['holiday_start_date', 'holiday_end_date', 'holiday_desc'], 'safe'],
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
        $query = Holiday::find();

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
            'holiday_id' => $this->holiday_id,
            'holiday_start_date' => $this->holiday_start_date,
            'holiday_end_date' => $this->holiday_end_date,
        ]);

        $query->andFilterWhere(['like', 'holiday_desc', $this->holiday_desc]);

        return $dataProvider;
    }
}
