<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MaintTaskRes;

/**
 * MaintTaskResSearch represents the model behind the search form of `app\models\MaintTaskRes`.
 */
class MaintTaskResSearch extends MaintTaskRes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'seq', 'resource_id'], 'integer'],
            [['quantity'], 'number'],
            [['task'], 'safe'],
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
        $query = MaintTaskRes::find();

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
            'task_id' => $this->task_id,
            'seq' => $this->seq,
            'resource_id' => $this->resource_id,
            'quantity' => $this->quantity,
        ]);

        $query->andFilterWhere(['like', 'task', $this->task]);

        return $dataProvider;
    }
}