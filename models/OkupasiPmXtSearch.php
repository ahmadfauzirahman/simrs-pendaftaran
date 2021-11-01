<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiPmXt;

/**
 * OkupasiPmXtSearch represents the model behind the search form of `app\models\OkupasiPmXt`.
 */
class OkupasiPmXtSearch extends OkupasiPmXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pm_id'], 'integer'],
            [['pm_name'], 'safe'],
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
        $query = OkupasiPmXt::find();

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
            'pm_id' => $this->pm_id,
        ]);

        $query->andFilterWhere(['like', 'pm_name', $this->pm_name]);

        return $dataProvider;
    }
}
