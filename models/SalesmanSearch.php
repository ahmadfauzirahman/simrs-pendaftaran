<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Salesman;

/**
 * SalesmanSearch represents the model behind the search form of `app\models\Salesman`.
 */
class SalesmanSearch extends Salesman
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['salesman_id', 'created_user_id', 'modified_user_id', 'salesman_no'], 'integer'],
            [['salesman_name', 'created_time', 'modified_time', 'phone', 'notes'], 'safe'],
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
        $query = Salesman::find();

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
            'salesman_id' => $this->salesman_id,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
            'salesman_no' => $this->salesman_no,
        ]);

        $query->andFilterWhere(['like', 'salesman_name', $this->salesman_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
