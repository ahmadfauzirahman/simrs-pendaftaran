<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UsageEn;

/**
 * UsageEnSearch represents the model behind the search form of `app\models\UsageEn`.
 */
class UsageEnSearch extends UsageEn
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usage', 'usage_english'], 'safe'],
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
        $query = UsageEn::find();

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
        $query->andFilterWhere(['like', 'usage', $this->usage])
            ->andFilterWhere(['like', 'usage_english', $this->usage_english]);

        return $dataProvider;
    }
}
