<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CompleteFileHdXt;

/**
 * CompleteFileHdXtSearch represents the model behind the search form of `app\models\CompleteFileHdXt`.
 */
class CompleteFileHdXtSearch extends CompleteFileHdXt
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_id', 'staff_id', 'h_1', 'h_2', 'h_3', 'h_4', 'h_5', 'h_6', 'h_7', 'h_8', 'h_9', 'h_10', 'h_11', 'h_12', 'h_cp', 'created_user_id'], 'integer'],
            [['date_receive_file', 'date_start_hd', 'h_date_cp', 'created_time'], 'safe'],
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
        $query = CompleteFileHdXt::find();

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
            'reg_id' => $this->reg_id,
            'staff_id' => $this->staff_id,
            'date_receive_file' => $this->date_receive_file,
            'date_start_hd' => $this->date_start_hd,
            'h_1' => $this->h_1,
            'h_2' => $this->h_2,
            'h_3' => $this->h_3,
            'h_4' => $this->h_4,
            'h_5' => $this->h_5,
            'h_6' => $this->h_6,
            'h_7' => $this->h_7,
            'h_8' => $this->h_8,
            'h_9' => $this->h_9,
            'h_10' => $this->h_10,
            'h_11' => $this->h_11,
            'h_12' => $this->h_12,
            'h_cp' => $this->h_cp,
            'h_date_cp' => $this->h_date_cp,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
        ]);

        return $dataProvider;
    }
}
