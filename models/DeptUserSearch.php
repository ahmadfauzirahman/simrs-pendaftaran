<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DeptUser;

/**
 * DeptUserSearch represents the model behind the search form of `app\models\DeptUser`.
 */
class DeptUserSearch extends DeptUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_id', 'user_id'], 'integer'],
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
        $query = DeptUser::find();

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
            'dept_id' => $this->dept_id,
            'user_id' => $this->user_id,
        ]);

        return $dataProvider;
    }
}
