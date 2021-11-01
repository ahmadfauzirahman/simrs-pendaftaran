<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReportParam;

/**
 * ReportParamSearch represents the model behind the search form of `app\models\ReportParam`.
 */
class ReportParamSearch extends ReportParam
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['report_id', 'param_id', 'control_id', 'order_seq'], 'integer'],
            [['param_name', 'param_caption', 'default_value'], 'safe'],
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
        $query = ReportParam::find();

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
            'report_id' => $this->report_id,
            'param_id' => $this->param_id,
            'control_id' => $this->control_id,
            'order_seq' => $this->order_seq,
        ]);

        $query->andFilterWhere(['like', 'param_name', $this->param_name])
            ->andFilterWhere(['like', 'param_caption', $this->param_caption])
            ->andFilterWhere(['like', 'default_value', $this->default_value]);

        return $dataProvider;
    }
}
