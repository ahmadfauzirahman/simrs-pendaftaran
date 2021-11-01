<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NutrientSetup;

/**
 * NutrientSetupSearch represents the model behind the search form of `app\models\NutrientSetup`.
 */
class NutrientSetupSearch extends NutrientSetup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['company_id', 'diet_rpt_cat_id'], 'integer'],
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
        $query = NutrientSetup::find();

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
            'company_id' => $this->company_id,
            'diet_rpt_cat_id' => $this->diet_rpt_cat_id,
        ]);

        return $dataProvider;
    }
}
