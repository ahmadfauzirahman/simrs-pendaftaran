<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportVar;

/**
 * ReportVarSearch represents the model behind the search form of `app\models\ReportVar`.
 */
class ReportVarSearch extends ReportVar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['variable_id'], 'integer'],
            [['variable_name', 'variable_value', 'category'], 'safe'],
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
        $query = ReportVar::find();

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
            'variable_id' => $this->variable_id,
        ]);

        $query->andFilterWhere(['like', 'variable_name', $this->variable_name])
            ->andFilterWhere(['like', 'variable_value', $this->variable_value])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
