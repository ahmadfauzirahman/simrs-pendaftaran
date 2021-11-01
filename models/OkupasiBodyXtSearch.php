<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OkupasiBodyXt;

/**
 * OkupasiBodyXtSearch represents the model behind the search form of `app\models\OkupasiBodyXt`.
 */
class OkupasiBodyXtSearch extends OkupasiBodyXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['okup_id', 'seq', 'body_id', 'body_type', 'created_user_id'], 'integer'],
            [['created_time'], 'safe'],
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
        $query = OkupasiBodyXt::find();

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
            'okup_id' => $this->okup_id,
            'seq' => $this->seq,
            'body_id' => $this->body_id,
            'body_type' => $this->body_type,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        return $dataProvider;
    }
}
