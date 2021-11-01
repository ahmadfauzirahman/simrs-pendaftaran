<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MarketingVisite;

/**
 * MarketingVisiteSearch represents the model behind the search form of `app\models\MarketingVisite`.
 */
class MarketingVisiteSearch extends MarketingVisite
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marketing_id', 'staff_1', 'staff_2', 'staff_3', 'staff_4', 'staff_5', 'reference_id', 'created_user_id', 'modified_user_id', 'posted'], 'integer'],
            [['marketing_no', 'marketing_date', 'marketing_end_date', 'notes', 'created_time', 'modified_time'], 'safe'],
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
        $query = MarketingVisite::find();

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
            'marketing_id' => $this->marketing_id,
            'marketing_date' => $this->marketing_date,
            'marketing_end_date' => $this->marketing_end_date,
            'staff_1' => $this->staff_1,
            'staff_2' => $this->staff_2,
            'staff_3' => $this->staff_3,
            'staff_4' => $this->staff_4,
            'staff_5' => $this->staff_5,
            'reference_id' => $this->reference_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'posted' => $this->posted,
        ]);

        $query->andFilterWhere(['like', 'marketing_no', $this->marketing_no])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
