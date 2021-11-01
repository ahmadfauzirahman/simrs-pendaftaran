<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resource;

/**
 * ResourceSearch represents the model behind the search form of `app\models\Resource`.
 */
class ResourceSearch extends Resource
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['resource_id', 'res_group_id', 'res_type_id', 'created_user_id', 'modified_user_id'], 'integer'],
            [['resource_name', 'created_time', 'modified_time'], 'safe'],
            [['cost_per_hour'], 'number'],
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
        $query = Resource::find();

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
            'resource_id' => $this->resource_id,
            'cost_per_hour' => $this->cost_per_hour,
            'res_group_id' => $this->res_group_id,
            'res_type_id' => $this->res_type_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'resource_name', $this->resource_name]);

        return $dataProvider;
    }
}
