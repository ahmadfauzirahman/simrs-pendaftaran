<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Diet;

/**
 * DietSearch represents the model behind the search form of `app\models\Diet`.
 */
class DietSearch extends Diet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['diet_id', 'diet_group_id', 'disabled', 'created_user_id', 'modified_user_id'], 'integer'],
            [['diet_name', 'created_time', 'modified_time'], 'safe'],
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
        $query = Diet::find();

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
            'diet_id' => $this->diet_id,
            'diet_group_id' => $this->diet_group_id,
            'disabled' => $this->disabled,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'diet_name', $this->diet_name]);

        return $dataProvider;
    }
}
