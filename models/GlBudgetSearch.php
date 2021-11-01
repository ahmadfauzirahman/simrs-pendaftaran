<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GlBudget;

/**
 * GlBudgetSearch represents the model behind the search form of `app\models\GlBudget`.
 */
class GlBudgetSearch extends GlBudget
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['account_id', 'location_id', 'gl_year', 'created_user_id', 'modified_user_id'], 'integer'],
            [['period1', 'period2', 'period3', 'period4', 'period5', 'period6', 'period7', 'period8', 'period9', 'period10', 'period11', 'period12'], 'number'],
            [['created_time', 'modified_time'], 'safe'],
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
        $query = GlBudget::find();

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
            'account_id' => $this->account_id,
            'location_id' => $this->location_id,
            'gl_year' => $this->gl_year,
            'period1' => $this->period1,
            'period2' => $this->period2,
            'period3' => $this->period3,
            'period4' => $this->period4,
            'period5' => $this->period5,
            'period6' => $this->period6,
            'period7' => $this->period7,
            'period8' => $this->period8,
            'period9' => $this->period9,
            'period10' => $this->period10,
            'period11' => $this->period11,
            'period12' => $this->period12,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        return $dataProvider;
    }
}
