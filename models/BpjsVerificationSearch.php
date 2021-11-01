<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BpjsVerification;

/**
 * BpjsVerificationSearch represents the model behind the search form of `app\models\BpjsVerification`.
 */
class BpjsVerificationSearch extends BpjsVerification
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_name', 'request_time', 'data', 'result', 'his'], 'safe'],
            [['seq', 'request_result'], 'integer'],
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
        $query = BpjsVerification::find();

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
            'request_time' => $this->request_time,
            'seq' => $this->seq,
            'request_result' => $this->request_result,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'his', $this->his]);

        return $dataProvider;
    }
}
