<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NInvAdj;

/**
 * NInvAdjSearch represents the model behind the search form of `app\models\NInvAdj`.
 */
class NInvAdjSearch extends NInvAdj
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adjustment_id', 'warehouse_id', 'adjustment_type', 'location_id', 'adj_account_id', 'approved', 'posted', 'gl_period', 'gl_year', 'created_user_id', 'modified_user_id'], 'integer'],
            [['adjustment_no', 'adjustment_request_date', 'adjustment_date', 'requested_by', 'description', 'created_time', 'modified_time'], 'safe'],
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
        $query = NInvAdj::find();

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
            'adjustment_id' => $this->adjustment_id,
            'adjustment_request_date' => $this->adjustment_request_date,
            'adjustment_date' => $this->adjustment_date,
            'warehouse_id' => $this->warehouse_id,
            'adjustment_type' => $this->adjustment_type,
            'location_id' => $this->location_id,
            'adj_account_id' => $this->adj_account_id,
            'approved' => $this->approved,
            'posted' => $this->posted,
            'gl_period' => $this->gl_period,
            'gl_year' => $this->gl_year,
            'created_user_id' => $this->created_user_id,
            'created_time' => $this->created_time,
            'modified_user_id' => $this->modified_user_id,
            'modified_time' => $this->modified_time,
        ]);

        $query->andFilterWhere(['like', 'adjustment_no', $this->adjustment_no])
            ->andFilterWhere(['like', 'requested_by', $this->requested_by])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
