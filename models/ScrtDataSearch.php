<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ScrtData;

/**
 * ScrtDataSearch represents the model behind the search form of `app\models\ScrtData`.
 */
class ScrtDataSearch extends ScrtData
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data_id'], 'integer'],
            [['description', 'table_name', 'key_field', 'displayed_field', 'order_field', 'module'], 'safe'],
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
        $query = ScrtData::find();

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
            'data_id' => $this->data_id,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'table_name', $this->table_name])
            ->andFilterWhere(['like', 'key_field', $this->key_field])
            ->andFilterWhere(['like', 'displayed_field', $this->displayed_field])
            ->andFilterWhere(['like', 'order_field', $this->order_field])
            ->andFilterWhere(['like', 'module', $this->module]);

        return $dataProvider;
    }
}
