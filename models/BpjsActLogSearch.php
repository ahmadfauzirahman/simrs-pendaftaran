<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsActLog;

/**
 * BpjsActLogSearch represents the model behind the search form of `app\models\BpjsActLog`.
 */
class BpjsActLogSearch extends BpjsActLog
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bpjs_act_id', 'user_id'], 'integer'],
            [['bpjs_act_time', 'ip_address', 'comp_name', 'query_url', 'query_result'], 'safe'],
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
        $query = BpjsActLog::find();

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
            'bpjs_act_id' => $this->bpjs_act_id,
            'bpjs_act_time' => $this->bpjs_act_time,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'ip_address', $this->ip_address])
            ->andFilterWhere(['like', 'comp_name', $this->comp_name])
            ->andFilterWhere(['like', 'query_url', $this->query_url])
            ->andFilterWhere(['like', 'query_result', $this->query_result]);

        return $dataProvider;
    }
}
