<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportParamCtl;

/**
 * ReportParamCtlSearch represents the model behind the search form of `app\models\ReportParamCtl`.
 */
class ReportParamCtlSearch extends ReportParamCtl
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['control_id'], 'integer'],
            [['group_name', 'description', 'control_name', 'data_type'], 'safe'],
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
        $query = ReportParamCtl::find();

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
            'control_id' => $this->control_id,
        ]);

        $query->andFilterWhere(['like', 'group_name', $this->group_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'control_name', $this->control_name])
            ->andFilterWhere(['like', 'data_type', $this->data_type]);

        return $dataProvider;
    }
}
