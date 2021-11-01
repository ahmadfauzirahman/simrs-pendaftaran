<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScrtPolicyLogin;

/**
 * ScrtPolicyLoginSearch represents the model behind the search form of `app\models\ScrtPolicyLogin`.
 */
class ScrtPolicyLoginSearch extends ScrtPolicyLogin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['policy_id', 'seq', 'login_day'], 'integer'],
            [['login_time'], 'safe'],
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
        $query = ScrtPolicyLogin::find();

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
            'policy_id' => $this->policy_id,
            'seq' => $this->seq,
            'login_day' => $this->login_day,
            'login_time' => $this->login_time,
        ]);

        return $dataProvider;
    }
}
